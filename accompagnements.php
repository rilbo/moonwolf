<!DOCTYPE html>
<html lang="en">
<?php
    include_once "./src/include/head.inc.php";
?>
<body>
    <?php
    include_once "./src/include/header.inc.php";
    ?>
  
    <section id="div__accompagnements">
        <p class="sous_titre">Doté d’expertes dans le domaine, nous vous proposons trois offres pour vous assister et répondre au mieux à vos attentes.</p>
       <div>

        <article>
           <h3>Administratif</h3>
           <p>Cette offre est faite pour celles qui ont un projet mais qui ne le réalise pas, par peur des risques, 
               contraintes liés à la gestion de l’administratif concernant leur entreprise.</p>
            <img src="assets/img/offre-administratif.png" alt="offre administratif">
            
       </article>

       <article>
           <h3>Juridique</h3>
           <p>L’offre juridique vous aidera à comprendre et à choisir le statut de votre boîte, 
               en effet il en existe plusieurs et il n’est pas toujours aisé de choisir le bon.</p>
            <img src="assets/img/offre-juridique.png" alt="offre juridique">
       </article>

       <article>
           <h3>Psychologique</h3>
           <p>L’accompagnement psychologique vous permettra de mieux gérer votre état d’esprit et 
               de pouvoir exploiter vos ressources tout en étant sereine mentalement.</p>
            
               <img src="assets/img/offre-psychologie.png" alt="offre psychologie">
            
       </article>

       <img src="assets/img/fleur.svg"  alt="fleur_gauche" class="fleur_gauche">
       <img src="assets/img/fleur.svg" alt="fleur_droit" class="fleur_droit">
       </div>
       
    </section>

    <?php
      include_once "./src/include/contact.inc.php";
      include_once "./src/include/newsletter.inc.php";
      include_once "./src/include/footer.inc.php";
    ?>
</body>
</html>