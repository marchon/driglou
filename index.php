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
  </script>
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
