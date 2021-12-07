<section id="div__temoignages">
  <h2>Elles témoignent</h2>
  <div class="temoignages__container">
    <a class="temoignages__item" href="#">
      <div class="temoignages__item--backdrop">
        <p>Il ne faut pas avoir peur d'entreprendre. Il faut oser : qui n'ose rien, n'a rien.</p>
      </div>
      <figure>
        <picture>
          <source srcset="assets/img/femme1.webp" type="image/webp">
          <img src="assets/img/femme1.png" alt="Femme souriant à l'objectif">
          <picture>
      </figure>
    </a>
    <a class="temoignages__item" href="#">
      <div class="temoignages__item--backdrop">
        <p>Depuis que j'ai démarré ma propre activité, je me suis retrouvée.</p>
      </div>
      <figure>
        <picture>
          <source srcset="assets/img/femme2.webp" type="image/webp">
          <img src="assets/img/femme2.png" alt="Portrait de femme debout de mi-dos">
          <picture>
      </figure>
    </a>
    <a class="temoignages__item" href="#">
      <div class="temoignages__item--backdrop">
        <p>L'indépendance que l'on a en travaillant à son compte n'a pas de prix.</p>
      </div>
      <figure>
        <picture>
          <source srcset="assets/img/femme3.webp" type="image/webp">
          <img src="assets/img/femme3.png" alt="Femme souriant croisant les bras debout regardant vers l'objectif">
          <picture>
      </figure>
    </a>
    <div class="temoignages__selector--mobile">
      <input type="radio" name="temoignages" id="temoignage1" data-pos="0" checked>
      <label for="temoignage1"></label>
      <input type="radio" name="temoignages" id="temoignage2" data-pos="1">
      <label for="temoignage2"></label>
      <input type="radio" name="temoignages" id="temoignage3" data-pos="2">
      <label for="temoignage3"></label>
    </div>
  </div>
</section>

<script>
  function slider(container, triggerSlider, pos) {
    let e = document.querySelector(container)
    let divWidth = e.querySelectorAll("*")[0].offsetWidth

    let trigger = document.querySelector(triggerSlider)
    let baseLeft = divWidth / 2
    trigger.style.left = (baseLeft + (pos * divWidth)) + "px"
    e.scroll(divWidth * pos, 0)
  }

  let btns = document.getElementsByName("temoignages")
  for (const btn of btns) {
    btn.addEventListener("change", function() {
      slider("#div__temoignages .temoignages__container", "#div__temoignages .temoignages__selector--mobile", this.dataset.pos)
    })
  }
</script>