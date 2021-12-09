<section id="div__ressources">
  <h2>Nos ressources</h2>
  <p>Profitez de nos ressources gratuites pour vous assister dans vos  démarches administratives.
      Vous pouvez également utiliser ces modèles pour bien démarrer dans l’entrepreneuriat.
      Organisez vos futurs projets plus facilement grâce à nos documents disponibles ci-dessous.<br>
      <br>N’attendez plus, entreprenez !
  </p>

  <a href="#" id="btn__ressources" class="btn">Télécharger les fichiers</a>
</section>

<script>
  let btnRessources = document.getElementById("btn__ressources")
  btnRessources.addEventListener("click", function(e) {
    e.preventDefault()
    window.open("/assets/php/script/scriptDownloadRessource.php", "_blank")
  })
</script>