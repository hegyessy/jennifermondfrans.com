<html class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $site->description() ?>">
  <title>
    <?= $page->title() ?> | <?= $site->title() ?>
  </title>
  <?= css('assets/css/styles.css') ?>
  <?= js('assets/js/app.js', true) ?>
</head>
<body>
  <main class="px-4 py-8 md:flex m-[0 auto]">
