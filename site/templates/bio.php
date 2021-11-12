<?= snippet('header') ?>
<main class=content>
<?= snippet('title') ?>
<?= snippet('navigation') ?>
<article id=about>
	<h2>Artist Statement</h2>
	<?= $page->statement()->kirbytext() ?>
	<h2>Biography</h2>
	<?= $page->biography()->kirbytext() ?>
</article>
</main>
<?= snippet('footer') ?>
