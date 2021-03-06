<?php
  $font = "font-roboto";
  $fontClass = "";
  if (isset($_COOKIE[$font])) {
    $fontClass = $font;
  }
?>
<!doctype html>
<html class="no-js <?php echo $fontClass; ?>" lang="">
  <head>
    <title>@font-face</title>
    <meta name="description" content="Based on the approach outlined by Filament Group in http://www.filamentgroup.com/lab/font-events.html">

    <?php include "includes/shared_head.php"; ?>
    <?php include "includes/stylesheet.php"; ?>
    <?php include "includes/stylesheet_fontface.php"; ?>
    <style>
      .font-roboto body {
        font-family: "Roboto", Helvetica, Helvetica Neue, Arial;
      }
    </style>
    <script>
      var onFontsLoaded = function() {
        <?php if (!isset($_COOKIE["font-roboto"])) {?>
          document.documentElement.className += ' font-roboto';
          document.cookie = 'font-roboto=true;';
        <?php } ?>
      };
    </script>
    <?php include "includes/fontfaceobserver.php"; ?>
  </head>
  <body>
    <?php include "includes/markup.php"; ?>
  </body>
</html>
