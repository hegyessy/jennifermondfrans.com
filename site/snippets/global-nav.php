<?php
  $items = $pages->listed()->filterBy('template', 'collection');
?>

<header class="shrink-0 pr-8 md:sticky md:top-8 bg-white/90 backdrop-blur-lg self-start">
  <h1 class="text-3xl"><a href="/"><?= $site->title() ?></a></h1>
  <p class="text-lg mb-4 text-gray-600"><?= $site->subtitle() ?></p>
  <details class="md:hidden mb-4">
    <summary class="select-none">Menu</summary>
    <nav class="flex flex-col my-4">
      <?php foreach($items as $item): ?>
        <a class="mb-2 hover:text-blue-700" href="/#<?= $item->slug() ?>"><?= $item->title()->html() ?></a>
      <?php endforeach ?>
      <a href="mailto:me@jennifermondfrans.com" class="mb-2 hover:text-blue-700">Contact</a>
      <a href="/about" class="mb-2 hover:text-blue-700">Biography</a>
    </nav>
  </details>
  <nav class="hidden md:flex md:flex-col mb-4">
    <?php foreach($items as $item): ?>
      <a class="mb-2 hover:text-blue-700" href="/#<?= $item->slug() ?>"><?= $item->title()->html() ?></a>
    <?php endforeach ?>
    <a href="mailto:me@jennifermondfrans.com" class="mb-2 hover:text-blue-700">Contact</a>
    <a href="/about" class="mb-2 hover:text-blue-700">Biography</a>
  </nav>
</header>
