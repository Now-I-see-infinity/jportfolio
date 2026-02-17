# John Dev Portfolio

A modern, responsive portfolio website built with HTML, CSS, and JavaScript. Perfect for showcasing your projects and skills to potential clients and employers.

## Features

✨ **Modern Design** - Clean, professional, and modern interface
📱 **Fully Responsive** - Works perfectly on desktop, tablet, and mobile devices
⚡ **Fast Performance** - Optimized for speed and efficiency
🎨 **Beautiful Animations** - Smooth transitions and scroll animations
📧 **Contact Form** - Fully functional contact form with validation
🔍 **SEO Friendly** - Structured HTML and semantic markup
🎯 **Project Showcase** - Filterable project gallery
📊 **About & Timeline** - Comprehensive about section with experience timeline

## Pages

1. **Home** (`index.html`) - Landing page with featured projects and skills overview
2. **About** (`about.html`) - Detailed information about you, experience timeline, and education
3. **Projects** (`projects.html`) - Detailed project showcase with filtering options
4. **Contact** (`contact.html`) - Contact form and frequently asked questions

## Project Structure

```
jportfolio/
├── index.html              # Home page
├── about.html              # About page
├── projects.html           # Projects showcase
├── contact.html            # Contact page
├── css/
│   └── style.css          # Main stylesheet
├── js/
│   └── script.js          # JavaScript functionality
├── php/
│   └── send_email.php     # Email handler (optional)
└── README.md              # This file
```

## Getting Started

### Prerequisites

- XAMPP (Apache + PHP + MySQL)
- Web browser
- Text editor (VS Code recommended)

### Installation

1. Start XAMPP and ensure Apache is running
2. Access the portfolio at: `http://localhost/jportfolio`

### Configuration

#### Customize Personal Information

1. **Update your name and title** in all HTML files
   - Find and replace "John Dev" with your name
   - Update "Full Stack Developer & Creative Thinker" with your title

2. **Update about section** in `about.html`
   - Modify the "Who I Am" section
   - Update experience timeline with your actual experience
   - Change education and certifications

3. **Add your projects** in `projects.html`
   - Update project titles, descriptions, and technologies
   - Add your actual project links
   - Change project categories if needed

4. **Update contact information** in `contact.html`
   - Change email address
   - Update phone number and location
   - Add your social media links

#### Configure Email Sending

1. Open `php/send_email.php`
2. Change the email address in this line:
   ```php
   $to = 'your-email@example.com'; // Change this to your email
   ```

3. For better email reliability, consider using PHPMailer or SendGrid
   - Update the send_email.php with your preferred email service

#### Update Social Links

1. In all HTML files, find social media links (look for `href="#"`)
2. Replace with your actual social media profiles:
   ```html
   <a href="https://github.com/yourUsername" target="_blank"><i class="fab fa-github"></i></a>
   <a href="https://linkedin.com/in/yourProfile" target="_blank"><i class="fab fa-linkedin"></i></a>
   <a href="https://twitter.com/yourHandle" target="_blank"><i class="fab fa-twitter"></i></a>
   ```

#### Update Project Links

1. In `projects.html`, update the "View Live" and "GitHub" buttons:
   ```html
   <a href="https://your-project-link.com" class="btn btn-small">View Live</a>
   <a href="https://github.com/yourusername/project" class="btn btn-small btn-outline">GitHub</a>
   ```

## Customization

### Change Color Scheme

Edit the CSS variables in `css/style.css`:

```css
:root {
    --primary-color: #667eea;      /* Main color */
    --secondary-color: #764ba2;    /* Secondary color */
    --accent-color: #f5576c;       /* Accent color */
    --text-dark: #1a1a1a;
    --text-light: #666;
    --bg-light: #f8f9fa;
}
```

### Change Fonts

Update the font-family in `css/style.css`:

```css
body {
    font-family: 'Your-Font-Name', sans-serif;
}
```

### Add More Sections

Define new CSS sections and add corresponding HTML. Follow the existing structure and naming conventions.

### Update Meta Information

Update the following in each HTML file for better SEO:

```html
<meta name="description" content="Your portfolio description">
<meta name="author" content="Your Name">
<meta property="og:title" content="Your Portfolio">
<meta property="og:description" content="Your portfolio description">
```

## Features Explained

### Mobile Navigation

The hamburger menu automatically appears on mobile devices. The navigation is fully functional with smooth transitions.

### Project Filtering

On the projects page, use the filter buttons to view projects by category:
- All (default)
- Web Apps
- Mobile
- Design

### Contact Form

The contact form includes:
- Client-side validation
- Visual feedback (success/error messages)
- PHP backend processing
- Email sending capability

### FAQ Accordion

Click any FAQ question to expand/collapse the answer. Only one can be open at a time.

### Smooth Animations

Various elements animate in as you scroll down the page for a polished experience.

## Browser Support

✅ Chrome (latest)
✅ Firefox (latest)
✅ Safari (latest)
✅ Edge (latest)
✅ Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Tips

1. **Optimize Images** - Compress project images before adding them
2. **Lazy Loading** - Consider implementing lazy loading for images
3. **Minify CSS/JS** - Minify files for production deployment
4. **Cache Headers** - Configure server caching for static assets

## Deployment

### Deploy to a Live Server

1. **Using cPanel/FTP:**
   - Upload all files to your public_html or www folder
   - Ensure proper permissions (644 for files, 755 for directories)

2. **Using GitHub Pages:**
   - Create a GitHub repository
   - Push all files to main branch
   - Enable GitHub Pages in repository settings
   - Note: PHP functionality won't work on GitHub Pages; use alternative services for email

3. **Using Netlify/Vercel:**
   - Connect your GitHub repository
   - Deploy automatically
   - Use serverless functions for email sending

## Troubleshooting

### Email Not Sending?
- Ensure your server supports mail()
- Check firewall settings
- Verify email configuration in send_email.php
- Consider using PHPMailer for better reliability

### Styles Not Loading?
- Clear browser cache (Ctrl+Shift+Delete)
- Check file paths in HTML
- Verify CSS/JS folders exist

### Links Not Working?
- Update href attributes with actual links
- Check that URLs are correct
- Test in different browsers

## Enhancement Ideas

- 🎯 Add blog section
- 🖼️ Add image galleries with lightbox
- 📝 Add testimonials section
- 📈 Add analytics tracking
- 🌙 Add dark mode toggle
- 📱 Add resume download
- 💬 Add live chat support
- 🎬 Add video portfolio

## Support & Resources

- [MDN Web Docs](https://developer.mozilla.org)
- [CSS Tricks](https://css-tricks.com)
- [JavaScript.info](https://javascript.info)
- [Font Awesome Icons](https://fontawesome.com)

## License

This portfolio template is free to use and modify for your personal use.

## Credits

- Font Awesome for icons
- Built with vanilla HTML, CSS, and JavaScript
- Responsive design principle

---

**Last Updated:** February 2026

**Version:** 1.0

For questions or issues, please reach out via the contact form on the portfolio!
