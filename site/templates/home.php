<?php snippet('header') ?>

  <main class="main" role="main">



    <!-- Main Banner  -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- each image -->
        <? $i = 0; ?>
        <?php foreach($page->images() as $image): ?>
          <div class="carousel-item <? if($i === 0): ?>active<? endif; ?>">
            <img class="d-block img-fluid" src="<?php echo $image->url() ?>" alt="">
          </div>
          <? $i++; ?>
        <?php endforeach ?>

        <!-- <div class="carousel-item active">
          <img class="d-block img-fluid" src="./assets/images/main_image.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="./assets/images/main_image.jpg" alt="second slide">
        </div> -->
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Main Categories -->
      <div class="container d-flex justify-content-around cards">
        <div class="card kitchen">
          <h2>Kitchens</h2>
        </div>
        <div class="card bedroom">
          <h2>Bedrooms</h2>
        </div>
        <div class="card bathroom">
          <h2>Bathrooms</h2>
        </div>
      </div>


      <!-- about us section -->
      <!-- **********
      This needs changing so it can be editible via the admin area
      ***********-->
      <section class="aboutUs">
        <div class="container">
          <h2>About Us</h2>
          <?= $page->about()->kirbytext() ?>
          <button type="button" class="btn btn-outline-default">More Info</button>
        </div>
      </section>

      <section class="trustedTrader">
        <div class="container">
          <div class="row">
            <div class="col d-flex flex-column justify-content-center">
              <h2 class="text-primary">You can trust us</h2>
              <?= $page->trust()->kirbytext() ?>
               <div>
                  <button type="button" class="btn btn-outline-primary" href="/" role="button">More Info</button>
              </div>
            </div>
            <div class="col-md-4 ttLogo">
              <div class="trust-trader-badge">
                <img  class="img-fluid" src="./assets/images/trusted_trader_logo.png" alt="Trusted Trader Logo"/>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="d-none houzzSection col flex-column justify-content-center ">
        <div class="container">
          <div class="row">

            <div class="col-md-4 ttLogo d-flex justify-content-center flex-column">
              <a href="http://www.houzz.co.uk/pro/cox-rachel89/elegance-by-design">
                <img class="img-fluid"  src="./assets/images/houzz_logo.png" alt="houzz logo"/>
              </a>
            </div>
            <div class="col d-flex flex-column justify-content-center">
              <h2 class="text-primary">Find us on Houzz</h2>
              <?= $page->trust()->kirbytext() ?>
               <div>
                  <button type="button" class="btn btn-outline-primary" href="/" role="button">More Info</button>
              </div>
            </div>
          </div>
        </div>
      </section>

  </main>

<?php snippet('footer') ?>
