console.log("Test de la Page");

// Titles
//... Create Observer
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

//... Selection all Title
const AnimTitle = document.querySelectorAll('span.title');
//... Monitoring Span Display Titles
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

  // Clouds Parallax Section
  console.log("Animation Clouds");
  function moveClouds() {
      const divPlace = document.getElementById("place");
      const bigCloud = divPlace.querySelector(".bigCloud");
      const littleCloud = divPlace.querySelector(".littleCloud")
      
        // Adjustment of cloud displacement and initial position
        const scrollY = window.scrollY;
        const speedClouds = 0.3;
        const debutPosition = 400;
  
    // Calculate new cloud position scroll function
    const cloudPosition = -scrollY * speedClouds + debutPosition;
    bigCloud.style.transform = `translateX(${cloudPosition}px)`;
    littleCloud.style.transform = `translateX(${cloudPosition}px)`;
  }
  
  // Add event listener for scrolling cloud movement
  window.addEventListener("scroll", moveClouds);