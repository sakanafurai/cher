  <?php if ( $WHERE_AM_I == 'category' ): ?>
    <div class="category-title">
      <h2 class="title"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder"><path d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z"/></svg><?php echo $page->category(); ?></h2>
    </div>
  <?php endif ?>

  <?php
  // Check if the user is browsing a tag
  if ($WHERE_AM_I=='tag') {
    // Get the tag key from the URL
    $tagKey = $url->slug();

    // Create the Tag-Object
    $tag = new Tag($tagKey);

    // Print the tag name
    echo '<div class="category-title"><h2 class="title"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tag"><path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/><circle cx="7.5" cy="7.5" r=".5"/></svg>'. $tag->name() . '</h2></div>';
  }
  ?>

<!-- Post -->
  <?php foreach ($content as $page): ?>
  <div class="article card">
  <a href="<?php echo $page->permalink(); ?>"></a>
    <!-- Cover image -->
  <?php if ($page->coverImage()): ?>
    <figure>
      <img alt="<?php echo $page->date(); ?> <?php echo $page->title(); ?>" src="<?php echo $page->coverImage(); ?>"/>
    </figure>
  <?php endif ?>

  <!-- Title -->
  <!-- Page data -->
    <h2 class="page-title"><?php echo $page->title(); ?></h2>
    <p class="page-date"><?php echo $page->date(); ?></p>

  </div>
  <?php endforeach ?>

<?php if (Paginator::numberOfPages() > 1) : ?>
<!-- Pagination -->
  <nav class="paginator">
    <ul class="pagination">

  <!-- Previous button -->
    <?php if (Paginator::showPrev()) : ?>
      <li class="pagination-prev">
        <a href="<?php echo Paginator::previousPageUrl() ?>">&#9664;</a>
      </li>
    <?php else: ?>
      <li class="pagination-prev"></li>
    <?php endif; ?>

  <!-- Page number -->
      <li class="pagination-pagenumber">
        <?php echo Paginator::currentPage() ?> / <?php echo Paginator::numberOfPages() ?>
      </li>

  <!-- Next button -->
    <?php if (Paginator::showNext()) : ?>
      <li class="pagination-next">
        <a href="<?php echo Paginator::nextPageUrl() ?>">&#9654;</a>
      </li>
      <?php else: ?>
      <li class="pagination-next"></li>
    <?php endif; ?>

    </ul>
  </nav>
<?php endif ?>
