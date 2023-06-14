<?php snippet('header') ?>
<?php snippet('global-nav') ?>
<?php $featured = $kirby->collection('featured') ?>
<article class="md:w-[1024px] lx:w-[1280px] overflow-x-hidden">
  <div class="mb-8">
    <figure>
      <a href="/#<?= $featured->parent()->slug() ?>">
        <img src="<?= $featured->url() ?>" srcset="<?= $featured->srcset([300, 800, 1024]) ?>">
      </a>
      <figcaption>
        <p class="text-gray-600"><?= $featured->title() ?></p>
        <p class="text-gray-600"><?= $featured->parent()->title() ?></p>
      </figcaption>
    </figure>
  </div>
  <?php foreach ($pages->listed()->filterBy('template', 'collection') as $section): ?>
    <h2><?= $section->children()->filterBy('featured', 'true') ?></h2>
    <section class="mb-24 target:pt-8" id="<?= $section->title()->slug() ?>">
      <header class="mb-4">
        <a href="<?= $section->url() ?>">
          <h2 class="text-xl"><?= $section->title()->text() ?></h2>
        </a>
        <p><?= $section->description()->kirbytext() ?></p>
      </header>
      <section class="flex flex-row md:flex-wrap gap-2 overflow-x-scroll">
        <?php foreach($section->children()->sortBy('num', 'asc') as $child): ?>
          <?php if ($image = $child->image()) : ?>
            <a href="<?= $child->url() ?>" class="shrink-0">
              <div class="mb-4 ">
                <img loading="lazy" src="<?= $image->thumb(['width' => 475])->url() ?>" class="w-[240px] h-[320px] object-cover">
                <p class="text-sm"><?= $image->title() ?></p>
              </div>
            </a>
          <?php endif; ?>
        <?php endforeach ?>
      </section>
    </section>
  <?php endforeach ?>
</article>
<?php snippet('footer') ?>
