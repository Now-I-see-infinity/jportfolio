<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - John Dev</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <a href="index.php"><img src="profile.png" alt="Logo" class="logo-img"> Joseph Muthike Ndiritu</a>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <section class="page-hero">
        <h1>Get In Touch</h1>
        <p>Let's discuss your next project together</p>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-form-container">
                    <h2>Send Me a Message</h2>
                    <form id="contactForm" class="contact-form" method="POST" action="php/send_email.php">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                    <div id="formMessage" class="form-message"></div>
                </div>

                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Location</h3>
                            <p>Kenya</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:josephmuthike812@gmail.com">josephmuthike812@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Phone</h3>
                            <p><a href="tel:+254133012584">+254 133 012 584</a></p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Response Time</h3>
                            <p>Usually responds within 24 hours</p>
                        </div>
                    </div>

                    <h3 style="margin-top: 30px;">Connect With Me</h3>
                    <div class="social-contact">
                        <a href="https://github.com/Now-I-see-infinity" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/joseph-ndiritu-b838b635a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    </div>
                    
                    <h3 style="margin-top: 30px;">Download CV</h3>
                    <div class="cv-download">
                        <a href="Joseph CV.docx" download class="btn btn-primary" style="display: inline-block; margin-top: 10px;"><i class="fas fa-file-download"></i> Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What services do you offer?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>I offer full-stack web development, responsive design, API integration, performance optimization, and consulting services for businesses of all sizes.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What's your typical project timeline?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Project timelines vary based on complexity and scope. Small projects typically take 2-4 weeks, while larger applications may take 2-6 months. I provide detailed timelines after initial consultation.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you offer maintenance and support?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, I provide post-launch support, bug fixes, updates, and ongoing maintenance packages tailored to your needs.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you work with existing projects?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely! I can help refactor existing code, add new features, fix bugs, or take over maintenance of projects regardless of their current state.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What's your pricing structure?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>I offer flexible pricing based on project scope and requirements. Options include hourly rates, fixed project fees, and retainer-based arrangements. Contact me for a custom quote.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2026 Joseph Muthike Ndiritu. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
