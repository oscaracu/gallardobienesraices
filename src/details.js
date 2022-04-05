import { Splide } from '@splidejs/splide';
import imagesloaded from 'imagesloaded';
import masonry from 'masonry-layout';

// Splide

document.addEventListener('DOMContentLoaded', function () {
  var main = new Splide('#main-slider', {
    type: 'fade',
    rewind: true,
    pagination: false,
    arrows: true,
  });


  var thumbnails = new Splide('#thumbnail-slider', {
    fixedWidth: 113,
    fixedHeight: 75,
    gap: 10,
    rewind: true,
    pagination: false,
    cover: true,
    isNavigation: true,
    arrows: false,
    focus: 'center',
    breakpoints: {
      600: {
        fixedWidth: 75,
        fixedHeight: 50,
      },
    },
  });


  main.sync(thumbnails);
  main.mount();
  thumbnails.mount();
});

// Masonry

var elem = document.querySelector('.masonry');

imagesloaded (elem, () => {
  var msnry = new masonry( elem, {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
  });
})

