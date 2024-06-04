document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.content-section');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetID = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetID);

            sections.forEach(section => {
                section.classList.remove('active');
            });

            targetSection.classList.add('active');
        });
    });

    // Automatically show the first section on page load
    if (sections.length > 0) {
        sections[0].classList.add('active');
    }
});
