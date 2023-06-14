<?php

class PaintingPage extends Page
{
  public function image(?string $filename = null)
  {
    if (!$filename) {
      return $this->parent()->images()->template('painting')->findBy('name', $this->slug());
    }

    return parent::image($filename);
  }
}
