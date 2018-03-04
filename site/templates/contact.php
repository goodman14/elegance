<?php snippet('header') ?>

  <main class="main container " role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
    </header>

    <form method="post">

    <?php if($alert): ?>
    <div class="alert">
      <ul>
        <?php foreach($alert as $message): ?>
        <li><?php echo html($message) ?></li>
        <?php endforeach ?>
      </ul>
    </div>
    <?php endif ?>

    <div class="form-holder row">
      <div class="form-group col-md-4">
        <label for="name">Name*</label>
        <input class="form-control" type="text" id="name" name="name">
      </div>

      <div class="form-group col-md-4">
        <label for="email">Email*</label>
        <input class="form-control" type="email" id="email" name="email" required>
      </div>

      <div class="form-group col-md-4">
        <label for="email">Telephone*</label>
        <input class="form-control" type="number" id="telephone" name="telephone" required>
      </div>
    </div>
    <div class="form-group">
      <label for="text">Message*</label>
      <textarea class="form-control" id="text" name="text" required></textarea>
    </div>

    <input class="btn btn-primary" type="submit" name="submit" value="Submit">

  </form>

  </main>

<?php snippet('footer') ?>
