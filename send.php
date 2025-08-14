<?php
header('Content-Type: application/json');

// Load PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

$response = ['success' => false, 'message' => ''];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Get and sanitize form data
        $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
        $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
        $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
        $message = htmlspecialchars(trim($_POST['message'] ?? ''));
        $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));

        // Validate required fields
        if (empty($name) || empty($email) || empty($subject) || empty($message) || empty($phone)) {
            throw new Exception('All fields are required.');
        }

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Please enter a valid email address.');
        }

        // Validate Bangladeshi phone number (11 digits starting with 01)
        if (!preg_match('/^01[3-9]\d{8}$/', $phone)) {
            throw new Exception('Please enter a valid Bangladeshi phone number (11 digits starting with 01).');
        }

        // Step 1: Send Email Confirmation
        $mail = new PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sra.team.bd@gmail.com';
        $mail->Password   = 'iwqtrelpzybycvsu';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients - Admin
        $mail->setFrom($email, $name);
        $mail->addAddress('sra.team.bd@gmail.com', 'samiul@portfolio');

        // Content - Admin
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->send();

        // Send confirmation email to client
        $mail->clearAddresses();
        $mail->setFrom('sra.team.bd@gmail.com', 'S M Samiul Hasan');
        $mail->addAddress($email, $name);
        $mail->Subject = 'Thank you for contacting me!';
        
        $mail->Body = '<!DOCTYPE html>
        <html>
        <head>
            <style>
                body {
                    font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
                    background-color: #0a0e17;
                    color: #e0f4ff;
                    margin: 0;
                    padding: 0;
                    line-height: 1.6;
                }
                .email-container {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    border: 1px solid rgba(100, 255, 255, 0.2);
                    background-color: rgba(20, 25, 40, 0.98);
                    box-shadow: 0 0 20px rgba(0, 170, 255, 0.1);
                }
                .header {
                    text-align: center;
                    padding: 20px 0;
                    border-bottom: 1px solid rgba(0, 255, 170, 0.3);
                    margin-bottom: 20px;
                }
                .logo {
                    color: #00ffaa;
                    font-size: 1.5rem;
                    font-weight: bold;
                    margin-bottom: 10px;
                    letter-spacing: 1px;
                }
                .logo::after {
                    content: "_";
                    animation: blink 1s step-end infinite;
                }
                .content {
                    padding: 0 15px 15px;
                }
                h1 {
                    color: #00ffaa;
                    font-size: 1.8rem;
                    margin-bottom: 20px;
                    text-shadow: 0 0 5px rgba(0, 255, 170, 0.3);
                    letter-spacing: 0.5px;
                }
                h2 {
                    color: #00aaff;
                    font-size: 1.3rem;
                    margin: 25px 0 15px;
                    border-bottom: 1px solid rgba(0, 170, 255, 0.3);
                    padding-bottom: 8px;
                    letter-spacing: 0.3px;
                }
                p {
                    color: #c0d0e8;
                    margin-bottom: 15px;
                    font-size: 1rem;
                    line-height: 1.6;
                }
                .message-box {
                    background: rgba(0, 0, 0, 0.3);
                    border: 1px solid rgba(0, 170, 255, 0.3);
                    border-radius: 5px;
                    padding: 20px;
                    margin: 20px 0;
                    font-family: "Courier New", monospace;
                    position: relative;
                    color: #e0f4ff;
                    line-height: 1.6;
                }
                .message-box::before {
                    content: ">";
                    position: absolute;
                    left: 10px;
                    top: 20px;
                    color: #00ffaa;
                    font-weight: bold;
                }
                .message-content {
                    padding-left: 20px;
                }
                .footer {
                    margin-top: 30px;
                    padding-top: 20px;
                    border-top: 1px solid rgba(0, 255, 170, 0.3);
                    text-align: center;
                    font-size: 0.9rem;
                    color: #8b9bb8;
                }
                .signature {
                    color: #00ffaa;
                    margin-top: 10px;
                    font-weight: bold;
                    font-size: 1.1rem;
                }
                .button {
                    display: inline-block;
                    background: linear-gradient(90deg, #00ffaa, #00aaff);
                    color: #0a0e17 !important;
                    padding: 12px 25px;
                    text-decoration: none;
                    border-radius: 5px;
                    font-weight: bold;
                    margin: 20px 0;
                    transition: all 0.3s ease;
                    text-align: center;
                    font-size: 1rem;
                }
                .button:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 5px 15px rgba(0, 255, 170, 0.4);
                }
                .tech-tag {
                    display: inline-block;
                    background: rgba(0, 170, 255, 0.15);
                    color: #00aaff;
                    padding: 5px 12px;
                    border-radius: 15px;
                    font-size: 0.9rem;
                    margin: 5px 5px 5px 0;
                    border: 1px solid rgba(0, 170, 255, 0.3);
                    font-weight: 500;
                }
                .tech-tags-container {
                    margin: 20px 0;
                    text-align: center;
                }
                @keyframes blink {
                    0%, 100% { opacity: 1; }
                    50% { opacity: 0; }
                }
                .highlight {
                    color: #00ffaa;
                    font-weight: bold;
                }
                .note {
                    background-color: rgba(0, 170, 255, 0.1);
                    border-left: 3px solid #00aaff;
                    padding: 10px 15px;
                    margin: 15px 0;
                    font-size: 0.95rem;
                }
            </style>
        </head>
        <body>
            <div class="email-container">
                <div class="header">
                    <div class="logo">samiul@portfolio:~$</div>
                    <h1>MESSAGE RECEIVED</h1>
                </div>
                
                <div class="content">
                    <h2>Hello <span class="highlight">'.$name.'</span>,</h2>
                    <p>Thank you for reaching out through my portfolio website. I\'ve received your message and will get back to you as soon as possible.</p>
                    
                    <div class="note">
                        <p>I typically respond within <span class="highlight">24-48 hours</span>. If your inquiry is urgent, please don\'t hesitate to contact me through alternative channels.</p>
                    </div>
                    
                    <h2>Your Message:</h2>
                    <div class="message-box">
                        <div class="message-content">'.$message.'</div>
                    </div>
                    
                    <p>In the meantime, feel free to explore more of my work:</p>
                    <div class="tech-tags-container">
                        <span class="tech-tag">Portfolio</span>
                        <span class="tech-tag">GitHub</span>
                        <span class="tech-tag">LinkedIn</span>
                        <span class="tech-tag">Projects</span>
                    </div>
                    
                    <div style="text-align: center;">
                        <a href="https://codenovabd.com/" class="button">VISIT MY PORTFOLIO</a>
                    </div>
                    
                    <div class="footer">
                        <p>This is an automated message. Please do not reply directly to this email.</p>
                        <p class="signature">— S M Samiul Hasan<br>Junior Full-Stack Developer</p>
                    </div>
                </div>
            </div>
        </body>
        </html>'; 
        $mail->AltBody = "Hello $name,\n\nThank you for contacting me..."; // Plain text version

        $mail->send();

        // Step 2: Send SMS
        $api_key = "pdVTRfargFxVFVh6miaC";
        $senderid = "8809617628623";
        $url = "http://bulksmsbd.net/api/smsapi";
        
        $smsMessage = "Dear $name, I’ve received your message and will respond within 24-48 hours. Stay well.  – S M Samiul Hasan";
        
        $data = [
            "api_key" => $api_key,
            "type" => "text",
            "number" => $phone,
            "senderid" => $senderid,
            "message" => $smsMessage
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $smsResponse = curl_exec($ch);
        curl_close($ch);

        if (!$smsResponse) {
            throw new Exception('Email sent successfully but SMS failed to send.');
        }

        $response['success'] = true;
        $response['message'] = "Your message has been sent successfully! Confirmation email and SMS sent.";

    } catch (Exception $e) {
        $response['message'] = $e->getMessage();
    }
} else {
    $response['message'] = 'Invalid request method.';
}
echo json_encode($response);