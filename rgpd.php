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
  

  <main id="mentionRGPD">
    <div class="rgpd">

    <h2>Notre charte RGPD – Association Premier Pas</h2>

    <p>Dans le cadre de l’entrée en vigueur du règlement européen RGPD (Règlement Général sur la Protection des Données), nous vous prions de bien vouloir trouver ci-après notre charte RGPD précisant les modalités de traitement des données personnelles.
    </p> 

    <p>Nous prenons très au sérieux la confidentialité et la sécurité des données personnelles que nous recevons de nos clients. Cette charte RGPD précise en toute transparence le type de données personnelles que nous collectons et traitons, comment nous les collectons et les traitons, pour quelles finalités, avec qui nous sommes susceptibles de les partager dans le cadre des services que nous vous fournissons ainsi que les droits dont vous disposez.<br>
    Nous en profitons pour vous remercier pour la confiance que vous nous accordez au quotidien.</p> 

    <p>
        Premier Pas est une association inscrite la chartes des associations de Paris (75011) sous les références suivantes : <br>
        Numéro SIRET 75446203000015 , code APE 43252, N° TVA Intracommunautaire : FR8750XXXXX<br>
        Gérantes : Toutes l’équipes<br>
        Activité de l’association : conseil et accompagnement<br>
        Siège social :8 Bis, rue de la Fontaine au Roi, 75011 Paris<br>
        Enseigne commerciale : Premier Pas<br>
        Tél : 02 XX XX XX XX, <br>
        E-mail : hello@un-premier-pas.fr<br>
    </p> 

    <p>La présente charte a pour but de définir les conditions de protections des données personnelles, selon les recommandations de la RGPD, cette charte mentionne:</p> 

    <ol>
        <li>Que l’établissement ne garde aucune trace des coordonnées personnelles de ses clients sur des supports autres que numériques comme l’administrateur de gestion, la liste d’e-mailing de la messagerie de l’association et que donc, il n’y a pas de copie « volante » de ces données facilement égérables ou pouvant être volées.</li>
        <li>Les informations collectées avec l’accord des clients sont destinées à exclusion de toutes autres aux :
            <ol class="under-list">
                <li>E-mailing d’information sur les activités de l’association, telles que les campagnes de promotion, d’actualité, d’aides et les mises en avant mensuelles, les nouvelles ressources, les modifications d’horaires, les informations de fermetures exceptionnelles ou pour congés.</li>
                <li>A la tenue et la gestion du formulaire de contact. Ces informations comportent pour le client particulier :
                A minima, le nom, le prénom et l’adresse e-mail</li>
            </ol>
        </li>
        <li>L’établissement n’accepte pas les dons à distance par cartes bancaires. Par ailleurs, en aucun cas l’établissement ne possède les données bancaires (n° de carte) de ses clients ni aucune donnée considérée sensible par le RGPD.</li>
        <li>Les prestataires informatiques qui hébergent le support des données sont à l’exclusion de tout autre :</li>
        <li>
            la base de donnée chez Mailchimp : <a href="https://mailchimp.com/fr/help/about-the-general-data-protection-regulation/">mailchimp.com/fr/help/about-the-general-data-protection-regulation/</a>  
            <br>
            La base de données contact de la messagerie de l’établissement pour les adresses e-mail
        </li>
        <li>Tout client qui demande un droit à l’oubli, à l’effacement ou à la portabilité obtient une réponse favorable et transparente dans un délai maximum d’1 mois.</li>
        <li>A ce jour, aucun projet de développement ou de modification de l’activité de l’association ne sont prévus. Néanmoins, si tel devait être le cas, et qu’une modification sur l’usage des données personnelles devait être requise, l’association s’engage à demander l’autorisation de consentement à l’ensemble de ses clients.</li>
    </ol>

    <h3>Toutes l’équipes de Premier Pas </h3>
    
    <p>Association Premier Pas <br>
    statut de l'association Paris numéro –Siret 80453403000015 - N° TVA : FR87804534030<br>
    Premier Pas<br>
    8 Bis, rue de la Fontaine au Roi, 75011 Paris <br>
    Tél : 02.XX.XX.XX.XX<br>
    hello@un-premier-pas.fr – <a href="https://www.un-premier-pas.fr">www.un-premier-pas.fr</a> 
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