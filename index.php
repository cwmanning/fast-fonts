<!doctype html>
<html class="no-js" lang="">
  <head>
    <title>fast-fonts demo</title>
    <meta name="description" content="https://github.com/cwmanning/fast-fonts">
    <?php include "includes/stylesheet.php"; ?>
    <style>
      body {
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <h1>Font Loading Tests</h1>
    <ul>
      <li><a href="/fontface.php<?php if (isset($_GET["alert"])) { echo "?alert"; } ?>">@font-face</a></li>
      <li><a href="/localstorage.php<?php if (isset($_GET["alert"])) { echo "?alert"; } ?>">localStorage</a></li>
    </ul>
    <p>For more information about this site, please see the <a href="https://github.com/cwmanning/fast-fonts">project on GitHub</a>.</p>
  </body>
</html>
