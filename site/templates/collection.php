<?php snippet('header') ?>
  <?php snippet('global-nav') ?>
  <article class="md:w-[1024px] lx:w-[1280px]">
    <header class="mb-4">
      <h1 class="text-xl font-semibold"><?= $page->title()->text() ?></h1>
      <div><?= $page->description()->kirbytext() ?></div>
    </header>
    <section class="flex flex-wrap gap-2">
      <?php foreach($page->children()->sortBy('num', 'asc') as $child): ?>
        <?php if ($image = $child->image()) : ?>
          <a href="<?= $child->url() ?>">
            <div class="mb-4">
              <img src="<?= $image->thumb(['width' => 475])->url() ?>" class="painting md:w-[240px] md:h-[320px] object-cover">
              <p class="text-sm"><?= $image->title() ?></p>
            </div>
          </a>
        <?php endif; ?>
      <?php endforeach ?>
    </section>
  </article>
<?php snippet('footer') ?>
