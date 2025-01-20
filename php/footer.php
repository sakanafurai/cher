<footer>

<!-- Social Networks -->
  <div class="social-links">
    <ul>
    <?php foreach (Theme::socialNetworks() as $key => $label) : ?>
      <li><a href="<?php echo $site->{$key}(); ?>" target="_blank"><img src="<?php echo DOMAIN_THEME . 'img/social-icons/' . $key . '.svg' ?>" alt="<?php echo $label ?>"/></a></li>
    <?php endforeach; ?>
    </ul>
  </div>

  <div class="copyright">
    <p class="footer-credit"><?php echo $site->footer(); ?></p>
    <p class="template-credit">Powered by <a href="https://www.bludit.com/" target="blank">Bludit</a></p>
  </div>

</footer>
