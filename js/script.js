// ========== MOBILE NAVIGATION TOGGLE ==========
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
}

// Close menu when a link is clicked
const navLinks = document.querySelectorAll('.nav-menu a');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        hamburger.classList.remove('active');
    });
});

// ========== ACTIVE NAV LINK HIGHLIGHTING ==========
window.addEventListener('load', () => {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});

// ========== FAQ ACCORDION ==========
const faqItems = document.querySelectorAll('.faq-item');
faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    question.addEventListener('click', () => {
        // Close other items
        faqItems.forEach(otherItem => {
            if (otherItem !== item) {
                otherItem.classList.remove('active');
            }
        });
        // Toggle current item
        item.classList.toggle('active');
    });
});

// ========== PROJECT FILTER ==========
const filterButtons = document.querySelectorAll('.filter-btn');
const projectCards = document.querySelectorAll('.detailed-project-card');

if (filterButtons.length > 0) {
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            // Filter projects
            const filterValue = button.getAttribute('data-filter');
            projectCards.forEach(card => {
                if (filterValue === 'all') {
                    card.style.display = 'grid';
                    card.style.animation = 'slideInUp 0.3s ease';
                } else {
                    const category = card.getAttribute('data-category');
                    if (category === filterValue) {
                        card.style.display = 'grid';
                        card.style.animation = 'slideInUp 0.3s ease';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    });
}

// ========== CONTACT FORM HANDLING ==========
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formMessage = document.getElementById('formMessage');
        const formData = new FormData(this);

        // Simulate form submission
        console.log('Form submitted:', {
            name: formData.get('name'),
            email: formData.get('email'),
            subject: formData.get('subject'),
            message: formData.get('message')
        });

        // Show success message
        formMessage.textContent = 'Thank you! Your message has been sent successfully. I\'ll get back to you soon!';
        formMessage.classList.add('success');
        formMessage.classList.remove('error');

        // Reset form
        this.reset();

        // Hide message after 5 seconds
        setTimeout(() => {
            formMessage.classList.remove('success');
        }, 5000);
    });
}

// ========== SMOOTH SCROLL ENHANCEMENT ==========
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ========== SCROLL ANIMATIONS ==========
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animation = 'slideInUp 0.6s ease forwards';
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe project cards
document.querySelectorAll('.project-card, .education-item, .skill-category').forEach(element => {
    element.style.opacity = '0';
    observer.observe(element);
});

// ========== NAVBAR SHADOW ON SCROLL ==========
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
    } else {
        navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
    }
});

// ========== BACK TO TOP BUTTON ==========
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        if (!document.querySelector('.back-to-top')) {
            const backToTop = document.createElement('button');
            backToTop.className = 'back-to-top';
            backToTop.innerHTML = '<i class="fas fa-arrow-up"></i>';
            backToTop.style.cssText = `
                position: fixed;
                bottom: 30px;
                right: 30px;
                width: 50px;
                height: 50px;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                border: none;
                border-radius: 50%;
                cursor: pointer;
                font-size: 1.2rem;
                z-index: 999;
                transition: all 0.3s ease;
                box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            `;
            document.body.appendChild(backToTop);
            
            backToTop.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            backToTop.addEventListener('mouseenter', () => {
                backToTop.style.transform = 'translateY(-5px)';
                backToTop.style.boxShadow = '0 8px 20px rgba(102, 126, 234, 0.6)';
            });
            
            backToTop.addEventListener('mouseleave', () => {
                backToTop.style.transform = 'translateY(0)';
                backToTop.style.boxShadow = '0 5px 15px rgba(102, 126, 234, 0.4)';
            });
        }
    } else {
        const backToTop = document.querySelector('.back-to-top');
        if (backToTop) {
            backToTop.remove();
        }
    }
});

// ========== DEMO: Handle External Links ==========
document.querySelectorAll('a[href="#"]').forEach(link => {
    if (!link.classList.contains('nav-menu')) {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            alert('This would open an external link. Update the href attribute to point to your real links.');
        });
    }
});
