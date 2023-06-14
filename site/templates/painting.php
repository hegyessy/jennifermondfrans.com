<?php snippet('header') ?>
<?php snippet('global-nav') ?>
<?php
  $collection = $page->siblings()->listed()->sortBy('num', 'asc');
  $prev = $page->prevListed($collection);
  $prevparent = $page->parent()->prevListed();
  if ($prevparent) {
    $lastImageURLFromPreviousParent = $prevparent->children()->sortBy('num', 'desc')->first()->url();
  }
  $next = $page->nextListed($collection);
  $nextParent = $page->parent()->nextListed();
  if ($nextParent) {
    $firstImageURLFromNextParent = $nextParent->children()->sortBy('num', 'asc')->first()->url();
  }
?>
<article class="xl:flex flex-row md:ml-4">
  <div class="flex flex-col">
    <figure class="painting shrink-0  <?php if (false) echo "maximize" ?>">

      <?php if ($image = $page->image()) : ?>
        <img src="<?= $image->url() ?>" alt="A painting of <?php $image->title() ?>" class="max-w-screen max-h-[90vh]" />
      <?php endif ?>

    </figure>
    <div class="flex justify-between my-4">
      <?php if ($prev) : ?>
        <a href="<?= $prev->url() ?>" class="pagination"><span class="mr-1 text-gray-300 rotate-180 inline-block ">&#9658;</span>Prev</a>
      <?php elseif ($prevparent) : ?>
        <a href="/<?= $lastImageURLFromPreviousParent ?>" class="pagination"><span class="mr-1 text-gray-300 rotate-180 inline-block">&#9658;</span><?= $prevparent->title() ?></a>
      <?php else : ?>
        <span class="bg-gray-100 text-gray-300 rounded-lg p-2 inline-block text-center"><span class="mr-1 text-gray-300 rotate-180 inline-block hover:text-black">&#9658;</span>Prev</span>
      <?php endif ?>

      <?php if ($next) : ?>
        <a href="<?= $next->url() ?>" class="pagination">Next <span class="ml-1 text-gray-300 hover:text-black ">&#9658;</span></a>
      <?php elseif ($nextParent): ?>
        <a href="/<?= $firstImageURLFromNextParent ?>" class="pagination"><?= $nextParent->title() ?><span class="ml-1 text-gray-300 hover:text-black">&#9658;</span></a>
      <?php else : ?>
        <span class="pagination text-gray-300">Next<span class="ml-1 text-gray-300 hover:text-black">&#9658;</span></span>
      <?php endif ?>
    </div>
  </div>

  <section class="md:py-4 xl:px-4 xl:py-0">
    <header>
      <h3 class="text-2xl font-semibold"><?= $image->title() ?></h3>
      <p class="text-gray-600"><?= $image->profession() ?></p>
      <p class="text-gray-600"><?= $image->lived() ?></p>
      <p class="text-gray-600"><?= $image->medium() ?></p>
      <p class="text-gray-600"><?= $image->dimensions() ?></p>
    </header>
    <div class="max-w-[56ch] prose text-black py-8">
      <?= $image->description()->kirbytext() ?>
    </div>
  </section>
</article>
<?php snippet('footer') ?>
