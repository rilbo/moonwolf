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
  

  <main id="mentionRGPD" class="legale">
      <div>

        <h2>Mentions Légales</h2>
        <h3>Éditions</h3>
        <p>
            Site édité par Premier Pas<br>
            8 Bis rue de la Fontaine au Roi<br>
            06 XX XX XX XX<br>
        </p>
        <h3>Réalisation</h3>
        <p>
            Site réalisé par l’agence Moonwolf<br>
            8 Bis rue de la Fontaine au Roi<br>
            Tél. : 02 XX XX XX XX<br>
            RCS Paris B 475 011 101<br>
            Équipe  :  Cheffe de projet Juliane Gardey<br>
        </p>
        <h3>Hébergement</h3> 
        <p>
        Ce site est hébergé chez Hostinger – Siége social : Kaunas, Lituanie
        </p>
      </div>
    
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