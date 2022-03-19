
// Splide

document.addEventListener( 'DOMContentLoaded', function () {
    var main = new Splide( '#main-slider', {
      type      : 'fade',
      rewind    : true,
      pagination: false,
      arrows    : true,
    } );
  
  
    var thumbnails = new Splide( '#thumbnail-slider', {
      fixedWidth  : 113,
      fixedHeight : 75,
      gap         : 10,
      rewind      : true,
      pagination  : false,
      cover       : true,
      isNavigation: true,
      arrows      : false,
      focus       : 'center',
      breakpoints : {
        600: {
          fixedWidth : 75,
          fixedHeight: 50,
        },
      },
    } );
  
  
    main.sync( thumbnails );
    main.mount();
    thumbnails.mount();
  } );

  // Active NavLinks

  let itemsActive = document.querySelectorAll('header nav li.active a');
  itemsActive.forEach(navLink => {
      navLink.classList.add("active");
  });
