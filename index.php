<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S M Samiul | Junior Full-Stack Developer</title>
    <!--  Fav-Icons.... -->
      <link rel="shortcut icon" href="image/Fav-Icons.png" type="image/x-icon">
      <!-- link-custom-css -->
    <link rel="stylesheet" href="css/nova.css">
    <!-- link-font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css">
</head>
<body>
    
    <!-- <div id="terminal-container">
        <div class="terminal">
            <div class="terminal-header">
                <div class="terminal-buttons">
                    <div class="terminal-button button-red"></div>
                    <div class="terminal-button button-yellow"></div>
                    <div class="terminal-button button-green"></div>
                </div>
                <div class="terminal-title">SYSTEM v2.3 - </div>
            </div>
            <div class="terminal-body" id="terminal-output"></div>
        </div>
    </div> -->
<!--  -->
    <div id="main-content">
        
    </div>
    <!-- Particle Background -->
    <div class="particles" id="particles"></div>
    
    <!-- Navigation -->
    <nav class="terminal-nav">
        <div class="container nav-container">
            <a href="#" class="logo">samiul@portfolio:~$</a>
            <div class="terminal-commands">
                <div class="command" onclick="scrollToSection('about')">about</div>
                <div class="command" onclick="scrollToSection('experience')">experience</div>
                <div class="command" onclick="scrollToSection('skills')">skills</div>
                <div class="command" onclick="scrollToSection('projects')">projects</div>
                <div class="command" onclick="scrollToSection('contact')">contact</div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Floating elements -->
        <div class="floating-element" style="width: 300px; height: 300px; top: 20%; left: 10%;"></div>
        <div class="floating-element" style="width: 200px; height: 200px; top: 60%; left: 80%;"></div>
        
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title"></h1>
                <p class="hero-subtitle">
                    <span class="typing-container">
                        <span class="typing-text" id="typing-text"></span>
                    </span>
                </p>
                
                <div class="code-container floating">
                    <div class="code-header">
                        <div class="code-dots">
                            <div class="code-dot dot-red"></div>
                            <div class="code-dot dot-yellow"></div>
                            <div class="code-dot dot-green"></div>
                        </div>
                        <div class="code-title">about_me.js</div>
                    </div>
                    <div class="code-block">
                        <pre><code class="language-javascript">const developer = {
  name: " S M Samiul Hasan ",
  title: "Junior Web Developer",
  location: "Rangpur,Bangladesh",
  education: "Diploma in Engineering (Ongoing)",
  skills: {
    frontend: ["HTML5", "CSS3", "JavaScript", "Bootstrap"],
    backend: ["PHP", "MySQL", "WordPress"],
    tools: ["Git", "VS Code", "Canva"]
  },
  projects: [
    "Custom WordPress Websites",
    "Family Video Portal",
    "Cloud Storage Solutions",
    "Business Management Tools"
  ],
  
  motivation: () => {
    return "Building solutions that make life easier 
    for my family and clients";
  }
};

console.log("Let's build something great together!");</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2>About Me</h2>
            <div class="about-content">
                <p>Hi! I'm Samiul, a passionate Web & WordPress Developer from Bangladesh, currently pursuing my Diploma in Engineering. I enjoy crafting websites that are fast, functional, and user-friendly.</p>
                
                <div class="code-container" style="margin: 3rem 0;">
                    <div class="code-header">
                        <div class="code-dots">
                            <div class="code-dot dot-red"></div>
                            <div class="code-dot dot-yellow"></div>
                            <div class="code-dot dot-green"></div>
                        </div>
                        <div class="code-title">skills.js</div>
                    </div>
                    <div class="code-block">
                        <pre><code class="language-javascript">const developer = {
  name: "Samiul Hasan",
  level: "Junior Web Developer",
  location: "Rangpur,Bangladesh",
  education: "Diploma in Engineering",
  skills: {
    frontend: ["HTML5", "CSS3", "JavaScript", "Bootstrap"],
    backend: ["PHP", "MySQL", "WordPress"],
    tools: ["Git", "VS Code", "Canva"]
  },
  projects: [
    "Custom WordPress Sites",
    "Cloud Storage Systems",
    "Family Video Portals",
    "Business Tools"
  ],
  hobbies: ["Bengali Natok", "Sleeping",],
  
  quote: () => {
    return "I build simple solutions with a personal touch!";
  }
};</code></pre>
                    </div>
                </div>
                
                <h3 style="color: var(--neon-blue); margin: 2rem 0 1rem;">What Drives Me?</h3>
                <p>My family's support inspires me to create meaningful digital experiences. Even small projects for them are built with professional care.</p>
                
                <h3 style="color: var(--neon-blue); margin: 2rem 0 1rem;">My Strengths</h3>
                <ul style="color: var(--text-secondary); margin-left: 2rem;">
                    <li>Clean, responsive frontend development</li>
                    <li>Custom WordPress themes & plugins</li>
                    <li>PHP/MySQL for small business systems</li>
                    <li>Problem-solving with simple solutions</li>
                    <li>Attention to user experience</li>
                </ul>
            </div>
        </div>
    </section>

   <!-- Experience Section -->
<section id="experience">
    <div class="container">
        <h2>My Professional & Academic Journey</h2>
        <p>Blending formal education with practical, real-world development experiences:</p>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2024 - Present</div>
                    <h3 class="timeline-title">Diploma in Computer Engineering</h3>
                    <h4>Specialization: Cybersecurity</h4>
                    <p class="timeline-desc">Engaged in a rigorous academic program emphasizing network security, ethical hacking, and advanced system protection techniques. Actively applying theoretical knowledge in practical scenarios.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2025 - Present</div>
                    <h3 class="timeline-title">Backend Development</h3>
                    <h4>Institution: Programming Hero</h4>
                    <p class="timeline-desc">Focused on server-side programming, building robust APIs, database architecture, and cloud integrations using modern technologies such as Node.js and MongoDB. Enhancing full-stack proficiency with scalable backend systems.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2024 - 2025</div>
                    <h3 class="timeline-title">Frontend Development Certification</h3>
                    <h4>Institute: Inspire IT</h4>
                    <p class="timeline-desc">Gained mastery in contemporary frontend tools and frameworks including HTML5, CSS3, JavaScript ES6+, and React. Focused on developing responsive, high-performance user interfaces.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2023 - 2024</div>
                    <h3 class="timeline-title">Graphic Design Specialist</h3>
                    <h4>Program: Canva Design Mastery</h4>
                    <p class="timeline-desc">Specialized in professional digital design, developing high-impact visuals for branding, social media, and digital marketing campaigns using industry-standard tools.</p>
                </div>
            </div>
        </div>

        <div class="current-focus">
            <h3>Current Area of Specialization</h3>
            <p>Currently honing cybersecurity skills, including vulnerability assessments, secure software development, and real-time threat analysis, while simultaneously deepening full-stack development capabilities across diverse platforms.</p>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills">
    <div class="container">
        <h2>Technical Expertise</h2>
        <p>I've mastered a diverse set of technologies across the development stack:</p>
        
        <div class="skills-grid">
            <div class="skill-category">
                <h3>Frontend Skills</h3>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-html5-48.png" class="skill-icon" alt="HTML5">
                    </span>
                    <div class="skill-bar" data-skill-level="Expert"><div class="skill-progress" style="width: 98%"></div></div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-css-48.png" class="skill-icon" alt="CSS3">
                    </span>
                    <div class="skill-bar" data-skill-level="Expert"><div class="skill-progress" style="width: 88%"></div></div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-javascript-48.png" class="skill-icon" alt="JavaScript">
                    </span>
                    <div class="skill-bar" data-skill-level="Expert"><div class="skill-progress" style="width: 80%"></div></div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-react-js-48.png" class="skill-icon" alt="React">
                    </span>
                    <div class="skill-bar" data-skill-level="Advanced"><div class="skill-progress" style="width: 75%"></div></div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-tailwindcss-48.png" class="skill-icon" alt="TailwindCSS">
                    </span>
                    <div class="skill-bar" data-skill-level="Advanced"><div class="skill-progress" style="width: 65%"></div></div>
                </div>
            </div>
            
            <div class="skill-category">
                <h3>WordPress Development</h3>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-wordpress-48.png" class="skill-icon" alt="WordPress">
                    </span>
                    <div class="skill-bar" data-skill-level="Expert"><div class="skill-progress" style="width: 95%"></div></div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-woocommerce-48.png" class="skill-icon" alt="WooCommerce">
                    </span>
                    <div class="skill-bar" data-skill-level="Expert"><div class="skill-progress" style="width: 77%"></div></div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-elementor-48.png" class="skill-icon" alt="Elementor">
                    </span>
                    <div class="skill-bar" data-skill-level="Advanced"><div class="skill-progress" style="width: 84%"></div></div>
                </div>
            </div>
            
            <div class="skill-category">
                <h3>Backend Development</h3>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-php-48.png" class="skill-icon" alt="PHP">
                    </span>
                    <div class="skill-bar" data-skill-level="Advanced"><div class="skill-progress" style="width: 56%"></div></div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-mysql-48.png" class="skill-icon" alt="MySQL">
                    </span>
                    <div class="skill-bar" data-skill-level="Intermediate"><div class="skill-progress" style="width: 66%"></div></div>
                </div>
            </div>
            
            <div class="skill-category">
                <h3>Tools & Deployment</h3>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-github-50.png" class="skill-icon" alt="Git">
                    </span>
                    <div class="skill-bar" data-skill-level="Intermediate"><div class="skill-progress" style="width: 70%"></div></div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-cpanel-64.png" class="skill-icon" alt="cPanel">
                    </span>
                    <div class="skill-bar" data-skill-level="Intermediate"><div class="skill-progress" style="width: 77%"></div></div>
                </div>
                <div class="skill-item">
                    <span class="skill-name">
                        <img src="image/icons8-npm-48.png" class="skill-icon" alt="npm">
                    </span>
                    <div class="skill-bar" data-skill-level="Intermediate"><div class="skill-progress" style="width: 75%"></div></div>
                </div>
            </div>
        </div>
    </div>
</section>
   


    <!-- Projects Section -->
    <section id="projects">
        <div class="container">
            <h2>Notable Projects</h2>
            <p>Selected work demonstrating technical depth and innovation:</p>
            
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="image/S N E T.png" alt="E-Commerce Platform">
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Full-Stack Web Development for S N E T – Real-Time AI-Powered Platform </h3>
                        <p class="project-description">Led the end-to-end development of S N E T’s corporate platform, integrating real-time systems, scalable backend, and intelligent recommendation engines powered by AI. Successfully optimized for high concurrency and enterprise-grade performance.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Html</span>
                            <span class="tech-tag">CSS3</span>
                            <span class="tech-tag">javascript</span>
                            <span class="tech-tag">Php</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                        <div class="project-links">
                            <!-- <a href="#" class="project-link">Case Study</a> -->
                            <a href="https://snet-bd.com/" class="project-link">Live Demo</a>
                            <!-- <a href="#" class="project-link">GitHub</a> -->
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <!-- <img src="#" alt="Freelancer Service Booking Platform"> -->
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Freelancer Service Booking Platform</h3>
<p class="project-description">Developed a web platform where clients can book freelance services like graphic design, writing, and web development. Features include service listings, user profiles, and secure booking requests with admin approval.</p>
<div class="project-tech">
    <span class="tech-tag">HTML</span>
    <span class="tech-tag">CSS3</span>
    <span class="tech-tag">JavaScript</span>
    <span class="tech-tag">PHP</span>
    <span class="tech-tag">MySQL</span>
    <span class="tech-tag">Tailwind CSS</span>
</div>

                        <div class="project-links">
                            <!-- <a href="#" class="project-link">Case Study</a> -->
                            <a href="https://info.codenovabd.com/projects/" class="project-link">Live Demo</a>
                            <!-- <a href="#" class="project-link">GitHub</a> -->
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <!-- <img src="#" alt="Digital Notice Board System for Educational Institutes"> -->
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Digital Notice Board System for Educational Institutes</h3>
<p class="project-description">Created a digital notice board platform that allows schools to publish and update academic notices online. Admins can manage categories, schedule post visibility, and allow student comments on notices.</p>
<div class="project-tech">
    <span class="tech-tag">HTML</span>
    <span class="tech-tag">CSS3</span>
    <span class="tech-tag">JavaScript</span>
    <span class="tech-tag">PHP</span>
    <span class="tech-tag">MySQL</span>
    <span class="tech-tag">Bootstrap</span>
</div>

                        <div class="project-links">
                            <!-- <a href="#" class="project-link">Case Study</a> -->
                            <a href="https://info.codenovabd.com/projects/" class="project-link">Live Demo</a>
                            <!-- <a href="#" class="project-link">GitHub</a> -->
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <!-- <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-Commerce Platform"> -->
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Local Parcel & Delivery Management Platform</h3>
<p class="project-description">Designed a system for local delivery agents to register, accept delivery tasks, and update parcel status in real-time. Includes merchant login, delivery personnel panel, and parcel tracking for customers.</p>
<div class="project-tech">
    <span class="tech-tag">HTML</span>
    <span class="tech-tag">CSS3</span>
    <span class="tech-tag">JavaScript</span>
    <span class="tech-tag">PHP</span>
    <span class="tech-tag">MySQL</span>
    <span class="tech-tag">Bootstrap</span>
</div>

                        <div class="project-links">
                            <!-- <a href="#" class="project-link">Case Study</a> -->
                            <a href="https://info.codenovabd.com/projects/" class="project-link">Live Demo</a>
                            <!-- <a href="#" class="project-link">GitHub</a> -->
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <!-- <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-Commerce Platform"> -->
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Online Voting System for Clubs & Small Organizations</h3>
<p class="project-description">Built an online voting platform for student clubs and small organizations to conduct fair and secure elections. Includes voter authentication, candidate profiles, result analytics, and admin panel.</p>
<div class="project-tech">
    <span class="tech-tag">HTML</span>
    <span class="tech-tag">CSS3</span>
    <span class="tech-tag">JavaScript</span>
    <span class="tech-tag">PHP</span>
    <span class="tech-tag">MySQL</span>
    <span class="tech-tag">Tailwind CSS</span>
</div>

                        <div class="project-links">
                            <!-- <a href="#" class="project-link">Case Study</a> -->
                            <a href="https://info.codenovabd.com/projects/" class="project-link">Live Demo</a>
                            <!-- <a href="#" class="project-link">GitHub</a> -->
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <!-- <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-Commerce Platform"> -->
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Blood Donation & Emergency Request System</h3>
<p class="project-description">Built a system where users can register as blood donors and search for emergency donors by blood group and location. Includes admin moderation and notification system for urgent cases.</p>
<div class="project-tech">
    <span class="tech-tag">HTML</span>
    <span class="tech-tag">CSS3</span>
    <span class="tech-tag">JavaScript</span>
    <span class="tech-tag">PHP</span>
    <span class="tech-tag">MySQL</span>
    <span class="tech-tag">Bootstrap</span>
</div>


                        <div class="project-links">
                            <!-- <a href="#" class="project-link">Case Study</a> -->
                            <a href="https://info.codenovabd.com/projects/" class="project-link">Live Demo</a>
                            <!-- <a href="#" class="project-link">GitHub</a> -->
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <!-- <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="E-Commerce Platform"> -->
                    </div>
                    <div class="project-content">
                        <h3 class="project-title">Smart Inventory & Billing System</h3>
<p class="project-description">Developed a shop-focused inventory management system with real-time stock updates, customer billing, purchase reports, and low-stock alerts. User-friendly and optimized for desktops.</p>
<div class="project-tech">
    <span class="tech-tag">HTML</span>
    <span class="tech-tag">CSS3</span>
    <span class="tech-tag">JavaScript</span>
    <span class="tech-tag">PHP</span>
    <span class="tech-tag">MySQL</span>
    <span class="tech-tag">Tailwind CSS</span>
</div>


                        <div class="project-links">
                            <!-- <a href="#" class="project-link">Case Study</a> -->
                            <a href="https://info.codenovabd.com/projects/" class="project-link">Live Demo</a>
                            <!-- <a href="#" class="project-link">GitHub</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
<section id="contact">
    <div class="container">
        <h2>Let's Collaborate</h2>
        <p>I'm currently available for consulting engagements and ambitious projects. Get in touch!</p>
        
        <div class="code-container" style="max-width: 800px; margin: 3rem auto;">
            <div class="code-header">
                <div class="code-dots">
                    <div class="code-dot dot-red"></div>
                    <div class="code-dot dot-yellow"></div>
                    <div class="code-dot dot-green"></div>
                </div>
                <div class="code-title">contact.sh</div>
            </div>
            <div class="code-block">
            <pre><code class="language-bash"># Professional Inquiry
echo "Hello Samiul, I'd like to discuss a potential collaboration!"
echo "Here are my contact details:"

NAME="Your Name"
EMAIL="your@email.com"
MESSAGE="Brief project description or question"

# Send message directly to my inbox
curl -X POST https:///contact \
  -H "Content-Type: application/json" \
  -d '{"name": "'"$NAME"'", "email": "'"$EMAIL"'", "message": "'"$MESSAGE"'"}'</code></pre>
            </div>
        </div>

        <div id="form-response" style="display: none; margin: 2rem 0; padding: 1.5rem; border-radius: 8px;"></div>
        
        <form class="contact-form" id="contact-form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" id="name" name="name" class="form-input" required placeholder="Enter your name">
            </div>
            <div class="form-group">
                    <label for="phone" class="form-label">
                        Phone Number <span style="color: red; font-weight: bold;">*</span>
                    </label>
                    <input type="text" id="phone" name="phone" class="form-input" required 
                        placeholder="Please enter a valid 11-digit phone number (e.g., 01866XXXXXX).">
                    <small style="color:white; display: block; margin-top: 5px;">
                        SMS will be sent to this number.
                    </small>
                </div>

            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" name="email" class="form-input" required placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" id="subject" name="subject" class="form-input" required placeholder="Enter subject">
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Your Message</label>
                <textarea id="message" name="message" class="form-input" required placeholder="Tell me about your project..." rows="5"></textarea>
            </div>
            <button type="submit" class="submit-btn">
                <i class="fas fa-paper-plane"></i> Send Message
            </button>
        </form>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const responseDiv = document.getElementById('form-response');

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        submitBtn.disabled = true;

        fetch('send.php', {
            method: 'POST',
            body: new FormData(contactForm)
        })
        .then(response => response.json())
        .then(data => {
            responseDiv.style.display = 'block';
            
            if(data.success) {
                responseDiv.style.backgroundColor = 'rgba(0, 255, 170, 0.1)';
                responseDiv.style.border = '1px solid var(--neon-green)';
                responseDiv.style.color = 'var(--neon-green)';
                contactForm.reset();
            } else {
                responseDiv.style.backgroundColor = 'rgba(255, 85, 85, 0.1)';
                responseDiv.style.border = '1px solid #ff5555';
                responseDiv.style.color = '#ff5555';
            }
            
            responseDiv.innerHTML = `
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fas ${data.success ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                    <span>${data.message}</span>
                </div>
            `;
            
            // Scroll to response message
            responseDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Hide message after 5 seconds
            setTimeout(() => {
                responseDiv.style.opacity = '0';
                setTimeout(() => {
                    responseDiv.style.display = 'none';
                    responseDiv.style.opacity = '1';
                }, 500);
            }, 5000);
        })
        .catch(error => {
            responseDiv.style.display = 'block';
            responseDiv.style.backgroundColor = 'rgba(255, 85, 85, 0.1)';
            responseDiv.style.border = '1px solid #ff5555';
            responseDiv.style.color = '#ff5555';
            responseDiv.innerHTML = `
                <div style="display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>An error occurred. Please try again later.</span>
                </div>
            `;
        })
        .finally(() => {
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
        });
    });
});
</script>    
    <!-- Footer -->
    <footer>
        <div class="container footer-content">
            <div class="footer-logo">samiul@portfolio:~$</div>
            <p class="footer-text">Engineering exceptional digital experiences with cutting-edge technology</p>
            
            <div class="social-links">
                <a href="https://github.com/smsamiulhasansaim" class="social-link">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" class="social-icon" alt="GitHub">
                    GitHub
                </a>
                <a href="https://www.linkedin.com/in/PoweredbyCodeNovaBD/" class="social-link">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-plain.svg" class="social-icon" alt="LinkedIn">
                    LinkedIn
                </a>
                <a href="https://sra.team.bd@gmail.com/" class="social-link">
                    <i class="fas fa-envelope social-icon"></i>
                    Email
                </a>
            </div>
            
            <p class="copyright">
                © 2025 S M Samiul Hasan. Developed with support from <a href="https://jamibd.com" target="_blank">Jami Construction & Engineering Ltd</a>.
            </p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="js/nova.js"></script>
</body>
</html>