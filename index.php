<html>
  <head>
    <title>My gallery wished to be put on fb</title>
    <link rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
    <script type="text/javascript" src="scripts/jquery.lazyload.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script type="text/javascript">
		$(document).ready(function() {
			$('.gallery-image').fancybox({autoCenter: true});
    });
    </script>
  </head>
  <body>
  <script>
  window.fbAsyncInit = function() {
     FB.init({
       appId      : '430868697071448',
       xfbml      : true,
       version    : 'v2.3'
     });

     // ADD ADDITIONAL FACEBOOK CODE HERE
    window.onload = function() {
      FB.Canvas.setAutoGrow();
    }
   };
   $.fancybox.reposition();
   (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
    <div id="container">
      <h1 id="fb-welcome">Gallery</h1>

      <script>
        $(function() {
            $(".lazy").lazyload();
        });
      </script>
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/28.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/28.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle, cardboard canvas</p>
            <p><span>Dimension:</span> 29.7 x 42 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/27.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/27.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> acryl, golden pigment, canvas</p>
            <p><span>Dimension:</span> 60 x 80 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/26.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/26.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle, paper</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/25.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/25.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle, paper</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/24.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/24.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> charcoal, crayola, paper</p>
            <p><span>Dimension:</span> 35 x 50 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/23.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/23.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> charcoal, crayola, paper</p>
            <p><span>Dimension:</span> 50 x 60 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/22.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/22.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle, paper</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/21.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/21.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> charcoal, crayola, paper</p>
            <p><span>Dimension:</span> 35 x 50 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/20.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/20.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> charcoal, crayola, paper</p>
            <p><span>Dimension:</span> 35 x 50 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/19.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/19.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> charcoal, crayola, paper</p>
            <p><span>Dimension:</span> 35 x 50 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/18.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/18.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> charcoal, crayola, paper</p>
            <p><span>Dimension:</span> 35 x 50 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/17.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/17.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle, paper</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/16.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/16.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle, paper</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/15.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/15.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle, paper</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/14.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/14.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> digital painting</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/13.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/13.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> pencil, paper</p>
            <p><span>Dimension:</span> 35 x 45 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/12.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/12.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> pencil, paper</p>
            <p><span>Dimension:</span> 35 x 50 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/11.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/11.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> acryl, cardboard canvas</p>
            <p><span>Dimension:</span> 40 x 60 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/10.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/10.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> ink, paper</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/9.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/9.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/8.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/8.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle, ink, gold pigment, canvas</p>
            <p><span>Dimension:</span> 42 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/7.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/7.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> aquarelle, paper</p>
            <p><span>Dimension:</span> 29.7 x 21 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/6.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/6.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> digital painting</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/5.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/5.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> mixed media - aquarelle, digital</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/4.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/4.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> digital painting</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/3.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/3.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> charcoal, crayola, paper</p>
            <p><span>Dimension:</span> 21 x 29.7 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->

      <hr>

      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/2.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/2.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> pencil, paper</p>
            <p><span>Dimension:</span> 29.7 x 21 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->
      <!-- Gallery item START -->
      <div class="gallery-item lazy">
        <a class="gallery-image" href="images/1.jpg" data-fancybox-group="gallery">
          <div class="gallery-frame">
            <div class="gallery-img" style="background-image: url('images/1.jpg')">
            </div>
          </div>
          <div class="gallery-desc">
            <p><span>Technique and support:</span> pencil, paper</p>
            <p><span>Dimension:</span> 35 x 50 cm</p>
          </div>
        </a>
      </div>
      <!-- Gallery item END -->




    </div>
    <script>
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
  </body>
</html>
