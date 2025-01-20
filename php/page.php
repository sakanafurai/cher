<div class="article">

<!-- Title -->
  <h2 class="page-title"><?php echo $page->title(); ?></h2>

<?php if (!$page->isStatic() && !$url->notFound()): ?>
<!-- Page data -->
  <p class="page-date"><?php echo $page->date(); ?></p>
<?php endif ?>

<!-- Load Bludit Plugins: Page Begin -->
  <?php Theme::plugins('pageBegin'); ?>

<!-- Cover image -->
<?php if ($page->coverImage()): ?>
  <figure>
    <img alt="<?php echo $page->date(); ?> <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>"/>
  </figure>
<?php endif ?>

<!-- Content -->
  <div class="content">
    <?php echo $page->content(); ?>
  </div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

</div>
