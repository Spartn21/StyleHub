// Smooth scroll effect for internal links
document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Show alert when "Shop Now" button is clicked
function showAlert() {
    alert("Welcome to Style Hub! Explore our products.");
}

// Highlight active navigation link on scroll
window.addEventListener('scroll', () => {
    let fromTop = window.scrollY + 60; // offset for fixed header

    document.querySelectorAll('header nav ul li a').forEach(link => {
        let section = document.querySelector(link.getAttribute('href'));

        if (
            section.offsetTop <= fromTop &&
            section.offsetTop + section.offsetHeight > fromTop
        ) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});
