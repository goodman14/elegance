<nav class="navigation column nav justify-content-center" role="navigation">
  <ul class="menu nav ">
    <?php foreach($pages->visible() as $item): ?>
    <li class="nav-item menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a class="nav-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>