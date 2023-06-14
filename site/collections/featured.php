<?php

return function ($site) {
    $files = $site->children()->listed()->files();
    return $files->filterBy('featured', true)->first();
};
