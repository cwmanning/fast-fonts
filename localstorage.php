<!doctype html>
<html class="no-js" lang="">
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
    <script>
      var onFontsLoaded = function() {
        document.documentElement.className += ' font-roboto';
      };
    </script>
    <?php include "includes/fontfaceobserver.php"; ?>
  </head>
  <body>
    <?php include "includes/markup.php"; ?>
    <?php include "includes/localfont.php"; ?>
  </body>
</html>
