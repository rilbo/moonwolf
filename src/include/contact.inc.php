<section id="div__contact">
  <h2>Contact</h2>
  <form action="assets/php/script/scriptEnvoieMailContact.php" method="post" class="contact__champs--global" id="form__contact">
    <div class="contact__champs contact__champs--demi">
      <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" />
      </div>
      <div>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" />
      </div>
    </div>
    <div class="contact__champs contact__champs--demi">
      <div>
        <label for="numero">Numéro</label>
        <input type="tel" name="numero" id="numero" />
      </div>
      <div>
        <label for="mail">Mail</label>
        <input type="email" name="mail" id="mail" required />
      </div>
    </div>
    <div class="contact__champs">
      <label for="objet">Objet</label>
      <input type="text" name="objet" id="objet" list="list-objet" required />
      <datalist id="list-objet">
        <option value="Demande de devis" />
        <option value="Demande de renseignement" />
      </datalist>
    </div>
    <div class="contact__champs">
      <label for="message">Message</label>
      <textarea name="message" id="message" rows="10" required></textarea>
    </div>
    <div class="div__button--submit">
      <button type="submit" id="btn__contact">Envoyer</button>
    </div>
    <p class="form__contact--message"></p>
  </form>
</section>