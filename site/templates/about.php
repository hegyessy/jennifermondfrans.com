<?php snippet('header') ?>
<?php snippet('global-nav') ?>
<article class="md:max-w-[1024px]">
    <h2 class="text-xl font-semibold">Statement</h2>
    <div class="mb-4"><?= $page->statement()->text() ?></div>
    <h2 class="text-xl font-semibold">Biography</h2>
    <?= $page->bio()->kirbytext() ?>
    <img src="<?= $page->files()->first()->url() ?>" class="my-4" />
</article>
<?php snippet('footer') ?>
