import * as bootstrap from "bootstrap";
import SimpleParallax from "simple-parallax-js";
import "@fortawesome/fontawesome-free/css/all.css";

// simpleParallax

var image = document.getElementsByClassName("cover-image");
new SimpleParallax(image, {
  delay: 0.6,
  transition: "cubic-bezier(0,0,0,1)",
});
