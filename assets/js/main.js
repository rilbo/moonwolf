window.onload = () => {

  setTimeout(() =>{
    let iframes = document.querySelectorAll('iframes')
    console.log(iframes)
    for (const index of iframes) {
      index.setAttribute('title', 'Affichage icône pour le Live chat ( avec un membre de l\'association)')
      console.log(index)
  }
  }, 3000)

  
  // Submit formulaire de contact
  let form = document.querySelector("#form__contact");
  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      var http = new XMLHttpRequest();
      var url = "assets/php/script/scriptEnvoieMailContact.php";
      var params = `&nom=${form
        .querySelector("#nom")
        .value.trim()}&prenom=${
        form.querySelector("#prenom").value
      }&numero=${form.querySelector("#numero").value}&mail=${
        form.querySelector("#mail").value
      }&objet=${form.querySelector("#objet").value}&message=${
        form.querySelector("#message").value
      }`;
      http.open("POST", url, true);

      //Send the proper header information along with the request
      http.setRequestHeader(
        "Content-type",
        "application/x-www-form-urlencoded"
      );

      http.onreadystatechange = function () {
        //Call a function when the state changes.
        if (http.readyState == 4 && http.status == 200) {
          let json = JSON.parse(http.responseText);
          form.querySelector(".form__contact--message").innerHTML =
            json.message;
          form
            .querySelector(".form__contact--message")
            .classList.remove(
              "form__message--success",
              "form__message--error"
            );
          let classMessage;
          if (json.error) {
            classMessage = "form__message--error";
          } else {
            dataLayer.push({ event: "envoi-contact" });
            classMessage = "form__message--success";
          }
          form
            .querySelector(".form__contact--message")
            .classList.add(classMessage);
        }
      };
      http.send(params);
    });
  }

  // Event video joue la première fois pour GA tracker
  let videoStarted = false;
  document
    .querySelector("#div__video video")
    .addEventListener("play", function () {
      if (videoStarted == false) {
        videoStarted = true;
        dataLayer.push({ event: "video-play" });
      }
      document
        .querySelector("#div__video")
        .removeEventListener("play", function () {});
    });
};
