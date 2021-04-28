<?php
    $gallery="true";
    include('webHeader.php');
?>


 <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Available Templates</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">3 months subscribers</li>
              <li data-filter=".filter-card">6 months subscribers</li>
              <li data-filter=".filter-web">1 year subscribers</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/old-1130731__340.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Strong</a></h4>
                <p>Phone</p>
                <div>
                  <a href="images/old-1130731__340.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="images/nature-3151869__340.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Strong</a></h4>
                <p>Desktop</p>
                <div>
                  <a href="images/nature-3151869__340.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="webImages/Slide-1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4><a href="#">Gaint Black-Red</a></h4>
                  <p>Phone</p>
                    <div>
                        <a href="webImages/Slide-1.png" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                <div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="webImages/Slide-2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Strong</a></h4>
                <p>Tablet</p>
                <div>
                    <a href="webImages/Slide-2.png" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="webImages/Slide-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4><a href="#">Gaint Black-Red</a></h4>
                  <p>Tablet</p>
                  <div>
                    <a href="webImages/Slide-3.png" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="images/img-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                  <h4><a href="#">Gaint Black-Red</a></h4>
                  <p>Laptop</p>
                <div>
                  <!-- <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #portfolio -->
<?php 
    include('webFooter.php')
?>