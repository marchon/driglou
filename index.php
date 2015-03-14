<html>
  <head>
    <title>My gallery wished to be put on fb</title>
    <link rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
  </head>
  <body>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '430868697071448',
      xfbml      : true,
      version    : 'v2.2'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   function onLogin(response) {
  if (response.status == 'connected') {
    FB.api('/me?fields=first_name', function(data) {
      var welcomeBlock = document.getElementById('fb-welcome');
      welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
    });
  }
}

FB.getLoginStatus(function(response) {
  // Check login status on load, and if the user is
  // already logged in, go directly to the welcome message.
  if (response.status == 'connected') {
    onLogin(response);
  } else {
    // Otherwise, show Login dialog first.
    FB.login(function(response) {
      onLogin(response);
    }, {scope: 'user_friends, email'});
  }
});
  </script>
    <h1 id="fb-welcome"></h1>
    <div class = "gallery">
      <div class = "gallery-item">
        <img src="images/1.jpg" alt="" />
        <div class="item-info">
          <h3>The title of the work</h3>
          <h4>Techniques: pencil, watercolors...</h4>
          <p>
            Made by: ZaraKunst
          </p>
        </div>
      </div>
      <div class = "gallery-item">
        <img src="images/2.jpg" alt="" />
        <div class="item-info">
          <h3>The title of the work</h3>
          <h4>Techniques: pencil, watercolors...</h4>
          <p>
            Made by: ZaraKunst
          </p>
        </div>
      </div>
      <div class = "gallery-item">
        <img src="images/3.jpg" alt="" />
        <div class="item-info">
          <h3>The title of the work</h3>
          <h4>Techniques: pencil, watercolors...</h4>
          <p>
            Made by: ZaraKunst
          </p>
        </div>
      </div>
      <div class = "gallery-item">
        <img src="images/4.jpg" alt="" />
        <div class="item-info">
          <h3>The title of the work</h3>
          <h4>Techniques: pencil, watercolors...</h4>
          <p>
            Made by: ZaraKunst
          </p>
        </div>
      </div>
      <div class = "gallery-item">
        <img src="images/5.jpg" alt="" />
        <div class="item-info">
          <h3>The title of the work</h3>
          <h4>Techniques: pencil, watercolors...</h4>
          <p>
            Made by: ZaraKunst
          </p>
        </div>
      </div>
      <div class = "gallery-item">
        <img src="images/6.jpg" alt="" />
        <div class="item-info">
          <h3>The title of the work</h3>
          <h4>Techniques: pencil, watercolors...</h4>
          <p>
            Made by: ZaraKunst
          </p>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="scripts/grayscale.js"></script>
  </body>
</html>
