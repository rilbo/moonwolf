<!DOCTYPE html>
<html lang="fr">

<?php
include_once "./src/include/head.inc.php";
?>

<body>

  <?php
  include_once "./src/include/scriptAddons.inc.php";
  include_once "./src/include/header.inc.php";
  include_once "./src/include/valeurs.inc.php";
  include_once "./src/include/video.inc.php";
  include_once "./src/include/temoignages.inc.php";
  include_once "./src/include/ressources.inc.php";
  include_once "./src/include/offres.inc.php";
  include_once "./src/include/commentaires.inc.php";
  include_once "./src/include/aides.inc.php";
  include_once "./src/include/actualites.inc.php";
  include_once "./src/include/contact.inc.php";
  include_once "./src/include/newsletter.inc.php";
  include_once "./src/include/footer.inc.php";
  include_once "./src/include/scriptCookie.inc.php";
  ?>

</body>

<script>
function avoidJump(){

    var reg = /^[0-9a-zA-Z_.-]+[@][0-9a-zA-Z_.-]+([.][a-zA-Z]+){1,2}$/;
    v = document.getElementById('mce-EMAIL');
    if( (v.value == "") ||  (!reg.test(v.value)) ){
       v.style.border = "2px solid red";
        return false;
    }
}
</script>
</html>
</html>