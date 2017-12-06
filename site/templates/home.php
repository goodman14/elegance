<?php snippet('header') ?>

  <main class="main" role="main">
    
    <!-- Main Banner  -->
    <div class="jumbotron jumbotron-fluid d-flex flex-column justify-content-center">
      <div class="container">
        <div class="banner-content">
          <h2>Kitchens</h2>  
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta consequat ultricies. Integer fringilla quis tellus vitae tempor. Nunc dapibus vitae orci a interdum. Vivamus eleifend eros lacus</p>    
          <button type="button" class="btn btn-outline-default">More Info</button>
        </div>  
      </div>  
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
                <img  class="img-fluid" src="../assets/images/trusted_trader_logo.png" alt="Trusted Trader Logo"/>
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