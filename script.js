
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
      //  document.getElementById("navbar").classList.remove("bg-transparent");
    } else {
        document.getElementById("myBtn").style.display = "none";
      //  document.getElementById("navbar").classList.add("bg-transparent");
    }
}


function scroll(x) {
  behavior: "smooth";
  document.getElementById(x).scrollIntoView();
  window.scrollBy(0, - 120);
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
