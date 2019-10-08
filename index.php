<?php
session_start(); ?>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="Style/style.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="script.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Michel Noël Rohrbach</title>
</head>

<body name="Top" data-spy="scroll" data-target=".navbar" data-offset="250">
  <header>
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
</header>
<main>
<div data-spy="scroll" data-target="#navbar" data-offset="0" class="container mt-5">
  <div class="row text-center">
    <img src="Images/pb.jpg" class="mx-auto d-block mt-5 img-responsive rounded-circle shadow my-5" style="max-height: 250px; max-width: 250px;"/>

  </div>

  <div class="card border-0 shadow my-5">
    <div class="card-body p-5" id="aboutMe">
      <h1 class="font-weight-light">Über mich</h1>
      <p class="lead">Ich bin Michel Noël Rohrbach.</p>
      <p class="lead">Ich bin ein technikbegeisterter, offener und anpassungsfähiger junger Mann.</p>
      <button class="btn btn-outline-warning btn-sm" data-toggle="collapse" data-target="#aboutMeMore">Mehr Informationen</button>
      <div id="aboutMeMore" class="collapse">
        <p class="lead"></p>
        <p class="lead"> Lorem ipsum dolor text....</p>
      </div>

    </div>
  </div>

  <div class="card border-0 shadow my-5">
    <div class="card-body p-5" id="computerScience">
      <h1 class="font-weight-light">Informatik</h1>
      <p class="lead">Ich mag Informatik.</p>
      <p class="lead">Informatik ist toll.</p>
      <button class="btn btn-outline-warning btn-sm" data-toggle="collapse" data-target="#computerScienceMore">Mehr Informationen</button>
      <div id="computerScienceMore" class="collapse">
        <p class="lead"></p>
        <p class="lead"> Lorem ipsum dolor text....</p>
      </div>

    </div>

  </div>

  <div class="card border-0 shadow my-5">
    <div class="card-body p-5" id="projects">
      <h1 class="font-weight-light">Projekte</h1>
      <p class="lead">Ich bin Michel Noël Rohrbach.</p>
      <p class="lead">Ich bin ein technikbegeisterter, offener und anpassungsfähiger junger Mann.</p>
      <button class="btn btn-outline-warning btn-sm" data-toggle="collapse" data-target="#projectsMore">Mehr Informationen</button>
      <div id="projectsMore" class="collapse">
        <p class="lead"></p>
        <p class="lead"> Lorem ipsum dolor text....</p>
      </div>

    </div>
  </div>
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5" id="grades">
      <h1 class="font-weight-light">Zeugnisse und Diplome</h1>
      <?php
      if(!isset($_SESSION["AccessGrades"])) {
        echo '

        <p class="lead">
        Um Zugriff auf diesen Bereich zu erhalten, melden Sie sich bitte an. Die Nummer und das Passwort finden Sie in der E-Mail.
        </p>
        <div class="login-form">
        <form action="login.php" method="post">
        <div class="form-group">
                             <label>Nummer</label>
                             <input type="text" class="form-control" placeholder="Nummer" name="numberLogin">
        </div>
                          <div class="form-group">
                             <label>Password</label>
                             <input type="password" class="form-control" placeholder="Passwort" name="passwordLogin">
        </div>
                          <button type="submit" class="btn btn-warning">Login</button>
        </form>
        </div>';
      }
      else {
        echo '<p class="lead">
        Lebenslauf:
        <br/>
        <a href="Items/CV/Lebenslauf.pdf" target="_blank" class="btn btn-link" role="button">Lebenslauf</a>
        <br/>
        <br/>
        Zeugnisse:
        <br />
        <a href="Items/Grades/GIBB_Zeugnis.pdf" target="_blank" class="btn btn-link" role="button">gibb</a>
        <br />
        <a href="Items/Grades/BWD_Zeugnis.pdf" target="_blank" class="btn btn-link" role="button">bwd</a>
        <br />
        <br />
        Diplome und Bestätigungen:
        <br />
        <a href="Items/Diplomas/ECDL_Base.pdf" target="_blank" class="btn btn-link" role="button">ECDL Base</a>
        <br />
        <a href="Items/Diplomas/Tastaturschreiben.pdf" target="_blank" class="btn btn-link" role="button">Tastaturschreiben</a>
        <br />
        <a href="Items/Diplomas/SAP_ABAP.pdf" target="_blank" class="btn btn-link" role="button">SAP ABAP</a>
        <br/>
        <a href="Items/Diplomas/Englisch_B1.pdf" target="_blank" class="btn btn-link" role="button">Englisch</a>

        </p>
        <a href="logout.php"><button class="btn btn-warning">Ausloggen</button></a>';
      }
      ?>
      </div>

    </div>
  </div>
</main>


    <footer>
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
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script>
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
  </script>

</body>

</html>
