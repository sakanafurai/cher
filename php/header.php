<header>
  <h1 class="title"><a href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title(); ?></a></h1>

  <nav class="navbar">
   <button class="navbar-btn" id="navbar-btn">MENU<br><span class="arrow"></span></button>
    <ul class="navbar-content">
      <li class="navbar-item"><a href="<?php echo Theme::siteUrl() ?>"><?php echo $L->get('home'); ?></a></li>

    <!-- Static pages -->
    <?php foreach ($staticContent as $staticPage) : ?>
      <li class="navbar-item"><a href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a></li>
    <?php endforeach ?>

    <!-- RSS -->
    <?php if (Theme::rssUrl()): ?>
      <li class="navbar-item"><a href="<?php echo Theme::rssUrl() ?>" target="_blank">RSS</a></li>
    <?php endif; ?>
    </ul>
  </nav>
</header>

