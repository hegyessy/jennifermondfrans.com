<?php

return function ($site) {
	$files = $site->find('projects')->children()->listed()->files();
	return $files->filter('featured', '==', 'true')->first();
};
