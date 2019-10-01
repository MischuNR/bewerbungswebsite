
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};



function scroll(x) {
  behavior: "smooth";
  document.getElementById(x).scrollIntoView();
  window.scrollBy(0, - 120);
}
