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
	autoplay: true,
	pauseOnHover: true,
  });


  var thumbnails = new Splide('#thumbnail-slider', {
    type: 'loop',
    focus: 'center',
    perPage: 6,
    height: 75,
    gap: 10,
    rewind: true,
    pagination: false,
    cover: true,
    isNavigation: true,
    arrows: false,
    breakpoints: {
      600: {
        perPage: 4,
        height: 65,
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

// Print Masonry

var mediaQueryList = window.matchMedia('print');
mediaQueryList.addListener(function(mql) {
  var msnry = new masonry( elem, {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true,
  });
    if (mql.matches) {
        msnry.destroy();
    } else {
        msnry.layout();
    }
});
