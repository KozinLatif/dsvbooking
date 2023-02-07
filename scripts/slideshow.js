var slideshow = document.getElementById('slideshow');
var bilder = ['./assets/1.jpg', './assets/2.jpg', './assets/3.jpg'];
var i = 0;

slideshow.style.transition = "background-image 2s";

setInterval(function() {
  slideshow.style.backgroundImage = 'url(' + bilder[i] + ')';
  i = (i + 1) % bilder.length;
}, 4000);