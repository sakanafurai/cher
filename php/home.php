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
  <?php if (!$page->isStatic() && !$url->notFound()): ?>
  <!-- Page data -->
    <h2 class="page-title"><?php echo $page->title(); ?></h2>
    <p class="page-date"><?php echo $page->date(); ?></p>
  <?php endif ?>

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
