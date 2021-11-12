<?= snippet('header') ?>
<main class=content>
<?= snippet('title') ?>
<?= snippet('navigation') ?>
<article>
	<h2><?= $page->title() ?></h2>
	<div><?= $page->about() ?></div>
</article>
</main>
<?= snippet('footer') ?>
