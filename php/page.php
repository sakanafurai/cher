<div class="article page">

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

<!-- Page tags -->
  <div class="tags">
  <?php
  $returnsArray = true;

  $pageTags = $page->tags($returnsArray);

  foreach ($pageTags as $tagKey=>$tagName) {
    $tag = new Tag($tagKey);

    echo '<span class="tag"><a href="'. $tag->permalink() .'"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 80L0 229.5c0 17 6.7 33.3 18.7 45.3l176 176c25 25 65.5 25 90.5 0L418.7 317.3c25-25 25-65.5 0-90.5l-176-176c-12-12-28.3-18.7-45.3-18.7L48 32C21.5 32 0 53.5 0 80zm112 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>'.$tag->name().'</a></span>';
  } ?>
  </div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

</div>
