<!DOCTYPE html>
<html lang="en">
<?php
    include_once "./src/include/head.inc.php";
?>
<body>
<header>
  <nav>
    <input type="checkbox" id="nav-check" />

    <div class="nav-logo">
      <a href="#"><img src="assets/img/LOGO.png" alt="LOGO" /></a>
    </div>

    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    <ul class="nav-links">
      <li><a href="#div__temoignages">Témoignages</a></li>
      <li><a href="#div__ressources">Ressources</a></li>
      <li><a href="#div__offres">Offres</a></li>
      <li><a href="#div__aides_femmes">Aides</a></li>
      <li><a href="#div__actualites">Actualités</a></li>
    </ul>
    <div class="nav-icons">
      <a target="_blank" href="https://www.facebook.com/Premier-Pas-103213425532596"><img src="assets/img/logo_facebook.png" alt="facebook" /></a>
      <a target="_blank" href="https://www.instagram.com/premierpas_off/"><img src="assets/img/logo_instagram.png" alt="instagram" /></a>
      <a target="_blank" href="https://www.linkedin.com/company/premier-pas-off/"><img src="assets/img/logo_linkedin.png" alt="linkedin" /></a>
    </div>
  </nav>
  <div id="div__first_view">
    <figure>
      <picture>
        <source srcset="assets/img/accompagnements_first_view.webp" media="(max-width: 770px)" type="image/webp">
        <source srcset="assets/img/accompagnements_first_view.webp" media="(max-width: 1024px)" type="image/webp">
        <source srcset="assets/img/accompagnements_first_view.png" media="(max-width: 770px)" type="image/png">
        <source srcset="assets/img/accompagnements_first_view.png" media="(max-width: 1024px)" type="image/png">
        <source srcset="assets/img/accompagnements_first_view.webp" type="image/webp">
        <img src="assets/img/accompagnements_first_view.png" alt="Femme souriant à l'objectif">
        <picture>
    </figure>
    <div class="first_view__text--center">
      <h1>Premier pas</h1>
      <hr />
      <span class="first_view__baseline">Entreprendre est à la portée de toutes</span>
    </div>
  </div>
</header>
  
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