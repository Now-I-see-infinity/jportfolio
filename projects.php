<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - John Dev</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <a href="index.php"><i class="fas fa-code"></i> John Dev</a>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="projects.php" class="active">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <section class="page-hero">
        <h1>My Projects</h1>
        <p>A showcase of my latest work and technical expertise</p>
    </section>

    <section class="projects-section">
        <div class="container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web Apps</button>
                <button class="filter-btn" data-filter="mobile">Mobile</button>
                <button class="filter-btn" data-filter="design">Design</button>
            </div>

            <div class="detailed-projects">
                <div class="detailed-project-card" data-category="web">
                    <div class="project-header">
                        <div class="project-image-large" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                        <div class="project-info">
                            <h3>E-Commerce Platform</h3>
                            <p class="project-type">Full Stack Web Application</p>
                        </div>
                    </div>
                    <div class="project-details">
                        <p>A complete e-commerce solution featuring user authentication, product catalog, shopping cart, payment processing, and an admin dashboard for managing inventory.</p>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>User authentication and profile management</li>
                            <li>Advanced product filtering and search</li>
                            <li>Secure payment processing with Stripe</li>
                            <li>Real-time order tracking</li>
                            <li>Admin dashboard with analytics</li>
                        </ul>
                        <h4>Tech Stack:</h4>
                        <div class="tech-badges">
                            <span>React</span>
                            <span>Node.js</span>
                            <span>Express</span>
                            <span>MongoDB</span>
                            <span>Stripe API</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" class="btn btn-small">View Live</a>
                            <a href="#" class="btn btn-small btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="detailed-project-card" data-category="web">
                    <div class="project-header">
                        <div class="project-image-large" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
                        <div class="project-info">
                            <h3>Task Management App</h3>
                            <p class="project-type">Collaborative Web Platform</p>
                        </div>
                    </div>
                    <div class="project-details">
                        <p>A real-time collaborative task management tool designed for teams to organize work, assign tasks, set deadlines, and track progress efficiently.</p>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>Real-time task updates and synchronization</li>
                            <li>Team collaboration with comments</li>
                            <li>Customizable task statuses and priority levels</li>
                            <li>Timeline and calendar views</li>
                            <li>Email notifications</li>
                        </ul>
                        <h4>Tech Stack:</h4>
                        <div class="tech-badges">
                            <span>Vue.js</span>
                            <span>Firebase</span>
                            <span>Tailwind CSS</span>
                            <span>Cloud Firestore</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" class="btn btn-small">View Live</a>
                            <a href="#" class="btn btn-small btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="detailed-project-card" data-category="web">
                    <div class="project-header">
                        <div class="project-image-large" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);"></div>
                        <div class="project-info">
                            <h3>Weather Dashboard</h3>
                            <p class="project-type">Weather Application</p>
                        </div>
                    </div>
                    <div class="project-details">
                        <p>A beautiful weather application that provides real-time weather data, forecasts, and personalized location-based insights with an intuitive, responsive design.</p>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>Real-time weather data</li>
                            <li>7-day and hourly forecasts</li>
                            <li>Location-based automatic detection</li>
                            <li>Weather alerts and warnings</li>
                            <li>Beautiful animated weather icons</li>
                        </ul>
                        <h4>Tech Stack:</h4>
                        <div class="tech-badges">
                            <span>JavaScript</span>
                            <span>OpenWeather API</span>
                            <span>CSS3 Animations</span>
                            <span>Geolocation API</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" class="btn btn-small">View Live</a>
                            <a href="#" class="btn btn-small btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="detailed-project-card" data-category="mobile">
                    <div class="project-header">
                        <div class="project-image-large" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);"></div>
                        <div class="project-info">
                            <h3>Fitness Tracker App</h3>
                            <p class="project-type">Mobile Application</p>
                        </div>
                    </div>
                    <div class="project-details">
                        <p>A comprehensive fitness tracking application for monitoring workouts, nutrition, and health metrics with personalized insights and progress tracking.</p>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>Workout logging and tracking</li>
                            <li>Nutrition database integration</li>
                            <li>Progress analytics and charts</li>
                            <li>Social sharing capabilities</li>
                            <li>Push notifications</li>
                        </ul>
                        <h4>Tech Stack:</h4>
                        <div class="tech-badges">
                            <span>React Native</span>
                            <span>Firebase</span>
                            <span>Redux</span>
                            <span>iOS & Android</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" class="btn btn-small">View Live</a>
                            <a href="#" class="btn btn-small btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="detailed-project-card" data-category="design">
                    <div class="project-header">
                        <div class="project-image-large" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);"></div>
                        <div class="project-info">
                            <h3>Design System</h3>
                            <p class="project-type">Component Library & Guide</p>
                        </div>
                    </div>
                    <div class="project-details">
                        <p>A comprehensive design system and component library created to ensure consistency across multiple projects and improve development efficiency.</p>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>40+ reusable components</li>
                            <li>Complete documentation</li>
                            <li>Storybook integration</li>
                            <li>Accessibility guidelines</li>
                            <li>Dark mode support</li>
                        </ul>
                        <h4>Tech Stack:</h4>
                        <div class="tech-badges">
                            <span>React</span>
                            <span>Storybook</span>
                            <span>TypeScript</span>
                            <span>Figma</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" class="btn btn-small">View Storybook</a>
                            <a href="#" class="btn btn-small btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="detailed-project-card" data-category="web">
                    <div class="project-header">
                        <div class="project-image-large" style="background: linear-gradient(135deg, #ff9a56 0%, #ff6a88 100%);"></div>
                        <div class="project-info">
                            <h3>Blog Platform</h3>
                            <p class="project-type">Content Management System</p>
                        </div>
                    </div>
                    <div class="project-details">
                        <p>A modern blogging platform with SEO optimization, markdown support, and advanced content management features for content creators.</p>
                        <h4>Key Features:</h4>
                        <ul>
                            <li>Markdown editor with preview</li>
                            <li>SEO optimization tools</li>
                            <li>Comment system with moderation</li>
                            <li>Social media integration</li>
                            <li>Performance optimization</li>
                        </ul>
                        <h4>Tech Stack:</h4>
                        <div class="tech-badges">
                            <span>Next.js</span>
                            <span>PostgreSQL</span>
                            <span>Prisma</span>
                            <span>Markdown</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" class="btn btn-small">View Live</a>
                            <a href="#" class="btn btn-small btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2026 John Dev. All rights reserved.</p>
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
