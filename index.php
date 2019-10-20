<?php
session_start(); ?>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="Style/style.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Michel Noël Rohrbach</title>
</head>

<body name="Top" data-spy="scroll" data-target=".navbar" >
<div class="container-fluid">
  <nav class="navbar fixed-top navbar-expand-lg bg-warning navbar-dark smooth-scroll" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
          <h3 class="text-uppercase">Michel Rohrbach</h3>
          <h6>Schüler Informatikmittelschule Bern</h6>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse text-right" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <a class="nav-link text-uppercase" href="#aboutMe">Über mich</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#computerScience">Informatikkenntnisse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#projects">Projekte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#grades">Zeugnisse und Diplome</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div data-spy="scroll" data-target="#navbar" data-offset="0" class="container-fluid mt-5 mx-auto" >
  <div class="row text-center">
      <img src="Images/pb.jpg" id="mainPicture" class="mx-auto d-block mt-5 img-responsive rounded-circle shadow my-5" style="max-height: 325px; max-width: 325px;"/>

  </div>

  <div class="card border-0 shadow my-5">
    <div class="card-body p-5" id="aboutMe">
      <h1 class="font-weight-light">Über mich</h1>
      <p class="lead">Ich bin Michel Noël Rohrbach.</p>
      <p class="lead">Vielfältig, offen, zielstrebig. Diese drei Adjektive beschreiben mich am besten. Aber warum?
        <br>
        Vielfältig: Ich beherrsche einige Programmiersprachen, momentan bin ich dabei mir selbst Swift beizubringen. Ich finde mich auf jedem gängigen OS zurecht, ob von Microsoft oder Apple, ich kenne die Vorteile von beiden und kann mich damit zurechtfinden. Bei Mobilen
        Betriebssystemen genau so, ich kenne iOS, Android und auch Windows Mobile und habe jedes davon mindestens 4 Monate intensiv benutzt.
        <br>
        Offen: Ich bin offen neue Herausforderungen zu finden und neues zu lernen. Weshalb ich momentan Swift und ReactJS lerne.
        <br>
        Zielstrebig: Ich schaue mir genaustens die Anforderungen an, führe diese so gut wie möglich und so schnell wie möglich durch. Erst nach dem vertiefe ich mich in Details wie das "Perfekte Design" oder, dass eine Animation so läuft, wie sie sollte.
      </p>
      <div id="aboutMeMore" class="collapse">
        <p class="lead"></p>
        <p class="lead">Meine Hobbys zeigen meine Vielfältigkeit auch auf.
          <br>
        Von einem entspannten Kartenspiel bis hin zur Freiwilligenarbeit beim Roten Kreuz, alles ist vorhanden und alles passt zu mir und macht mich als Person aus.
        Wenn ich etwas mache, dann mit Herzblut, wobei keines meiner Hobbys leidet und meine Verpflichtungen auch nicht, da meine Verpflichtungen meine Nummer 1 Priorität ist.
        <br>

        </p>
      </div>
      <a id="btnAboutMe" class="more btn btn-outline-warning btn-sm btn-more" data-toggle="collapse" data-target="#aboutMeMore">Mehr Anzeigen</a>

    </div>
  </div>

  <div class="card border-0 shadow my-5">
    <div class="card-body p-5" id="computerScience">
      <h1 class="font-weight-light">Informatik</h1>
      <p class="lead">Meine Begeisterung für Informatik hat sich bereits im frühen Alter entwickelt.</p>
      <p class="lead">Was mit Gameboy ähnlichem Geräten angefangen hat, hat in einer grossen Leidenschaft für Technik entwickelt.
      </br>
      Sei es Software oder Hardware, ich versuche mich immer auf dem neusten Stand zu halten und neue Systeme kennen zu lernen wie z.B. die verschiedenen Betriebssysteme, sei es nun auf Mobile Platform wie dem Smartphone oder auf einem Laptop/Computer.
      <br> In meiner Freizeit beschäftige ich mich auch viel damit. Benutze auf fast jedem Gerät ein Beta Profil, da ich die neuen Features der Version testen will.
      </p>
      <p class="lead">
      Bei Hardware beschäftige ich mich mit neuen Features von Smartphones, die eine zusätzliche Komponente brauchen, wie z.B. under-display-fingerprint scanner, Face ID, Edge Sense usw.
      <br>
      Computer zusammenstellen und zusammenbauen macht mir auch viel Freude, jedoch habe ich extrem selten die Gelegenheit dazu.
      Im Jahr 2012 hatte ich auch eine Schnupperwoche in einem kleinen Reparaturladen, welche mir sehr gefallen hat.
      </p>

    </div>

  </div>

  <div class="card border-0 shadow my-5">
    <div class="card-body p-5" id="projects">
      <h1 class="font-weight-light">Projekte</h1>
      <p class="lead">Hier finden Sie alle Projekte, an denen ich momentan arbeite oder gearbeitet habe.
        <br>
        Die meisten davon sind Gruppenprojekte und in verschiedenen Programmiersprachen. Verlinkt ist jeweils die GitHub Seite um hinter den Code zu schauen.
      </p>
      <div id="projectsMore" class="collapse">
        <p class="lead"></p>
        <p class="lead"><a href="https://github.com/MischuNR/bewerbungswebsite" target="_blank" class="btn btn-link btn-custom">Bewerbungswebsite</a>
          <br>
          Das ist der GitHub Link zu dieser Webseite. Die erste Version entstand im Jahr 2018 und wurde dieses Jahr verbessert, indem mein eigenes CSS durch Bootstrap ersetzt wurde, wodurch die Webseite mehr Responsive ist, als durch mein eigenes CSS.
          Die erste Version in GitHub hat noch praktisch alles, der ursprünglichen Version, wobei die neuste der angezeigten Version entspricht. Die Angewandten Sprachen sind PHP, JavaScript und HTML/CSS. Alles in Allem bin ich ziemlich zufrieden mit der Webseite.
        </p>
        <p class="lead"><a href="https://github.com/TommyLeoni/vitaelize" target="_blank" class="btn btn-link btn-custom">Vitaelize</a>
          <br>
          Vitaelize ist ein Gruppenprojekt, dass momentan in der Entwicklung steht. Es wird mit ReactJS erstellt und soll ein kostenloser Lebenslaufgenerator sein, der sich auf die Wünsche des Users anpasst, d.h. Farbe, zusätzliche Felder usw.
        </p>
        <p class="lead"><a href="https://github.com/MischuNR/gluecksspiel" target="_blank" class="btn btn-link btn-custom">Glücksspielsimulator</a>
          <br>
          Der Glücksspielsimulator ist ein 2-Mann C#-Projekt, dass während in einer Übungs IPA entstanden ist. Es soll verschiedene kleine Glücksspiele haben wie z.B. Blackjack, Roulette und Coinflip.
          Das Projekt ist nicht Fehlerfrei und die Farben waren bei der Abgabe noch nicht definitiv und weiter wurde daran kaum gearbeitet, jedoch sollte irgendwo auf meinem Datenträger noch eine leicht verbesserte Version liegen.
        </p>
        <p class="lead"><a href="https://github.com/Sivakeerthan/DiscoverBern" target="_blank" class="btn btn-link btn-custom">DiscoverBern</a>
          <br>
          DiscoverBern ist ein Gruppenprojekt, dass in einem ÜK entstanden ist. Für die Entstehung wurde PHP, HTML, MySQL.
          Dieses Projekt soll einen durch Bern führen, mit verschiedenen Freizeitaktivitäten und Lokalitäten, die User vorschlagen, aber auch bewerten können. Die ganzen Posts sind in verschiedene Gruppen aufgeteilt. Leider ist das Projekt nur als Code verfügbar und wurde nie zu meiner Zufriedenheit fertig gestellt.
        </p>
      </div>
      <a id="btnProjects" class="btn btn-outline-warning btn-sm btn-more" data-toggle="collapse" data-target="#projectsMore">Mehr Anzeigen</a>

    </div>
  </div>
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5" id="grades">
      <h1 class="font-weight-light">Zeugnisse und Diplome</h1>
      <?php
      require 'src/components/requiredLogin.php';
      ?>
      </div>

    </div>
  </div>

      <hr>

      <div class="impressum">
        <p class="h2">Impressum</p>
        <p class="text-md-left">Michel Rohrbach
        </br>
          Konsumstrasse 22a
        </br>
          3007 Bern
        </br>
        Schweiz
      </br>
        <a href="mailto:michel.n.rohrbach@gmail.com" class="btn btn-link btn-custom">michel.n.rohrbach@gmail.com</a></p>
          <hr id="copyright">
          <p class="lead">&copy; Michel Rohrbach</p>
      </div>
    </div>
 <script type="js.js">

 </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script type="text/javascript">


      $(document).ready(function () {
          // Initialize Tooltip
          $('[data-toggle="tooltip"]').tooltip();

          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a").on('click', function (event) {

              // Make sure this.hash has a value before overriding default behavior
              if (this.hash !== "") {

                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                      scrollTop: $(hash).offset().top - 120
                  }, 250, function () {

                      // Add hash (#) to URL when done scrolling (default click behavior)
                      window.location.hash = hash;
                  });
              } // End if
          });
      })

      $(document).ready(function() {
    $("#btnProjects").click(function() {
      if ($("#btnProjects").text() == "Weniger Anzeigen")
      {
        $("#btnProjects").text("Mehr Anzeigen");

      }
      else {
        $("#btnProjects").text("Weniger Anzeigen");
      }
    });
});

$(document).ready(function() {
$("#btnAboutMe").click(function() {
if ($("#btnAboutMe").text() == "Weniger Anzeigen")
{
  $("#btnAboutMe").text("Mehr Anzeigen");

}
else {
  $("#btnAboutMe").text("Weniger Anzeigen");
}
});
});


  </script>


</body>

</html>
