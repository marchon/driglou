<?php
require('vendor/autoload.php');
// this will simply read AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY from env vars
$s3 = Aws\S3\S3Client::factory();
$bucket = getenv('S3_BUCKET')?: die('No "S3_BUCKET" config var in found in env!');
?>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="css/style.css" media="screen" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="scripts/jquery-ui.js"></script>
  </head>
  <body>
    <div id="container">
      <form method="post">
      <input type = "button" class="add-artwork"/>
      <input type = "submit" class="save-artwork"/>
      <h1>Artoworks manager</h1>
        <ul class = "artwork-list">
        </ul>
      </form>
      <?php
        if(isset($_POST['uploading'])){
          var_dump($_POST['uploading']);
        }
      ?>
      <script>
        $(function(){
          $(".artwork-list").sortable({
            handle: ".drag-area",
            axis: "y"
          });
          $(document).on("mouseenter", ".art-image", function(){
            $(this).css("opacity", 0.8);
          });
          $(document).on("mouseleave", ".art-image", function(){
            $(this).css("opacity", 1);
          });
          $(document).on('click', ".art-image", function(){
            $(this).children()[0].click();
          });
          $(document).on('change', ".artwork-upload", function(){
            readURL(this, $(this).parent()[0]);
          });
          function readURL(input, par_el) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e){
                $(par_el).css('background-image', 'url(' + e.target.result + ')');
              }

              reader.readAsDataURL(input.files[0]);
            }
          }
          $(".add-artwork").click(function(){
            $(".artwork-list").prepend("<li class='artwork'><div class='drag-area'></div><div class='art-image' style = 'background-image: url(images/upload.jpg)'><input class = 'artwork-upload' name = 'uploading[]' type='file' accept='image/*'></div><div class='art-info'><p><span>Technique: </span><input type='text' name='tecnique' value=''></p><p><span>Support: </span><input type='text' name='support' value=''></p><p><span>Size: </span><input type='text' name='size' value=''></p></div></li>");
          });
          $(".save-artwork").click(function(){
            for(var n = 1; n <= $(".artwork-list").children().length; n++){
              $(".artwork-list").children()[n - 1].setAttribute('data-order', n);
            }
          });
        });
      </script>
    </body>
</html>
