// Active NavLinks

let itemsActive = document.querySelectorAll('header nav li.active a');
itemsActive.forEach(navLink => {
  navLink.classList.add("active");
});


// simpleParallax

var image = document.getElementsByClassName('cover-image');
new simpleParallax(image, {
  delay: .6,
  transition: 'cubic-bezier(0,0,0,1)'
});