<?php snippet('header') ?>

  <main class="main container" role="main">

    <div class="wrap">

      <header>
        <h1><?= $page->title()->html() ?></h1>
      
      </header>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>

    </div>

  </main>

<?php snippet('footer') ?>
