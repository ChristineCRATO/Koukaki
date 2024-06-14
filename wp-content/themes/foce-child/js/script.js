console.log("Test de la Page");

// ******************* TITLES ******************* //
//... Selection all Title
const AnimTitle = document.querySelectorAll(".TitleFade");
//... Create Observer
const observer = new IntersectionObserver((entries) => {
    console.log(entries)
    entries.forEach((entry) => {
        if(entry.isIntersecting) {
            entry.target.classList.add('observ');
            return;
        }
    });
});
//... Monitoring Span Display Titles
AnimTitle.forEach((span) => observer.observe(span));

// ******************* SWIPER ******************* //
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

  // ******************* CLOUDS PARALLAX SECTION ******************* //
  console.log("Animation Clouds");
      const divPlace = document.getElementById("place");
      const bigCloud = divPlace.querySelector(".bigCloud");
      const littleCloud = divPlace.querySelector(".littleCloud")
      //... Add event listener for scrolling cloud movement
      window.addEventListener("scroll", () => {;
        //... Adjustment of cloud displacement and initial position
        const scrollY = window.scrollY;
        const speedClouds = 0.3;
        const debutPosition = 300;
    //... Calculate new cloud position scroll function
    const cloudPosition = debutPosition - scrollY * speedClouds;
    bigCloud.style.transform = `translateX(${cloudPosition}px)`;
    littleCloud.style.transform = `translateX(${cloudPosition}px)`;
  });

  // ******************* MENU BURGER ******************* //

  //... Selected class menuToggle DOM
const menuToggle = document.querySelector(".menuToggle");

//... Selected Clic menuToggle
const partToggle = [
    document.querySelector(".menuNav"),
    document.querySelector(".menuLogo"),
    document.querySelector(".menuFlowers"),
    document.querySelector(".menuCats"),
    document.querySelector(".menuFooter"),
  ];  

//... Add Listener Button Menu Clic ToggleNav
menuToggle.addEventListener("click", toggleNav);

//... Add Listener Clic Parts ToggleNav
partToggle.forEach((part) =>
part.addEventListener("click", toggleNav)
);

//... Add Listener Clic Links ToggleNav
document
.querySelectorAll(".linkNav")
.forEach((link) => link.addEventListener("click", closedMenu));

function toggleNav() {
    //... ToggleNav add/delete class 'active' menuToggle
    menuToggle.classList.toggle("active");
    partToggle.forEach((part) => part.classList.toggle("active"));
}
function closedMenu () {
    menuToggle.classList.remove("active");
    partToggle.forEach((part) => part.classList.remove("active"));
}