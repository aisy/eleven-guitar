<!--Main layout-->


<!--Carousel Wrapper-->
<div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1" data-slide-to="1"></li>
    <li data-target="#carousel-example-1" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
      <!--Mask-->
      <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
          <ul class="animated fadeInUp col-md-12 smooth-scroll">
            <li>
              <img class="responsive image-carousel" src="<?= base_url('mdb/img/Asset6.png') ?>" alt="">
            </li>
            <li>
              <p class="flex-item">The most powerful and free UI KIT for Bootstrap</p>
            </li>
            <li>
              <a target="_blank" href="#penawaran" class="btn btn-outline-white btn-lg wow fadeInLeft waves-effect waves-light flex-item">Penawaran Kami</a>
            </li>
          </ul>
        </div>
      </div>
      <!--/.Mask-->
    </div>
    <!--/.First slide-->

    <!--Second slide -->
    <div class="carousel-item">
      <!--Mask-->
      <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
          <ul class="animated fadeInUp col-md-12">
            <li>
              <h1 class="h1-responsive">Lots of tutorials at your disposal</h1>
            </li>
            <li>
              <p>And all of them are FREE!</p>
            </li>
            <li>
              <a target="_blank" href="http://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg wow fadeInLeft waves-effect waves-light">Start learning</a>
            </li>
          </ul>
        </div>
      </div>
      <!--/.Mask-->
    </div>
    <!--/.Second slide -->

    <!--Third slide-->
    <div class="carousel-item">
      <!--Mask-->
      <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
          <ul class="animated fadeInUp col-md-12">
            <li>
              <h1 class="h1-responsive">Visit our support forum</h1></li>
              <li>
                <p>Our community can help you with any question</p>
              </li>
              <li>
                <a target="_blank" href="http://mdbootstrap.com/forums/forum/support/" class="btn btn-outline-white btn-lg wow fadeInLeft waves-effect waves-light">Support forum</a>
              </li>
            </ul>
          </div>
        </div>
        <!--/.Mask-->
      </div>
      <!--/.Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->


  <main>

    <div class="container-fluid">

      <!--Section: Main carousel-->
      <section>
        <div class="row">
          <div class="col-md-12">



          </div>
        </div>
      </section>
      <!--/Section: Main carousel-->

      <!--Section: Penawaran-->
      <section class="section" id="penawaran">

        <!--Section heading-->
        <h1 class="section-heading wow fadeIn yellow-text" data-wow-delay="0.2s">Yang kami Tawarkan</h1>
        <!--Section sescription-->
        <p class="section-description wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

        <!--First row-->
        <div class="row">

          <!--First column-->
          <div class="col-lg-3 col-md-6 mb-r wow fadeInUp" data-wow-delay="0.2s">

            <!--Collection card-->
            <div class="card collection-card z-depth-1-half">
              <!--Card image-->
              <div class="view  hm-zoom">
                <img src="<?= base_url('mdb/img/products/guitar.jpg') ?>" class="img-fluid" alt="">
                <div class="stripe yell">
                  <a>
                    <p>Gitar</p>
                  </a>
                </div>
              </div>
              <!--/.Card image-->
            </div>
            <!--/.Collection card-->

          </div>
          <!--/First column-->

          <!--Second column-->
          <div class="col-lg-3 col-md-6 mb-r wow fadeInDown" data-wow-delay="0.2s">

            <!--Collection card-->
            <div class="card collection-card z-depth-1-half">
              <!--Card image-->
              <div class="view  hm-zoom">
                <img src="<?= base_url('mdb/img/products/bass.jpg') ?>" class="img-fluid" alt="">
                <div class="stripe yell">
                  <a>
                    <p>Bass</p>
                  </a>
                </div>
              </div>
              <!--/.Card image-->
            </div>
            <!--/.Collection card-->

          </div>
          <!--/Second column-->

          <!--Third column-->
          <div class="col-lg-3 col-md-6 mb-r wow fadeInUp" data-wow-delay="0.2s">

            <!--Collection card-->
            <div class="card collection-card z-depth-1-half">
              <!--Card image-->
              <div class="view  hm-zoom">
                <img src="<?= base_url('mdb/img/products/pick.jpg') ?>" class="img-fluid" alt="">
                <div class="stripe yell">
                  <a>
                    <p>Pick</p>
                  </a>
                </div>
              </div>
              <!--/.Card image-->
            </div>
            <!--/.Collection card-->

          </div>
          <!--/Third column-->

          <!--Fourth column-->
          <div class="col-lg-3 col-md-6 mb-r wow fadeInDown" data-wow-delay="0.2s">

            <!--Collection card-->
            <div class="card collection-card z-depth-1-half">
              <!--Card image-->
              <div class="view  hm-zoom">
                <img src="<?= base_url('mdb/img/products/ampli.jpg') ?>" class="img-fluid" alt="">
                <div class="stripe yell">
                  <a>
                    <p>Ampli</p>
                  </a>
                </div>
              </div>
              <!--/.Card image-->
            </div>
            <!--/.Collection card-->

          </div>
          <!--/Fourth column-->

        </div>
        <!--/First row-->

        <div class="center text-xs-center">
            <a href="<?= base_url('produk') ?>" class="btn btn-warning btn-rounded">
              <i class="fa fa-eye left"></i> Lihat Semua Produk
            </a>
        </div>

      </section>
      <!--/Section: Penawaran-->

      <hr class="between-sections">

      <!--Section: Testimoni-->
      <section class="section team-section">

          <!--Section heading-->
          <h1 class="section-heading yellow-text">Testimoni</h1>
          <!--Section description-->
          <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

          <!--First row-->
          <div class="row text-xs-center">

              <!--First column-->
              <div class="col-md-4 mb-r">

                  <div class="testimonial">
                      <!--Content-->
                      <h4>Anna Deynah</h4>
                      <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab.</p>
                  </div>
              </div>
              <!--/First column-->

              <!--Second column-->
              <div class="col-md-4 mb-r">
                  <div class="testimonial">
                      <!--Content-->
                      <h4>John Doe</h4>
                      <p><i class="fa fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

                  </div>
              </div>
              <!--/Second column-->

              <!--Third column-->
              <div class="col-md-4 mb-r">
                  <div class="testimonial">
                      <!--Content-->
                      <h4>Maria Kate</h4>
                      <p><i class="fa fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>

                  </div>
              </div>
              <!--/Third column-->

          </div>
          <!--/First row-->

      </section>
      <!--/Section: Testimonials v.3-->

    </div>
  </main>
  <!--/Main layout-->


  <!--Footer-->
  <footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
      <div class="row">

        <!--First column-->
        <div class="col-md-3 offset-md-1">
          <h5>Tentang Eleven Guitar</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>
        </div>
        <!--/.First column-->

        <hr class="hidden-md-up">

        <!--Second column-->
        <div class="col-md-2 offset-md-1">
          <h5 class="title">Links</h5>
          <ul>
            <li><a href="#!">Link 1</a></li>
            <li><a href="#!">Link 2</a></li>
            <li><a href="#!">Link 3</a></li>
            <li><a href="#!">Link 4</a></li>
          </ul>
        </div>
        <!--/.Second column-->

        <hr class="hidden-md-up">

        <!--Third column-->
        <div class="col-md-2">
          <h5 class="title">Links</h5>
          <ul>
            <li><a href="#!">Link 1</a></li>
            <li><a href="#!">Link 2</a></li>
            <li><a href="#!">Link 3</a></li>
            <li><a href="#!">Link 4</a></li>
          </ul>
        </div>
        <!--/.Third column-->

        <hr class="hidden-md-up">

        <!--Fourth column-->
        <div class="col-md-2">
          <h5 class="title">Links</h5>
          <ul>
            <li><a href="#!">Link 1</a></li>
            <li><a href="#!">Link 2</a></li>
            <li><a href="#!">Link 3</a></li>
            <li><a href="#!">Link 4</a></li>
          </ul>
        </div>
        <!--/.Fourth column-->

      </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Social buttons-->
    <div class="social-section">
      <ul>
        <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
        <li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
        <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
      </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright">
      <div class="container-fluid">
        © 2017 Copyright: Eleven Guitar </a>

      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->
