<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Bludit">
  <?php echo Theme::metaTags('title'); ?>
  <?php echo Theme::metaTags('description'); ?>
  <?php echo Theme::favicon('img/favicon.png'); ?>
  <?php echo Theme::css('css/style.css'); ?>
  <!-- Load Bludit Plugins: Site head -->
  <?php Theme::plugins('siteHead'); ?>
</head>
<body>

  <!-- Load Bludit Plugins: Site Body Begin -->
  <?php Theme::plugins('siteBodyBegin'); ?>

  <!-- Header -->
  <?php include(THEME_DIR_PHP.'header.php'); ?>

  <main>
  <?php
    if ($WHERE_AM_I == 'page') {
      include(THEME_DIR_PHP.'page.php');
    } else {
      include(THEME_DIR_PHP.'home.php');
    } ?>
  </main>

  <!-- Footer -->
  <?php include(THEME_DIR_PHP.'footer.php'); ?>

  <!-- Load Bludit Plugins: Site Body End -->
  <?php Theme::plugins('siteBodyEnd'); ?>

  <script>
  <?php include(THEME_DIR_JS.'script.js'); ?>
  </script>

</body>
</html>
