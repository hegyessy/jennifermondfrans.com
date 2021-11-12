<nav class='site-nav'>
	<?php foreach($site->find('projects')->children()->listed() as $project): ?>
		<a href="<?php echo $site->url() . "/#" . $project->slug() ?>"><?php echo $project->title() ?></a>
	<?php endforeach ?>
	<a href=about title='biography and artist statement'>About</a>
</nav>