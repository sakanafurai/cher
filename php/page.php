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

    echo '<span class="tag"><a href="'. $tag->permalink() .'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5"/></svg>'.$tag->name().'</a></span>';
  } ?>
  </div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>

</div>
