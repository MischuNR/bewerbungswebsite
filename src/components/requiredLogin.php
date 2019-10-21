<?php
if(!isset($_SESSION["AccessGrades"])) {
  echo '

  <p class="lead">
  Um Zugriff auf diesen Bereich zu erhalten, melden Sie sich bitte an. Die Nummer und das Passwort finden Sie in der E-Mail.
  </p>
  <div class="login-form">
  <form action="src/components/login.php" method="post">
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
  <a href="Items/Grades/Gibb_Zeugnis.pdf" target="_blank" class="btn btn-link" role="button">gibb</a>
  <br />
  <a href="Items/Grades/Bwd_Zeugnis.pdf" target="_blank" class="btn btn-link" role="button">bwd</a>
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
  <a href="src/components/logout.php"><button class="btn btn-warning">Ausloggen</button></a>';
}
?>
