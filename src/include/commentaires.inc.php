<section id="div__commentaires">
  <h2>Leurs avis</h2>
  <div class="commentaires__container">
    <div class="commentaires__container--first">
      <div class="commentaires__each--global">
        <div class="container__img">
          <figure>
            <picture>
              <source srcset="assets/img/avis1.webp" type="image/webp">
              <img src="assets/img/avis1.png" alt="Femme de face souriante">
              <picture>
          </figure>
        </div>
        <div class="commentaires__each--texte">
          <h6>Marine, fondatrice de CrazyBottle</h6>
          <p>Un accompagnement du début à la fin, qui m’a beaucoup aidé sur la création de ma société.</p>
        </div>
      </div>
      <div class="commentaires__each--global">
        <div class="container__img">
          <figure>
            <picture>
              <source srcset="assets/img/avis2.webp" type="image/webp">
              <img src="assets/img/avis2.png" alt="Femme de face souriante">
              <picture>
          </figure>
        </div>
        <div class="commentaires__each--texte">
          <h6>Valentine, à crée la société Earbag</h6>
          <p>La gestion de mon entreprise s’est nettement améliorée grâce aux experts et à leurs nombreux conseils.</p>
        </div>
      </div>
    </div>
    <div class="commentaires__container--second">
      <div class="commentaires__each--global">
        <div class="container__img">
          <figure>
            <picture>
              <source srcset="assets/img/avis3.webp" type="image/webp">
              <img src="assets/img/avis3.png" alt="Femme de face souriante">
              <picture>
          </figure>
        </div>
        <div class="commentaires__each--texte">
          <h6>Nathalie, fondatrice de Piedor</h6>
          <p>J’ai pu apprendre énormément avec Premier Pas, une équipe très accueuillante et très professionnelle.</p>
        </div>
      </div>
      <div class="commentaires__each--global">
        <div class="container__img">
          <figure>
            <picture>
              <source srcset="assets/img/avis4.webp" type="image/webp">
              <img src="assets/img/avis4.png" alt="Femme de face souriante">
              <picture>
          </figure>
        </div>
        <div class="commentaires__each--texte">
          <h6>Marine, fondatrice de CrazyBottle</h6>
          <p>Un accompagnement du début à la fin, qui m’a beaucoup aidé sur la création de ma société.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="commentaires__selector--slider">
    <input type="radio" name="commentaires" id="commentaire1" checked>
    <label for="commentaire1"></label>
    <input type="radio" name="commentaires" id="commentaire2">
    <label for="commentaire2"></label>
  </div>
</section>

<script>
  let inputRadio = document.getElementsByName("commentaires")
  for (const input of inputRadio) {
    input.addEventListener("change", function() {
      if (inputRadio[0].checked) {
        document.querySelector(".commentaires__container--first").style.display = "flex"
        document.querySelector(".commentaires__container--second").style.display = "none"
      } else if (inputRadio[1].checked) {
        document.querySelector(".commentaires__container--second").style.display = "flex"
        document.querySelector(".commentaires__container--first").style.display = "none"
      }
    })
  }
</script>