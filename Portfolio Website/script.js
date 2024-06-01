document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.querySelector('.nav-toggle');
    const navLinksContainer = document.querySelector('.nav-links-container');
   

    navToggle.addEventListener('click', () => {
        navLinksContainer.classList.toggle('active');
    });
});
