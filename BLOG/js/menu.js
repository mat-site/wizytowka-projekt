document.addEventListener('DOMContentLoaded', () => {
    var bars = document.querySelector('.bars');
    var animations = document.querySelectorAll('.menu-animation');
    bars.addEventListener('click', () => {
        animations.forEach(anim => {
            anim.classList.toggle('active');
        });
    });
    var menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            animations.forEach(anim => {
                anim.classList.remove('active');
            });
        });

    });
});