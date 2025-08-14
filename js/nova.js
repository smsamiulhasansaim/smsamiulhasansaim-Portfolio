// Initialize GSAP
gsap.registerPlugin(ScrollTrigger);

// Configuration Constants
const CONFIG = {
    mobileBreakpoint: 768,
    smallMobileBreakpoint: 480,
    typing: {
        phrases: [
            "Junior Web Developer",
            "Cloud Architecture Specialist",
            "Performance Optimization Expert",
            "Open Source Contributor",
        ],
        speeds: {
            desktop: { type: 50, delete: 30, pause: 2000 },
            mobile: { type: 80, delete: 20, pause: 1500 }
        }
    },
    animations: {
        scroll: {
            desktop: { y: 80, duration: 1 },
            mobile: { y: 40, duration: 0.8 }
        },
        hero: {
            desktop: {
                title: { y: 80, duration: 1.2 },
                subtitle: { y: 50, duration: 1 },
                code: { y: 60, duration: 1 }
            },
            mobile: {
                title: { y: 40, duration: 1 },
                subtitle: { y: 30, duration: 0.8 },
                code: { y: 40, duration: 0.8 }
            }
        },
        floating: {
            desktop: { range: 30, duration: [4, 8] },
            mobile: { range: 15, duration: [3, 6] }
        },
        particles: {
            counts: {
                desktop: 50,
                mobile: 25,
                smallMobile: 15
            },
            sizes: {
                desktop: { min: 1, max: 3 },
                mobile: { min: 1, max: 2 }
            }
        }
    },
};

// Device Detection
const isMobile = () => window.innerWidth <= CONFIG.mobileBreakpoint;
const isSmallMobile = () => window.innerWidth <= CONFIG.smallMobileBreakpoint;

// Typing Animation
function initTypingAnimation() {
    let currentPhrase = 0;
    let currentLetter = 0;
    let deleting = false;
    const typingElement = document.getElementById('typing-text');
    if (!typingElement) return;

    const { type, delete: deleteSpeed, pause } = isMobile() ? 
        CONFIG.typing.speeds.mobile : CONFIG.typing.speeds.desktop;

    function typeWriter() {
        const phrase = CONFIG.typing.phrases[currentPhrase];
        
        if (currentLetter < phrase.length && !deleting) {
            typingElement.textContent += phrase.charAt(currentLetter++);
            setTimeout(typeWriter, Math.random() * 50 + type);
        } 
        else if (currentLetter >= phrase.length && !deleting) {
            deleting = true;
            setTimeout(typeWriter, pause);
        } 
        else if (currentLetter > 0 && deleting) {
            typingElement.textContent = phrase.substring(0, --currentLetter);
            setTimeout(typeWriter, deleteSpeed);
        } 
        else {
            deleting = false;
            currentPhrase = (currentPhrase + 1) % CONFIG.typing.phrases.length;
            setTimeout(typeWriter, 500);
        }
    }
    
    setTimeout(typeWriter, 1000);
}

// Scroll to Section
function scrollToSection(id) {
    const element = document.getElementById(id);
    if (element) {
        const yOffset = isMobile() ? -80 : -100;
        const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
        
        window.scrollTo({ top: y, behavior: 'smooth' });
    }
}

// Scroll Animations
function initScrollAnimations() {
    const settings = isMobile() ? 
        CONFIG.animations.scroll.mobile : 
        CONFIG.animations.scroll.desktop;

    gsap.utils.toArray('.skill-category, .project-card, .timeline-item').forEach(el => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: "top 85%",
                toggleActions: "play none none none"
            },
            opacity: 0,
            y: settings.y,
            duration: settings.duration,
            ease: "power3.out"
        });
    });

    // Skill Bars Animation
    document.querySelectorAll('.skill-progress').forEach(bar => {
        ScrollTrigger.create({
            trigger: bar,
            start: "top 85%",
            onEnter: () => {
                const width = bar.style.width;
                bar.style.width = '0';
                gsap.to(bar, {
                    width: width,
                    duration: isMobile() ? 1.5 : 2,
                    ease: "power3.out"
                });
            },
            once: true
        });
    });
}

// Hero Animation
function initHeroAnimation() {
    const heroTimeline = gsap.timeline();
    const settings = isMobile() ? 
        CONFIG.animations.hero.mobile : 
        CONFIG.animations.hero.desktop;

    heroTimeline
        .from('.hero-title', {
            opacity: 0,
            y: settings.title.y,
            duration: settings.title.duration,
            ease: "power3.out",
            delay: 0.3
        })
        .from('.hero-subtitle', {
            opacity: 0,
            y: settings.subtitle.y,
            duration: settings.subtitle.duration,
            ease: "power3.out"
        }, "-=0.8")
        .from('.code-container', {
            opacity: 0,
            y: settings.code.y,
            duration: settings.code.duration,
            ease: "power3.out"
        }, "-=0.6");
}

// Floating Elements
function initFloatingElements() {
    const { range, duration } = isMobile() ? 
        CONFIG.animations.floating.mobile : 
        CONFIG.animations.floating.desktop;

    document.querySelectorAll('.floating-element').forEach(el => {
        gsap.to(el, {
            y: gsap.utils.random(-range, range),
            x: gsap.utils.random(-range, range),
            duration: gsap.utils.random(...duration),
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    });
}

// Particle Background
function createParticles() {
    const particlesContainer = document.getElementById('particles');
    if (!particlesContainer) return;

    particlesContainer.innerHTML = '';

    const particleCount = isSmallMobile() ? CONFIG.animations.particles.counts.smallMobile :
                         isMobile() ? CONFIG.animations.particles.counts.mobile :
                         CONFIG.animations.particles.counts.desktop;

    const sizeRange = isMobile() ? CONFIG.animations.particles.sizes.mobile : 
                      CONFIG.animations.particles.sizes.desktop;

    const colors = [
        'rgba(0, 255, 170, 0.7)',
        'rgba(0, 170, 255, 0.7)',
        'rgba(170, 0, 255, 0.7)',
        'rgba(255, 0, 170, 0.7)'
    ];

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        
        const size = Math.random() * (sizeRange.max - sizeRange.min) + sizeRange.min;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${Math.random() * 100}%`;
        particle.style.top = `${Math.random() * 100}%`;
        particle.style.animationDuration = `${Math.random() * (isMobile() ? 10 : 20) + (isMobile() ? 5 : 10)}s`;
        particle.style.animationDelay = `${Math.random() * 5}s`;
        particle.style.background = colors[Math.floor(Math.random() * colors.length)];
        
        particlesContainer.appendChild(particle);
    }
}

// Terminal Simulation
function initTerminal() {
    const terminal = document.getElementById('terminal-output');
    const container = document.getElementById('terminal-container');
    if (!terminal || !container) return;

    const mobile = isMobile();
    const startTime = Date.now();
    const totalDuration = mobile ? CONFIG.terminal.duration.mobile : CONFIG.terminal.duration.desktop;

    // Generate hex data with glitches
    function generateHexData(lines = 5) {
        const chars = "0123456789ABCDEF?*!%";
        let result = "";
        const lineLength = mobile ? 4 : 8;
        
        for (let l = 0; l < lines; l++) {
            if (Math.random() < 0.1) {
                result += "ERR! " + Array(20).fill().map(() => 
                    chars.charAt(Math.floor(Math.random() * 4) + 16)).join('') + "\n";
            } else {
                for (let i = 0; i < (mobile ? 4 : 6); i++) {
                    let segment = "";
                    for (let j = 0; j < lineLength; j++) {
                        segment += chars.charAt(Math.floor(Math.random() * 16));
                        segment += chars.charAt(Math.floor(Math.random() * 16));
                        segment += " ";
                    }
                    result += segment + "\n";
                }
            }
        }
        return result;
    }

    // Typing effect
    async function typeText(element, text, className = "", speed = 5) {
        const span = document.createElement('div');
        if (className) span.className = className;
        element.appendChild(span);
        
        const adjustedSpeed = mobile ? speed * 0.7 : speed;
        
        if (text.startsWith(">") || text.startsWith("[") || className === "highlight") {
            for (let i = 0; i < text.length; i++) {
                span.textContent += text[i];
                if (i % 3 === 0) terminal.scrollTop = terminal.scrollHeight;
                await new Promise(resolve => setTimeout(resolve, adjustedSpeed * 0.7));
            }
        } else {
            for (let i = 0; i < text.length; i++) {
                span.textContent += text[i];
                terminal.scrollTop = terminal.scrollHeight;
                if (Math.random() < 0.1) {
                    await new Promise(resolve => setTimeout(resolve, adjustedSpeed * 10));
                }
                await new Promise(resolve => setTimeout(resolve, adjustedSpeed));
            }
        }
        terminal.scrollTop = terminal.scrollHeight;
    }

    // Progress system with pulses
    function createProgressSystem(label, initial = 0) {
        const container = document.createElement('div');
        container.className = 'progress-container';
        
        const labelElement = document.createElement('div');
        labelElement.className = 'progress-label';
        labelElement.innerHTML = `<span>${label}</span><span>${initial}%</span>`;
        
        const barContainer = document.createElement('div');
        barContainer.className = 'progress-bar';
        
        const progressFill = document.createElement('div');
        progressFill.className = 'progress-bar-fill';
        progressFill.style.width = initial + '%';
        
        barContainer.appendChild(progressFill);
        container.appendChild(labelElement);
        container.appendChild(barContainer);
        
        const pulseInterval = setInterval(() => {
            progressFill.style.boxShadow = '0 0 8px #5d5dff';
            setTimeout(() => {
                progressFill.style.boxShadow = 'none';
            }, 300);
        }, 1500);
        
        return {
            element: container,
            update: function(percent) {
                progressFill.style.width = percent + '%';
                labelElement.innerHTML = `<span>${label}</span><span>${Math.min(100, Math.floor(percent))}%</span>`;
                if (percent >= 100) {
                    progressFill.style.boxShadow = '0 0 15px #00ff00';
                    clearInterval(pulseInterval);
                }
            }
        };
    }

    // Main sequence
    async function runTerminalSequence() {
        // NOVA logo
        const logoElement = document.createElement('pre');
        logoElement.style.color = "#5d5dff";
        terminal.appendChild(logoElement);
        
        for (const line of CONFIG.terminal.logo) {
            await typeText(logoElement, line + "\n", "", mobile ? 5 : 10);
        }
        
        await new Promise(resolve => setTimeout(resolve, 200));
        
        // Server connection
        const serverElement = document.createElement('pre');
        serverElement.style.color = "#00ffff";
        terminal.appendChild(serverElement);
        
        for (const line of CONFIG.terminal.serverArt) {
            await typeText(serverElement, line + "\n", "", mobile ? 15 : 25);
        }
        
        // Connection steps
        for (const step of CONFIG.terminal.connectionSteps) {
            const line = document.createElement('div');
            terminal.appendChild(line);
            await typeText(line, step.text, "highlight", mobile ? 3 : 5);
            
            if (step.glitch && Math.random() < 0.2) {
                const glitchLine = document.createElement('div');
                glitchLine.className = "glitch";
                terminal.appendChild(glitchLine);
                await typeText(glitchLine, "! WARNING: UNSTABLE CONNECTION", "warning", 10);
            }
            
            await new Promise(resolve => setTimeout(resolve, step.delay));
        }
        
        // Progress bars
        const connectionProgress = createProgressSystem("SERVER LINK", 0);
        terminal.appendChild(connectionProgress.element);
        
        const dataProgress = createProgressSystem("DATA SYNC", 0);
        terminal.appendChild(dataProgress.element);
        
        // Create data stream element
        const dataStream = document.createElement('div');
        dataStream.className = 'data-stream';
        dataStream.style.fontSize = mobile ? '10px' : '12px';
        terminal.appendChild(dataStream);
        
        // Data animation
        let dataInterval = setInterval(() => {
            dataStream.textContent = generateHexData(mobile ? 1 : 2);
        }, mobile ? 80 : 50);
        
        // Update progress
        const start = Date.now();
        const updateInterval = setInterval(() => {
            const elapsed = Date.now() - start;
            let progress = Math.min(100, (elapsed / totalDuration) * 100);
            if (Math.random() < 0.2) progress += Math.random() * 5;
            
            connectionProgress.update(Math.min(100, progress * 1.2));
            dataProgress.update(progress);
            
            if (progress >= 100) {
                clearInterval(updateInterval);
                clearInterval(dataInterval);
            }
        }, 30);
        
        // Completion
        await new Promise(resolve => setTimeout(resolve, mobile ? 1500 : 2000));
        
        for (const msg of CONFIG.terminal.successMessages) {
            const line = document.createElement('div');
            terminal.appendChild(line);
            await typeText(line, msg, "success", mobile ? 3 : 5);
            await new Promise(resolve => setTimeout(resolve, 200));
        }
        
        // Final fade
        setTimeout(() => {
            container.style.opacity = '0';
            container.style.transition = 'opacity 0.5s ease-out';
            setTimeout(() => {
                container.style.display = 'none';
            }, 500);
        }, totalDuration - (Date.now() - startTime));
    }
    
    runTerminalSequence();
}

// Initialize when DOM loads
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.button-red')?.addEventListener('click', () => {
        console.log('Terminal closed');
    });
    document.querySelector('.button-green')?.addEventListener('click', initTerminal);
    
    initTerminal();
});