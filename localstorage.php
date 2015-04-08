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
    <title>localStorage with localFont</title>
    <meta name="description" content="Based on http://jaicab.com/localFont/">

    <?php include "includes/shared_head.php"; ?>
    <?php include "includes/stylesheet.php"; ?>
    <style>
      .font-roboto body {
        font-family: "Roboto", Helvetica, Helvetica Neue, Arial;
      }
    </style>
    <?php include "includes/fontfaceobserver.php"; ?>
    <?php include "includes/localfont.php"; ?>
  </head>
  <body>
    <?php include "includes/markup.php"; ?>
  </body>
</html>
