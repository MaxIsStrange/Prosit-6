<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Emoji List</title>
</head>

</html>
<html>
<header>
  <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://www.hsbay.space">
        <img src="favico.png" class="image is-rounded ">
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="https://www.hsbay.space">
          Home
        </a>

        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            More
          </a>

          <div class="navbar-dropdown">
            <a class="navbar-item">
              About
            </a>
            <a class="navbar-item">
              Jobs
            </a>
            <a class="navbar-item">
              Contact
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
              Report an issue
            </a>
          </div>
        </div>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <h1 class="title is-1 has-text-centered">
    EMOJI LIST
  </h1>
</header>

<body class="content">
  <div class="columns is-centered">
    <div class="column is-three-fifths">
    <table class="table is-responsive is-narrow has-text-centered is-striped">
      <thead>
        <tr class="is-selected is-size-7-mobile">
          <th colspan="16">Emojis</th>
        </tr>
      </thead>
      <tbody class="is-size-7-mobile">
        <tr>
          <?php
          $j = $_POST["nav"];
          // j pends la valeur de la requête (soit 128512)
          for ($i = 1; $i <= 256; $i++) {
            echo '<td>&#' . $j . '</td>'; //pour chaque emojis, on crée un <td>EMOJI</td> (entrée dans le tableau)
            $j++;
            if ($i % 16 == 0 && $i != 0) {
              echo '</tr> <tr>'; //quand on arrive à 16 caractères, on change de ligne
            } elseif ($i == 256) {
              echo "</tr>";
              break; //on ferme le tableau à 256 emojis
            }
          }
          echo '</tbody>
                    </table>
                    </div>
                    </div>
                    <div class="has-text-centered">
                        <form method="post">
                            <button class="button is-primary is-centered" name="nav" value="' . ($j - 512) . '"type="submit">Previous page</button>
                            <button class="button is-primary is-centered" name="nav" value="' . ($j) . '"type="submit">Next page</button>';
          //les boutons Previous et next sont des requêtes sur cette même page, previous 512 caractères avant le j final (soit 256 avant la première requête)
          //et next directement à la suite du j final pour afficher 256 après la première requête.
          ?>
        </div>
  </div>


  <div class="has-text-centered">
    <button type="submit" class="button is-primary is-centered" name="nav" value="128512">Home Page</button>
    <!-- retour à la page de base -->
  </div>
  </form>

  <footer class="footer">
    <div class="columns">
      <div class="column has-text-left-mobile">
        <a href="leg/ccv.html" class="button">Conditions générales de vente</a>
        <br>
        <br>
        Merci pour vos cookies
        <br>
        <a href="leg/refCookies.html " class="button">Je refuse</a>
      </div>
      <div class="column has-text-right has-text-left-mobile">
        <ul>
          <li>NOM ENTREPRISE</li>
          <li>N° 56965456789876545678 au RCS</li>
          <li>contact@entreprise.com</li>
          <li>7809 Rue des boulevards, 16000 Angoulême</li>
          <li>N° 5678987654 a la TVA</li>
          <li>Autorisé par XXXXXXXX</li>
        </ul>
      </div>
    </div>
  </footer>
</body>

</html>

</body>

</html>