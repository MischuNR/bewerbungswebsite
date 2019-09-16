
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
    } else {

        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function readMoreLess1() {
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("rdMr1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Mehr anzeigen";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Weniger anzeigen";
    moreText.style.display = "inline";
  }
}

function readMoreLess2() {
  var dots = document.getElementById("dots2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("rdMr2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Mehr anzeigen";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Weniger anzeigen";
    moreText.style.display = "inline";
  }
}

function readMoreLess3() {
  var dots = document.getElementById("dots3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("rdMr3");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Mehr anzeigen";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Weniger anzeigen";
    moreText.style.display = "inline";
  }
}

function collabseMenu() {
    var x = document.getElementById("linkbox");
    if (x.className === "linkbox") {
        x.className += " responsive";
        x.style.marginRight = "0px";
        document.getElementById("iconResponsive").style.paddingTop = "-2px";
    } else {
        x.className = "linkbox";
        x.style.marginTop = "0px";
    }
  }
