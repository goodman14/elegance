<?php snippet('header') ?>

  <main class="main container" role="main">

    <div class="wrap">

      <header>
        <h1><?= $page->title()->html() ?></h1>

      </header>

      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>


      <div class="testimonial-containers">
        <?php foreach($page->testimonials()->yaml() as $testimonial): ?>
          <div class="testimony">
            <?php echo $testimonial['comment'] ?><br />
            <b><?php echo $testimonial['who'] ?></b><br />
            <?php echo $testimonial['date'] ?>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>
