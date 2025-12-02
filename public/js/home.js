// Home page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Card links will work automatically via HTML <a> tags
    // No need to prevent default or handle manually
    
    // Profile image animation
    const profileImg = document.querySelector('.profile-image img');
    if (profileImg) {
        profileImg.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.3s ease';
        });

        profileImg.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    }

    console.log('Home page loaded successfully!');
});