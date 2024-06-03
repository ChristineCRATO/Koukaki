console.log("Test de la Page");

// Create Observer
const observer = new IntersectionObserver((entries, observer) => {
    console.log(entries)
    entries.forEach((entry) => {
        if(entry.isIntersecting) {
            entry.target.classList.add('observ');
        } else {
            entry.target.classList.remove('observ');
        }
    });
}, { rootMargin: '0px', threshold: 0 });

// Selection all Title
const AnimTitle = document.querySelectorAll('span.title');
// Monitoring Span Display Titles
AnimTitle.forEach((section) => {
    observer.observe(section);
});

// SWIPER
var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    coverflowEffect: {
      rotate: 60,
      depth: 100,
      slideShadows: false,
      modifier: 1,
    },
    slidesPerView: 3,
    spaceBetween: 40,
    direction: "horizontal",
    centeredSlides: true,
    loop: true,
    speed: 1000,
    grabCursor: true,
    autoplay: {
      delay: 1000,
    },
  });