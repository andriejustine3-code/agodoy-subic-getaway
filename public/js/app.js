const nav = document.querySelector('.headerNav');
const img = document.querySelector('.menuIcon');
const header = document.querySelector('.web-header');
const heroImage = document.querySelector('.hero');
const body = document.querySelector('body');
heroImage.src = "../slides/1.jpg";
//initial values
header.style.background = "#f9f9f990";
header.style.backdropFilter = "blur(1.35rem)";
nav.style.display = "block";

// mobile navigation button
function navBar(){
  if(nav.style.display === "none"){
    img.src = "../images/closeBtn.svg";
    nav.style.display = "block";
    header.style.background = "#f9f9f9";
    header.style.backdropFilter = "none";
    nav.style.animation = 'slideLeft 200ms ease-in-out';
  } else{
    img.src = "../images/menuBtn.svg";
    nav.style.display = "none";
    header.style.background = "#f9f9f990";
    header.style.backdropFilter = "blur(1.35rem)";
    nav.style.animation = 'slideLeft 80ms ease-in-out reverse';
  }
}

// Logic for image carousel
let int = 1;
function prevImg(){
  int = Math.max(1, (int-1));
  heroImage.src = `../slides/${int}.jpg`;
}
function nextImg(){
  int = Math.min(5, (int+1));
  heroImage.src = `../slides/${int}.jpg`;
}

// Tries to minimize/mitigate extra loading time of navbar in desktop views
nav.style.display = window.innerWidth < 768 ? "none" : "grid";

window.onresize = () => {
  nav.style.display = window.innerWidth < 768 ? "none" : "grid";
}