document.addEventListener('DOMContentLoaded', () => {

    const images = document.querySelectorAll('img[data-src]');

    const config = {
        rootMargin: '50px 0px',
        threshold: 0.01
    };

    let observer;

    if ('IntersectionObserver' in window) {
        observer = new IntersectionObserver(onIntersection, config);
        images.forEach(image => {
            observer.observe(image);
        });
    } else {
        images.forEach(image => {
            preloadImage(image);
        });
    }

    function onIntersection(entries) {
        entries.forEach(entry => {
            if (entry.intersectionRatio > 0) {
                observer.unobserve(entry.target);
                preloadImage(entry.target);
            }
        });
    }

    function preloadImage(img) {
        const src = img.getAttribute('data-src');
        if (!src) {
            return;
        }
        img.src = src;
    }
});