// Home page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for navigation links
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add scroll effect to header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(248, 250, 252, 0.95)';
        } else {
            header.style.background = '#f8fafc';
        }
    });

    // Profile image animation
    const profileImg = document.querySelector('.profile-img');
    if (profileImg) {
        profileImg.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.3s ease';
        });

        profileImg.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    }

    // Plus button functionality
    const plusButtons = document.querySelectorAll('.more-icon');
    
    plusButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the parent card to determine which button was clicked
            const card = this.closest('.card, .large-card');
            
            if (card) {
                if (card.classList.contains('profile-card') || card.querySelector('.profile-info')) {
                    // Profile card - redirect to about page
                    window.location.href = 'about.html';
                } else if (card.querySelector('.signature-icon')) {
                    // About/Credentials card - redirect to about page
                    window.location.href = 'about.html';
                } else if (card.querySelector('.showcase-image')) {
                    // Showcase/Projects card - redirect to works page
                    window.location.href = 'works.html';
                } else if (card.querySelector('.work-together-card') || card.querySelector('.highlight')) {
                    // Work together card - redirect to contact page
                    window.location.href = 'contact.html';
                }
            }
        });
        
        // Add hover effect
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1) rotate(90deg)';
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    });

    // Add click animations to cards
    const cards = document.querySelectorAll('.card, .large-card');
    cards.forEach(card => {
        card.addEventListener('click', function(e) {
            // Don't trigger if clicking on the plus button
            if (!e.target.closest('.more-icon')) {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            }
        });
    });

    console.log('Home page loaded successfully!');
});
