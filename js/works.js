// Works page JavaScript
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

    // Animate work items on scroll
    const workItems = document.querySelectorAll('.work-item');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }, index * 200); // Staggered animation
            }
        });
    }, {
        threshold: 0.1
    });

    workItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(item);
    });

    // Add click effect to work items
    workItems.forEach(item => {
        item.addEventListener('click', function() {
            // Add a pulse effect when clicked
            this.style.transform = 'scale(0.98)';
            this.style.boxShadow = '0 20px 50px rgba(245, 158, 11, 0.3)';
            
            setTimeout(() => {
                this.style.transform = 'scale(1)';
                this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.05)';
            }, 150);
        });
    });

    // Add tech tag hover effects
    const techTags = document.querySelectorAll('.tech-tag');
    techTags.forEach(tag => {
        tag.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 4px 8px rgba(245, 158, 11, 0.2)';
        });
        
        tag.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = 'none';
        });
    });

    console.log('Works page loaded successfully!');
});
