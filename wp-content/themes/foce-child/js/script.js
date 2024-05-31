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
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 60,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    spaceBetween: 40,
    speed: 1000,
    autoplay: {
      delay: 1500,
    },
    
  });