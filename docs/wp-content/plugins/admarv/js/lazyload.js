document.addEventListener("DOMContentLoaded", function() {
    var lazyElements = [].slice.call(document.querySelectorAll(".admarv-lazy"));

    if ("IntersectionObserver" in window) {
        let lazyObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyElement = entry.target;
                    if (lazyElement.tagName === 'IMG' || lazyElement.tagName === 'IFRAME') {
                        lazyElement.src = lazyElement.dataset.src;
                    } else if (lazyElement.tagName === 'VIDEO' || lazyElement.tagName === 'AUDIO') {
                        lazyElement.src = lazyElement.dataset.src;
                        lazyElement.load();
                    } else {
                        lazyElement.style.backgroundImage = 'url(' + lazyElement.dataset.bg + ')';
                    }
                    lazyElement.classList.remove("admarv-lazy");
                    lazyObserver.unobserve(lazyElement);
                }
            });
        });

        lazyElements.forEach(function(lazyElement) {
            lazyObserver.observe(lazyElement);
        });
    } else {
        // Fallback for browsers without IntersectionObserver support
        let lazyLoadThrottleTimeout;
        function lazyLoad() {
            if (lazyLoadThrottleTimeout) {
                clearTimeout(lazyLoadThrottleTimeout);
            }    

            lazyLoadThrottleTimeout = setTimeout(function() {
                let scrollTop = window.pageYOffset;
                lazyElements.forEach(function(el) {
                    if (el.offsetTop < (window.innerHeight + scrollTop)) {
                        if (el.tagName === 'IMG' || el.tagName === 'IFRAME') {
                            el.src = el.dataset.src;
                        } else if (el.tagName === 'VIDEO' || el.tagName === 'AUDIO') {
                            el.src = el.dataset.src;
                            el.load();
                        } else {
                            el.style.backgroundImage = 'url(' + el.dataset.bg + ')';
                        }
                        el.classList.remove('admarv-lazy');
                    }
                });
                if (lazyElements.length == 0) { 
                  document.removeEventListener("scroll", lazyLoad);
                  window.removeEventListener("resize", lazyLoad);
                  window.removeEventListener("orientationChange", lazyLoad);
                }
            }, 20);
        }

        document.addEventListener("scroll", lazyLoad);
        window.addEventListener("resize", lazyLoad);
        window.addEventListener("orientationChange", lazyLoad);
    }
});
