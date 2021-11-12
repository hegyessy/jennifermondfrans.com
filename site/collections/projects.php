<?php

return function ($site, $files) {
	return $site->find('projects')->children()->listed();
};
