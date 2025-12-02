// Contact page JavaScript
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

    // Check if there's a success message and show popup
    const successMessage = document.querySelector('.alert-success');
    if (successMessage) {
        // Show success popup
        showSuccessPopup('Message sent successfully!');
    }

    // Contact form handling - Allow real form submission
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            // Don't prevent default - let form submit normally
            // Just add loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Form will submit normally to server
            // Server will handle validation and save to database
        });
    }

    // Animate contact content
    const contactContent = document.querySelector('.contact-content');
    if (contactContent) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        contactContent.style.opacity = '0';
        contactContent.style.transform = 'translateY(30px)';
        contactContent.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        
        observer.observe(contactContent);
    }

    // Add input focus effects
    const inputs = document.querySelectorAll('.contact-form input, .contact-form textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.borderColor = '#00ff88';
            this.style.boxShadow = '0 0 0 3px rgba(0, 255, 136, 0.1)';
        });
        
        input.addEventListener('blur', function() {
            this.style.borderColor = '';
            this.style.boxShadow = '';
        });
    });

    // Add social link click effects
    const socialLinks = document.querySelectorAll('.social-link');
    socialLinks.forEach(link => {
        link.addEventListener('click', function() {
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    });

    // Success popup function
    function showSuccessPopup(message) {
        // Create popup element
        const popup = document.createElement('div');
        popup.style.cssText = `
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(135deg, #00ff88 0%, #00cc6a 100%);
            color: #000;
            padding: 2rem 3rem;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 255, 136, 0.3);
            z-index: 10000;
            text-align: center;
            font-size: 1.1rem;
            font-weight: 600;
            animation: popupSlideIn 0.3s ease;
        `;
        popup.innerHTML = `
            <div style="font-size: 3rem; margin-bottom: 1rem;">✓</div>
            <div>${message}</div>
        `;

        // Add animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes popupSlideIn {
                from {
                    opacity: 0;
                    transform: translate(-50%, -50%) scale(0.8);
                }
                to {
                    opacity: 1;
                    transform: translate(-50%, -50%) scale(1);
                }
            }
        `;
        document.head.appendChild(style);

        // Add backdrop
        const backdrop = document.createElement('div');
        backdrop.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            animation: fadeIn 0.3s ease;
        `;

        const backdropStyle = document.createElement('style');
        backdropStyle.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
        `;
        document.head.appendChild(backdropStyle);

        document.body.appendChild(backdrop);
        document.body.appendChild(popup);

        // Auto close after 3 seconds
        setTimeout(() => {
            popup.style.animation = 'popupSlideOut 0.3s ease';
            backdrop.style.animation = 'fadeOut 0.3s ease';
            
            const closeStyle = document.createElement('style');
            closeStyle.textContent = `
                @keyframes popupSlideOut {
                    from {
                        opacity: 1;
                        transform: translate(-50%, -50%) scale(1);
                    }
                    to {
                        opacity: 0;
                        transform: translate(-50%, -50%) scale(0.8);
                    }
                }
                @keyframes fadeOut {
                    from { opacity: 1; }
                    to { opacity: 0; }
                }
            `;
            document.head.appendChild(closeStyle);

            setTimeout(() => {
                popup.remove();
                backdrop.remove();
            }, 300);
        }, 3000);

        // Close on click
        backdrop.addEventListener('click', () => {
            popup.remove();
            backdrop.remove();
        });
    }

    console.log('Contact page loaded successfully!');
});
