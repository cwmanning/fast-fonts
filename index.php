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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>fast-fonts Test</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
      var fastFontsBegin = Date.now()
    </script>
    <?php include "includes/fontface.php"; ?>
    <?php include "includes/stylesheet.php"; ?>
  </head>
  <body>

    <div class="header-container">
      <header class="wrapper clearfix">
        <h1 class="title">h1.title</h1>
        <nav>
          <ul>
            <li><a href="#">nav ul li a</a></li>
            <li><a href="#">nav ul li a</a></li>
            <li><a href="#">nav ul li a</a></li>
          </ul>
        </nav>
      </header>
    </div>

    <div class="main-container">
      <div class="main wrapper clearfix">

        <article>
          <header>
            <h1>article header h1</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
          </header>
          <section>
            <h2>article section h2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
          </section>
          <section>
              <h2>article section h2</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
          </section>
          <footer>
              <h3>article footer h3</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
          </footer>
        </article>

        <aside>
          <h3>aside</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
        </aside>

      </div> <!-- #main -->
    </div> <!-- #main-container -->

    <div class="footer-container">
      <footer class="wrapper">
        <h3>footer</h3>
      </footer>
    </div>

    <?php include "includes/fontfaceobserver.php"; ?>
  </body>
</html>
