const menuIcon = document.querySelector('.mobile-menu');
const navigation = document.querySelector('.navigation-items');

menuIcon.addEventListener('click', function() {
    navigation.classList.toggle('menu-open');
});

document.addEventListener('click', function(event) {
    if (event.target.closest('.mobile-menu') === null) {
        navigation.classList.remove('menu-open');
    }
});

// Implement lazy loading
document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

    if ("IntersectionObserver" in window) {
        let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove("lazy");
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        lazyImages.forEach(function(lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    }
});

