// Debut ----- Google analytics & GTM
(function (w, d, s, l, i) {
  w[l] = w[l] || [];
  w[l].push({
    "gtm.start": new Date().getTime(),
    event: "gtm.js",
  });
  var f = d.getElementsByTagName(s)[0],
  j = d.createElement(s),
  dl = l != "dataLayer" ? "&l=" + l : "";
  j.async = true;
  j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
  f.parentNode.insertBefore(j, f);
})(window, document, "script", "dataLayer", "GTM-NJTS63B");
// Fin ----- Google analytics & GTM

window.onload = () => {
  // Début ----- Plugin LiveChat Messenger
  setTimeout(() => {
    var chatbox = document.getElementById("fb-customer-chat");
    chatbox.setAttribute("page_id", "103213425532596");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function () {
      FB.init({
        xfbml: true,
        version: "v12.0",
      });
    };

    (function (d, s, id) {
      var js,
        fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js";
      fjs.parentNode.insertBefore(js, fjs);
    })(document, "script", "facebook-jssdk");
    let iframes = document.querySelectorAll("iframes");
    for (const index of iframes) {
      index.setAttribute(
        "title",
        "Affichage icône pour le Live chat ( avec un membre de l'association)"
      );
      console.log(index);
    }
  }, 5000);
  // Fin ----- Plugin LiveChat Messenger

  // Submit formulaire de contact
  let form = document.querySelector("#form__contact");
  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      var http = new XMLHttpRequest();
      var url = "assets/php/script/scriptEnvoieMailContact.php";
      var params = `&nom=${form.querySelector("#nom").value.trim()}&prenom=${
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
            .classList.remove("form__message--success", "form__message--error");
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

//Les aides
document.getElementById('btn__aides').addEventListener('click',function(){

document.getElementById('btn__aides_fermer').style = "display : block";
document.getElementById('btn__aides').style = "display : none";
document.getElementById('aide_article').style = "display : flex";
return false;
})

document.getElementById('btn__aides_fermer').addEventListener('click',function(){

document.getElementById('btn__aides_fermer').style = "display : none";
document.getElementById('btn__aides').style = "display : block";
document.getElementById('aide_article').style = "display : none";
return false;
})

