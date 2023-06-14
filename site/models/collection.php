<?php

class CollectionPage extends Page
{
  public function children()
  {
    $images = [];

    foreach ($this->images()->template('painting') as $image) {
      $images[] = [
        'slug'     => $image->name(),
        'num'      => $image->sort()->value(),
        'template' => 'painting',
        'model'    => 'painting',
      ];
    }

    return Pages::factory($images, $this);
  }
}
