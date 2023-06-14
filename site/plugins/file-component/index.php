<?php
Kirby::plugin('cookbook/virtual-gallery', [
  'components' => [
    'file::url' => function (Kirby $kirby, $file) {
      if ($kirby->visitor()->prefersJson() && $file->parent()->slug() === 'collection') {
          return $kirby->url() . '/' . $file->parent()->slug() . '/' . $file->name();
      }

      return $file->mediaUrl();
    }
  ]
]);
