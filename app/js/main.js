// var menu = document.getElementById('menu')
// menu.addEventListener('shown.bs.collapse', function () {
//     var barNav = document.getElementById('barNav');
//     barNav.classList.add("bg-primary")
// });
// var menu = document.getElementById('menu')
// menu.addEventListener('hidden.bs.collapse', function () {
//     var barNav = document.getElementById('barNav');
//     barNav.classList.remove("bg-primary")
// });
// window.onscroll = function () { colorNav() };
// function colorNav() {
//     var barNav = document.getElementById('barNav');            
//     if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
//         barNav.classList.add("bg-primary");
//     } else {
//         barNav.classList.remove("bg-primary");
//     }
// }

// w3-include-html attribute

function includeHTML() {
    var z, i, elmnt, file, xhttp;
    /* Loop through a collection of all HTML elements: */
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
      elmnt = z[i];
      /*search for elements with a certain atrribute:*/
      file = elmnt.getAttribute("w3-include-html");
      if (file) {
        /* Make an HTTP request using the attribute value as the file name: */
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4) {
            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
            if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
            /* Remove the attribute, and call this function once more: */
            elmnt.removeAttribute("w3-include-html");
            includeHTML();
          }
        }
        xhttp.open("GET", file, true);
        xhttp.send();
        /* Exit the function: */
        return;
      }
    }
  }