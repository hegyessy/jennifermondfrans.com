<?= snippet('header') ?>
<main class=content>
	<aside>
		<?= snippet('title') ?>
		<?= snippet('navigation') ?>
	</aside>
	<article>
	<section id=feature>
		<?php $featured = $kirby->collection('featured') ?>
		<figure class=project-image-featured>
			<a href="<?= $featured->parent()->url() ?>">
				<img src="<?= $featured->url() ?>" srcset="<?= $featured->srcset([300, 800, 1024]) ?>">
			</a>
			<figcaption>
				<span><?= $featured->title() ?></span>,
				<span><?= $featured->parent()->title() ?></span>
			</figcaption>
		</figure>
	</section>
	<?php foreach($kirby->collection('projects') as $project): ?>
	<section class=homepage-project>
		<header class=project-header>
			<h3><?= $project->title() ?></h3>
			<div><?= $project->about()->kirbytext() ?></div>
		</header>
		<div class=project-images>
			<?php foreach($project->images() as $file): ?>
			<figure class=project-image-thumb>
				<img src="<?= $file->url() ?>" srcset="<?= $file->srcset([300, 800, 1024]) ?>">
				<figcaption><?= $file->title() ?></figcaption>
			</figure>
			<?php endforeach ?>
		</div>
	</section>
	<?php endforeach ?>
	</article>
</main>
<?= snippet('footer') ?>
