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

<body name="Top" data-spy="scroll" data-target=".navbar" data-offset="50">
  <header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-warning smooth-scroll" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
          <h2 class="text-uppercase">Michel Noël Rohrbach</h2>
          <h6>Schüler Informatikmittelschule Bern</h6>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <a class="nav-link text-uppercase" onclick="scroll(aboutMe)" href="#aboutMe">Über mich</a>
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
    <img src="Images/pb.jpg" class="mx-auto d-block mt-5 img-responsive rounded-circle" style="max-height: 250px; max-width: 250px;"/>

  </div>
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Willkommen</h1>
      <p class="lead">Herzlich Willkommen auf meiner Website!</p>
      <p class="lead">Hier finden Sie alle spannenden Informationen zu meiner Person, meine Informatikkenntnisse, meine Projekte und meine Zeugnisse und Auszeichnungen</p>

    </div>
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
      if(!isset($_SESSION["ZugriffZeugnisse"])) {
        echo '

        <p class="lead">
        Um Zugriff auf diesen Bereich zu erhalten, melden Sie sich bitte an. Die Nummer und das Passwort finden Sie in der E-Mail.
        </p>
        <div class="login-form">
        <form action="login.php" method="post">
        <div class="form-group">
                             <label>Nummer</label>
                             <input type="text" class="form-control" placeholder="Nummer" name="nummer">
        </div>
                          <div class="form-group">
                             <label>Password</label>
                             <input type="password" class="form-control" placeholder="Passwort" name="passwort">
        </div>
                          <button type="submit" class="btn btn-warning">Login</button>
        </form>
        </div>';
      }
      else {
        echo '<p class="lead">
        Zeugnisse:
        <br />
        <a href="Auszeichnungen/Zeugnisse/GIBB_Zeugnis.pdf" target="_blank" class="btn btn-link" role="button">gibb</a>
        <br />
        <a href="Auszeichnungen/Zeugnisse/BWD_Zeugnis.pdf" target="_blank" class="btn btn-link" role="button">bwd</a>
        <br />
        <br />
        Diplome und Bestätigungen:
        <br />
        <a href="Auszeichnungen/Diplome/ECDL_Base.pdf" target="_blank" class="btn btn-link" role="button">ECDL Base</a>
        <br />
        <a href="Auszeuchnungen/Diplome/Tastaturschreiben.pdf" target="_blank" class="btn btn-link" role="button">Tastaturschreiben</a>
        <br />
        <a href="Auszeichnungen/Diplome/SAP_ABAP.pdf" target="_blank" class="btn btn-link" role="button">SAP ABAP</a>
        <br/>
        <a href="Auszeichnungen/Diplome/Englisch_B1.pdf" target="_blank" class="btn btn-link" role="button">Englisch</a>

        <br>
        <br>
        Sie wollen sich ausloggen? Drücken Sie den Button!
        </p>
        <a href="logout.php"><button class="btn btn-warning">Ausloggen</button></a>';
      }
      ?>
      </div>

    </div>
  </div>
</main>
<!-- </div>
  <div class="responsiveSite">

    <div class="bildContent">
      <img id="bild" src="./Pictures/blackbox.jpg">
    </div>
    <div class="responsiveContent2">
  </a>
  <h1 class="titelBox">Willkommen</h1>
  <p class="contentBox">Herzlich Willkommen auf meiner Website!
<br />
Hier finden Sie alle spannenden Informationen zu meiner Person, meine Informatikkenntnisse, meine Projekte und meine Zeugnisse und Auszeichnungen.
  </p>
  </div>


  <a name="UeberMich">
    <div class="responsiveContent2" >
  </a>
    <h1 class="titelBox" >Über mich</h1>
  <p class="contentBox">Ich bin Michel Noël Rohrbach
    <br />
    Ich bin ein technikbegeisterter, offener und anpassungsfähiger junger Mann.
    <br/>
    Doch was heißt das?
    <br/>
    <br />
    Technikbegeistert:
    <br/>
    Sobald ich erfahre, dass es neue Technologien im Bereich Handy und PC (größtenteils Grafikkarten) gibt, informiere ich mich umgehend über diese. Ich vergleiche diese dann mit der Konkurrenz und was diese als «Antwort» bringen.
    <br />
    Kleines Beispiel: Face ID von Apple
    <br />
    Mittlerweile adaptieren andere Hersteller wie Huawei, Samsung und Co das System und verwenden dazu nur die Kamera, weshalb das System
    <span id="dots1">...</span>
    <span id="more1">
      von Apple den Konkurrenten überlegen ist.
      <br />
      <br />
      Offen:
      <br/>
      Wenn mich etwas stört oder ich einen Änderungsvorschlag habe, scheue ich mich nicht diesen zu erwähnen, genauso nehme ich aber auch gerne Vorschläge von anderen an.
      <br />
      <br />
      Anpassungsfähig:
      <br />
      Im Team versuche ich mich in die Rolle einzufügen, die gerade am meisten gebraucht wird
      <br />
      Ich habe kein Problem damit Befehle und Aufträge von anderen anzunehmen, aber genau so wenig diese aufzuteilen und eine Führungsrolle zu übernehmen.
      <br />
      <br />
      <br />
      <br />
      Hobbies
      <br />
      Ich spiele liebend gerne Videospiele.
      <br />
      Unter anderem bin ich da auch in einem Team, welches aus mehreren Leuten und war bis vor kurzem noch in einer Führungsrolle.
      <br />
      Wie in jedem Team ist auch hier Kommunikation und Arbeit der Schlüssel zum Erfolg, weshalb wir mindestens einmal die Woche ein Training durchführen um unsere Taktiken zu besprechen und ein Spiel gegen ein anderes Team zu organisieren.
      <br />
      <br />
      Wie schon meine Eigenschaft «Technikbegeistert» vorausahnen lässt, ist Technik auch mein Hobby.
      <br />
      Ich suche ab und zu kleine Herausforderungen und versuche diese auszuführen.
      <br />
      Da mein Budget aber immer nicht groß ist, sind das meistens softwaretechnische Herausforderungen, die ich mir suche.
      <br />
      Als Beispiel besitze ich ein Google Nexus 6, ein Smartphone aus dem Jahre 2014, welches mit einer Android 9.0 (Pie) Rom geflasht ist. So versuche ich schon bevor mein Alltagshandy das Android 9.0 Update erhält das neue Betriebssystem kennen zu lernen.
      <br />
      Bei solchen Hobbies geht es mir auch wenig um die Komplexität sondern mehr Zeitvertreib und zu wissen, dass ich sowas in Zukunft könnte und falls ich es einmal brauchen könnte, schon vorbereitet bin.
      <br />
      <br />
      Das Tastaturschreiben könnte man ebenfalls schon fast als mein Hobby ansehen, denn ich schreibe öfters gerne längere Texte am Computer. Besonders habe ich Gefallen daran meiner Fingerfertigkeit im 10-Finger System stetig zu verbessern, da mir dies Zeit spart und Spaß macht.
      <br />
      <br />
      Musik
      <br />
      Musik begleitet mich durch den Alltag. Die Musik hilft mir, mich besser konzentrieren zu können und lässt mich so effizienter arbeiten.
      <br />
      So kann ich mithilfe von Musik mein Umfeld ausblenden und mich der Arbeit, ohne weitere Ablenkungen, widmen.


    </span>
    <button onclick="readMoreLess1()" id="rdMr1" class="moreBtns">Mehr anzeigen</button></p>
  </div>
  <div class="responsiveContent2">
    <h1 class="titelBox"><a name="Informatikkenntnisse">Informatikkenntnisse</a></h1>
    <p class="contentBox">
      <img src="Pictures/Csharp_Logo.png" class="logosInformatikkenntnisse"/>
      <br />
      <br />
      Unter all den Programmiersprachen die mir lieb sind, ist C# auf jeden Fall mein Favorit.
      <br />
      Wenn ich mit C# arbeiten soll, gehe ich mit noch mehr Motivation an das Projekt und versuche es bis zum Anschlag zu verbessern.
      <br />
      Leider wird uns in der Berufsschule meiner Meinung nach relativ wenig über C# erklärt.
      <br />
      Wegen der wenigen Belehrung in der Berufsschule über C#, habe ich bedauerlicherweise eine Wissenslücke bei einer Verbindung mit einer Datenbank. Zurzeit fehlt mir zwar das nötige Verständnis, dennoch bemühe ich mich sehr, mir dieses Wissen selber anzueignen. Mein Wissensstand bei dieser Programmiersprache liegt bei gut.
      <br/>
      <br />
      <br />
      <br />
      <img src="Pictures/Java_Logo.jpg" class="logosInformatikkenntnisse"/>
      <br />
      <br />
      Eine Programmiersprache die mir leider nicht so liegt ist Java.
      <br />
      <br />
      Konsolenbasierte Applikationen sind kein Problem für mich, jedoch
      <span id="dots2">...</span>
      <span id="more2">
        wird es etwas komplizierter für mich graphischen Sachen umzusetzen.
        <br />
        Vererbung hingegen stellt kein großes Problem für mich da.
        <br />
        Da mich die Sprache auch nicht wirklich packt, habe ich da Probleme wirklich Zeit zu investieren.
        <br />
        Da ich weniger Interesse für diese Sprache besitze, ist es ein Problem für mich, Zeit in sie zu investieren. Mein Wissensstand bei dieser Programmiersprache liegt bei ausreichend.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/AndroidStudio_Logo.png" class="logosInformatikkenntnisse"/>
        <br />
        <br />
        Android Studio interessiert mich an sich schon, doch das Programmieren der Plattform Androids konnte mich leider nie wirklich überzeugen. So liegt mein Wissen über Android auch bei ausreichend.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/MySQL_Logo.jpg" class="logosInformatikkenntnisse"/>
        <br />
        <br />
        MySQL ist eine sehr spezielle Angelegenheit bei mir.
        <br />
        Ich beherrsche die Syntax, bin auch in der Lage mehrere Joins auszuführen, jedoch vergesse ich manchmal, wie diese funktionieren, weshalb ich mir kurz die MySQL Syntax im Internet anschaue, um mir selber auf die Sprünge zu helfen.
        <br />
        Oft unterläuft mir ein Fehler, welchen ich nach wenigen Minuten erst finde und mich nach der Lösung des Fehlers frage, was ich mir nur gedacht habe.
        <br />
        Anhand dieser kleinen Schwäche liegt mein Wissen über MySQL „nur” auf gut.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/HTML_Logo.png" class="logosInformatikkenntnisse"/>
        <br />
        <br />
        Das meiste gelingt mir in HTML/CSS ohne Hilfe. Nur bei wenigen Wunschvorstellungen, welche ich nicht eigenständig erfüllen kann, suche ich im Internet nach der passenden Hilfe. Es hat für mich hohe Priorität ein einfaches und schlichtes Design zu programmieren. Auf Ablenkungen wie beispielsweise Animationen verzichte ich. Mein Wissensstand über HTML/CSS liegt bei sehr gut.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/JS_Logo.jpg" class="logosInformatikkenntnisse"/>
        <br />
        <br />
        Deswegen schätze ich meine Fähigkeiten auf genügend bis gut ein. Bei dieser Programmiersprache beherrsche ich die Basics. Mit Hilfe aus dem Internet stellt es für mich kein Problem da, Codes zu verstehen. Auch begreife ich sofort, wie dieses funktionieren und wie ich diese anpassen muss.
        <br/>
        <br />
        <br />
        <br />
        <img src="Pictures/PHP_Logo.png" class="logosInformatikkenntnisse"/>
        <br />
        <br />
        Bei PHP fällt es mir anfangs etwas schwer anzufangen, weshalb ich mich immer einige Minuten, manchmal sogar Stunden, einarbeiten muss. Dabei versuche ich stets nur sehr wenige Tage Pause einzulegen. Bei Projekten mit PHP nutze ich immer das BBC-MVC, wo ich mich auch bestens auskennen. Hier liegt mein Wissen über PHP bei gut.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/Python_Logo.png" class="logosInformatikkenntnisse"/>
        <br />
        <br />
        Python wurde uns nur ganz kurz in der Berufsschule gezeigt, weshalb ich nur die grundlegendsten Sachen kenne. Dies finde ich sehr schade, denn durch die kurze Behandlung war es leider unmöglich Routine darin aufzubringen. Dadurch konnte mich Python leider nicht hinreißen, weshalb mein Wissensstand bei ungenügend liegt.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/GitHub_Logo.png" class="logosInformatikkenntnisse"/>
        <br />
        <br />
        GitHub nutze ich immer bei Projekten, sofern diese in Gruppen durchgeführt werden. Nur bei C# Projekten verzichte ich, da ich bei der Verbindung zwischen Visual Studio und GitHub ein Problem hatte und unter Zeitdruck stand.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/Windows_Logo.png" class="logosInformatikkenntnisse" />
        <br />
        <br />
        Windows läuft auf meinem Computer. Ich kenne mich großartig damit aus und verwende es täglich.
        <br />
        Die Konsole brauche ich jedoch selten bis nie, nur die Oberfläche.
        <br />
        Ich weiss, wie man die Einstellung schnell findet und wie man verschiedenste Probleme behebt. Wenn ich einmal nicht weiter weiss, suche ich im Internet nach einer Lösung. Ich gebe erst dann auf, wenn die Suche schon mehrere Tage andauert.
        <br />
        Windows läuft auch als Dual Boot auf meinem MacBook, falls ich unterwegs C#, oder andere Windows-Only Dinge tun muss. Mein Wissen über Windows steht bei sehr gut.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/MacOS_Logo.png" class="logosInformatikkenntnisse" />
        <br />
        <br />
        MacOS X benutze ich unterwegs und um Arbeiten zu erledigen. Ausnahme ist, wenn ich eine Virtuelle Maschine brauche.
        <br />
        Ich finde, dass ich auf einem MacBook viel effizienter Arbeite, als auf einem Computer oder Laptop mit Windows.
        <br />
        Das Wissen über MacOS X von mir liegt bei gut.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/Linux_Logo.png" class="logosInformatikkenntnisse" />
        <br />
        <br />
        Linux benutze ich ungerne, nicht, weil ich es nicht beherrsche, sondern weil mich die grafische Oberfläche nicht anspricht.
        <br />
        Zwar beherrsche ich einige Befehle, verstehe auch, wie das Betriebssystem funktioniert, doch das reicht nicht für eine regelmäßige Nutzung. Deshalb liegt mein Stand des Wissens über Linux bei gut.
        <br />
        <br />
        <br />
        <br />
        <img src="Pictures/Android_Logo.png" class="logosInformatikkenntnisse"/>
        <br />
        <br />
        Android benutzte ich tagtäglich. Ich kenne mich hervorragend damit aus und weiß wie das System funktioniert. Mein Wissen über Android liegt bei sehr gut.
        <br />
      </span>
      <button onclick="readMoreLess2()" id="rdMr2" class="moreBtns">Mehr anzeigen</button></p>
  </div>
  <div class="responsiveContent2">
    <h1 class="titelBox"><a name="Projekte">Projekte</a></h1>
    <p class="contentBox">
      <br />
      <a href="https://github.com/Sivakeerthan/DiscoverBern">
      DiscoverBern
    </a>
    <br />
    Discover Bern ist ein Projekt mit dem BBC-MVC Projekt.
    <br />
    Das Projekt soll zeigen, welche Tätigkeiten man in Bern ausführen kann und diese können User hinzufügen, bearbeiten und bewerten.

      <span id="dots3">...</span>
      <span id="more3">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed
        nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
      <button onclick="readMoreLess3()" id="rdMr3" class="moreBtns">Mehr anzeigen</button></p>
  </div>
  <a name="Zeugnisse">
  <div class="responsiveContent2">
  </a>
    <h1 class="titelBox">Zeugnisse und Diplome</h1>
    <?php
    if(!isset($_SESSION["ZugriffZeugnisse"])) {
      echo '<div id="privateSektion-login">


      <p class="contentBox">
      Um Zugriff auf diesen Bereich zu erhalten, melden Sie sich bitte an. Die Nummer und das Passwort finden Sie in der E-Mail.
      </p>
      <form action="login.php" method="post">

      <input type="number" class="loginInput" placeholder="Nummer" name="nummer"/>
      <input class="loginInput" type="password" placeholder="Passwort" name="passwort" />
      <input type="submit" id="actionButton" onclick="checkLogin()" value="Einloggen"/>
      </form>
      </div>';
    }
    else {
      echo '<p class="contentBox">
      Zeugnisse:
      <br />
      <a href="Auszeichnungen/Zeugnisse/GIBB_Zeugnis.pdf" target="_blank" class="standardLink">gibb</a>
      <br />
      <a href="Auszeichnungen/Zeugnisse/BWD_Zeugnis.pdf" target="_blank" class="standardLink">bwd</a>
      <br />
      <br />
      Diplome und Bestätigungen:
      <br />
      <a href="Auszeichnungen/Diplome/ECDL_Base.pdf" target="_blank" class="standardLink">ECDL Base</a>
      <br />
      <a href="Auszeuchnungen/Diplome/Tastaturschreiben.pdf" target="_blank" class="standardLink">Tastaturschreiben</a>
      <br />
      <a href="Auszeichnungen/Diplome/SAP_ABAP.pdf" target="_blank" class="standardLink">SAP ABAP</a>
      <br/>
      <a href="Auszeichnungen/Diplome/Englisch_B1.pdf" target="_blank" class="standardLink">Englisch</a>

      <br>
      <br>
      Sie wollen sich ausloggen? Drücken Sie den Button!
      </p>
      <a href="logout.php"><button id="actionButton">Ausloggen</button></a>';
    }
    ?>

 </div>
  </div>


</div> -->

    <footer>
      <hr>

      <div class="impressum">
        <h1 id="impTitel">Impressum</h1>
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
                  }, 300, function () {

                      // Add hash (#) to URL when done scrolling (default click behavior)
                      window.location.hash = hash;
                  });
              } // End if
          });
      })
  </script>
</body>

</html>
