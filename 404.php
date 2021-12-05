<!DOCTYPE html>
<html lang="fr">

<?php
include_once "./src/include/head.inc.php";
?>

<body>

  <?php
  include_once "./src/include/scriptAddons.inc.php";
  ?>
  <header>
    <nav>
      <input type="checkbox" id="nav-check" />

      <div class="nav-logo">
        <a href="/"><img src="assets/img/LOGO.png" alt="LOGO" /></a>
      </div>

      <div class="nav-btn">
        <label for="nav-check">
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>
      <ul class="nav-links">
        <li><a href="/#div__temoignages">Témoignages</a></li>
        <li><a href="/#div__ressources">Ressources</a></li>
        <li><a href="/#div__offres">Offres</a></li>
        <li><a href="/#div__aides_femmes">Aides</a></li>
        <li><a href="/#div__actualites">Actualités</a></li>
      </ul>
      <div class="nav-icons">
        <a target="_blank" href="https://www.facebook.com/Premier-Pas-103213425532596"><img src="assets/img/logo_facebook.png" alt="facebook" /></a>
        <a target="_blank" href="https://www.instagram.com/premierpas_off/"><img src="assets/img/logo_instagram.png" alt="instagram" /></a>
        <a target="_blank" href="https://www.linkedin.com/company/premier-pas-off/"><img src="assets/img/logo_linkedin.png" alt="linkedin" /></a>
      </div>
    </nav>
  </header>
  <main id="pnf__main">
    <img src="assets/img/LOGO.png" alt="Logo cassé de Premier Pas">
    <h1>Page non trouvée</h1>
    <h2>ERREUR 404</h2>
    <p>Cette page n'a pas pu être trouvée !</p>
    <a href="/" class="btn-vide">Retour à l'accueil</a>
  </main>
  <footer>
  <div class="content">
    <ul class="nav-footer-links">
    <li><a href="#div__temoignages">Témoignages</a></li>
      <li><a href="/#div__ressources">Ressources</a></li>
      <li><a href="/#div__offres">Offres</a></li>
      <li><a href="/#div__aides_femmes">Aides</a></li>
      <li><a href="/#div__actualites">Actualités</a></li>
    </ul>
    <div class="copyright">
      <div>
        <div>
          <h4>© Premier Pas</h4>
          <hr />
        </div>
        <h5>
          <a href="mailto:hello@un-premier-pas.fr" class="link__mail">hello@un-premier-pas.fr</a>
        </h5>
      </div>
    </div>
    <div class="nav-footer-icon">
      <a target="_blank" href="https://www.facebook.com/Premier-Pas-103213425532596"><img src="assets/img/logo_facebook.png" alt="facebook" /></a>
      <a target="_blank" href="https://www.instagram.com/premierpas_off/"><img src="assets/img/logo_instagram.png" alt="instagram" /></a>
      <a target="_blank" href="https://www.linkedin.com/company/premier-pas-off/"><img src="assets/img/logo_linkedin.png" alt="linkedin" /></a>
    </div>
  </div>
</footer>
  <?php
  include_once "./src/include/scriptCookie.inc.php";
  ?>

</body>

<script>
  function avoidJump() {

    var reg = /^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/;
    v = document.getElementById('mce-EMAIL');
    if ((v.value == "") || (!reg.test(v.value))) {
      v.style.border = "2px solid red";
      return false;
    }
  }
</script>

</html>

</html>