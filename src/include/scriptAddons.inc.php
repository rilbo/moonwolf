<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJTS63B" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Messenger Plugin de discussion Code -->
<div id="fb-root"></div>

<!-- Your Plugin de discussion code -->
<div id="fb-customer-chat" class="fb-customerchat"></div>

<script>
  var chatbox = document.getElementById("fb-customer-chat");
  chatbox.setAttribute("page_id", "103213425532596");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: "v12.0",
    });
  };

  (function(d, s, id) {
    var js,
      fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js";
    fjs.parentNode.insertBefore(js, fjs);
  })(document, "script", "facebook-jssdk");
</script>