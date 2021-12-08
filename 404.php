<!DOCTYPE html>
<html lang="fr">

<?php
include_once "./src/include/head.inc.php";
?>

<body>

  <?php
  include_once "./src/include/scriptAddons.inc.php";
  include_once "./src/include/navbar.inc.php";
  ?>
  
  <main id="pnf__main">
    <img src="assets/img/LOGO.png" alt="Logo cassé de Premier Pas">
    <h1>Page non trouvée</h1>
    <h2>ERREUR 404</h2>
    <p>Cette page n'a pas pu être trouvée !</p>
    <a href="/" class="btn-vide">Retour à l'accueil</a>
  </main>
  
  <?php
  include_once "./src/include/footer.inc.php";
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