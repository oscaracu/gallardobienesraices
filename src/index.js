import * as bootstrap from 'bootstrap';
import SimpleParallax from 'simple-parallax-js';
import '@fortawesome/fontawesome-free/css/all.css';

// Active NavLinks

let itemsActive = document.querySelectorAll('header nav li.active a');
itemsActive.forEach(navLink => {
  navLink.classList.add("active");
});


// simpleParallax

var image = document.getElementsByClassName('cover-image');
new SimpleParallax(image, {
  delay: .6,
  transition: 'cubic-bezier(0,0,0,1)'
});