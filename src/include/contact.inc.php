<section id="div__contact">
  <h2>Contact</h2>
  <form action="assets/php/script/scriptEnvoieMailContact.php" method="post" class="contact__champs--global" id="form__contact">
    <div class="contact__champs">
      <div>
        <label for="nom">Votre nom</label>
        <input type="text" name="nom" id="nom" placeholder="Dupond" required />
      </div>
      <div>
        <label for="prenom">Votre prénom</label>
        <input type="text" name="prenom" id="prenom" placeholder="Bernard" required />
      </div>
      <div>
        <label for="mail">Votre adresse e-mail</label>
        <input type="email" name="mail" id="mail" placeholder="dupond.bernard@gmail.com" required />
      </div>
      <div>
        <label for="message">Votre message</label>
        <textarea name="message" id="message" rows="10" placeholder="Bonjour..." required></textarea>
      </div>
    </div>
    <div class="div__button--submit">
      <button type="submit" id="btn__contact" class="btn">Envoyer</button>
    </div>
    <p class="form__contact--message"></p>
  </form>
</section>