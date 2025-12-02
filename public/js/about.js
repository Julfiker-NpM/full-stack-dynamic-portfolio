// About page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Add scroll effect to header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(248, 250, 252, 0.95)';
        } else {
            header.style.background = '#f8fafc';
        }
    });

    // About image animation
    const aboutImg = document.querySelector('.about-img');
    if (aboutImg) {
        // Intersection Observer for fade-in animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        aboutImg.style.opacity = '0';
        aboutImg.style.transform = 'translateY(20px)';
        aboutImg.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        
        observer.observe(aboutImg);
    }

    // Animate about text
    const aboutText = document.querySelector('.about-text');
    if (aboutText) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateX(0)';
                }
            });
        });

        aboutText.style.opacity = '0';
        aboutText.style.transform = 'translateX(20px)';
        aboutText.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        
        observer.observe(aboutText);
    }

    // Animate skill items
    const skillItems = document.querySelectorAll('.skill-item');
    const skillObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 100);
            }
        });
    });

    skillItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        skillObserver.observe(item);
    });

    // Animate experience items
    const experienceItems = document.querySelectorAll('.experience-item');
    const experienceObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 150);
            }
        });
    });

    experienceItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        experienceObserver.observe(item);
    });

    console.log('About page loaded successfully!');
});
