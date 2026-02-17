# Portfolio Configuration Guide

This file helps you quickly customize your portfolio with your personal information.

## 1. PERSONAL INFORMATION

Update these across all HTML files:

- **Your Name**: Replace "John Dev" with your name
- **Your Title**: Replace "Full Stack Developer & Creative Thinker" 
- **Your Location**: Update in contact.html (currently "San Francisco, CA")
- **Your Email**: change "hello@johndev.com" in contact.html
- **Phone Number**: Update "+1 (234) 567-890" in contact.html

### Files to update:
- index.html
- about.html
- projects.html
- contact.html

---

## 2. SOCIAL MEDIA LINKS

Find and update these links (currently set to `href="#"`):

In all HTML files, update:
```html
<a href="https://github.com/YOUR_USERNAME" target="_blank"><i class="fab fa-github"></i></a>
<a href="https://linkedin.com/in/YOUR_PROFILE" target="_blank"><i class="fab fa-linkedin"></i></a>
<a href="https://twitter.com/YOUR_HANDLE" target="_blank"><i class="fab fa-twitter"></i></a>
<a href="https://instagram.com/YOUR_USERNAME" target="_blank"><i class="fab fa-instagram"></i></a>
```

---

## 3. ABOUT SECTION (about.html)

### Replace the following sections:

**Who I Am:**
```html
I'm a passionate full-stack developer with 5+ years of experience...
```
→ Write about yourself, your background, and what makes you unique

**My Journey:**
```html
Starting as a self-taught developer...
```
→ Real story of how you got into development

**What Drives Me:**
```html
I'm driven by the desire to create technology...
```
→ Your values and what motivates you

### Stats (Update the numbers):
- Projects: 50+ → Update to your number
- Clients: 30+ → Update to your number
- Experience: 5+ → Update to your years
- Dedication: 100% → Optional, change as needed

### Experience Timeline:
Update with your real experience:
```
2023 - Present: Your Current Position @ Company Name
2021 - 2023: Previous Position @ Previous Company
etc.
```

### Education & Certifications:
Replace with your real education/certifications and dates

---

## 4. PROJECTS (projects.html)

For each project, update:

**Project Title:**
- E-Commerce Platform → Your project name

**Project Type:**
- Full Stack Web Application → Appropriate category

**Description:**
- Write what the project does and its impact

**Key Features:**
- Remove and add your actual project features

**Tech Stack:**
- Update technologies you used

**Links:**
```html
<a href="https://actual-project-url.com" class="btn btn-small">View Live</a>
<a href="https://github.com/username/project-name" class="btn btn-small btn-outline">GitHub</a>
```

### Project Categories:
Current categories are: `web`, `mobile`, `design`

You can add more categories by:
1. Adding `data-category="new-category"` to the project card
2. Adding a new filter button in the filter section:
```html
<button class="filter-btn" data-filter="new-category">New Category</button>
```

---

## 5. SKILLS SECTION (index.html)

Replace skill categories and items:

```html
<div class="skill-category">
    <h3>Frontend</h3>
    <ul>
        <li>HTML5 & CSS3</li>
        <li>JavaScript (ES6+)</li>
        <li>React & Vue.js</li>
        <li>Responsive Design</li>
    </ul>
</div>
```

→ Update categories and skills to match your expertise

---

## 6. FEATURED PROJECTS (index.html)

The three project cards shown on the home page:

```html
<div class="project-card">
    <div class="project-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
    <h3>Project Name</h3>
    <p>Project description...</p>
    <div class="tech-stack">
        <span>Tech1</span>
        <span>Tech2</span>
    </div>
    <a href="projects.html" class="project-link">Learn More →</a>
</div>
```

→ Update with your featured projects
→ You can change the gradient colors using different color codes

---

## 7. CONTACT FORM (contact.html)

The PHP email handler is already set up. You just need to:

1. **Update the email address** in `php/send_email.php`:
```php
$to = 'your-actual-email@example.com'; // Change this
```

2. The form will send emails to that address

3. **Optional:** Replace the hardcoded contact info:
   - Location
   - Email
   - Phone
   - Response time

---

## 8. FAQ SECTION (contact.html)

Update the questions and answers:

```html
<div class="faq-item">
    <div class="faq-question">
        <h3>Your Question Here?</h3>
        <span class="faq-toggle">+</span>
    </div>
    <div class="faq-answer">
        <p>Your answer here...</p>
    </div>
</div>
```

→ Replace with your actual FAQs

---

## 9. COLOR THEME

To change the overall color scheme, edit `css/style.css`:

```css
:root {
    --primary-color: #667eea;      /* Main brand color */
    --secondary-color: #764ba2;    /* Secondary color */
    --accent-color: #f5576c;       /* Highlight/CTA color */
    --text-dark: #1a1a1a;          /* Dark text */
    --text-light: #666;            /* Light text */
    --bg-light: #f8f9fa;           /* Light background */
    --bg-white: #ffffff;           /* White background */
}
```

**Color Palette Tools:**
- [Coolors.co](https://coolors.co) - Generate color palettes
- [Color Hunt](https://colorhunt.co) - Popular color combinations
- [Adobe Color](https://color.adobe.com) - Professional color tool

---

## 10. FONTS

To change fonts, update in `css/style.css`:

```css
body {
    font-family: 'Your Font Name', sans-serif;
}
```

**Options:**
- Use system fonts: Arial, Georgia, Verdana
- Use Google Fonts: Add to HTML head:
```html
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
```
Then in CSS:
```css
body {
    font-family: 'Poppins', sans-serif;
}
```

---

## 11. PROJECT IMAGE GRADIENTS

In `projects.html`, each project has a gradient background:

```html
<div class="project-image-large" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
```

**To change:**
Find hex color codes at:
- [Coolors.co](https://coolors.co)
- [Color Hunt](https://colorhunt.co)

**Example gradients:**
- `linear-gradient(135deg, #667eea 0%, #764ba2 100%)` - Purple
- `linear-gradient(135deg, #f093fb 0%, #f5576c 100%)` - Pink
- `linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)` - Blue
- `linear-gradient(135deg, #fa709a 0%, #fee140 100%)` - Orange

---

## 12. META INFORMATION (SEO)

Update in each HTML file, in the `<head>` section:

```html
<meta name="description" content="Your portfolio description">
<meta name="keywords" content="your, keywords, here">
<meta name="author" content="Your Name">
<meta property="og:title" content="Your Name - Portfolio">
<meta property="og:description" content="Your portfolio description">
```

---

## 13. QUICK CHECKLIST

- [ ] Replace "John Dev" with your name
- [ ] Update your job title/description
- [ ] Add your social media links
- [ ] Write your about section
- [ ] Add your projects with descriptions
- [ ] Update skills section
- [ ] Update contact information
- [ ] Add your email for contact form
- [ ] Update color scheme if desired
- [ ] Change fonts if desired
- [ ] Update FAQ section
- [ ] Test all links
- [ ] Test on mobile devices
- [ ] Deploy to live server

---

## 14. DEPLOYMENT CHECKLIST

Before going live:

- [ ] All links are working
- [ ] Email sending is configured
- [ ] On mobile devices it looks good
- [ ] No broken images
- [ ] Load times are acceptable
- [ ] All forms are validated
- [ ] SEO meta information is updated
- [ ] Browser console has no errors
- [ ] All external links open in new tabs (target="_blank")

---

## 15. MAINTENANCE

After deployment:

Monthly:
- Monitor contact form submissions
- Check for broken links
- Review analytics if added

As needed:
- Update projects as you complete new ones
- Update skills as you learn new technologies
- Update experience timeline
- Refresh About section as needed

---

## Support

For questions about customization:
1. Check README.md in the portfolio folder
2. Refer to original HTML files for structure
3. Check CSS for styling options
4. Inspect with browser DevTools (F12)

Good luck with your portfolio! 🚀
