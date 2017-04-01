<!--Main layout-->
<main ng-app="apps" ng-controller="barangDetail">
    <div class="container-fluid">

        <!--Section: Product intro-->
        <section class="section section-blog-fw">

            <!--First row-->
            <div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <!--Grid-->
                    <div class="container-fluid">
                        <div class="row">

                            <!--First column-->
                            <div class="col-md-3">
                                <h4 class="yellow-text">Gambar Produk</h4>
                                <hr>
                                <!--Carousel Wrapper-->
                                <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">

                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(13).jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(15).jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(16).jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <!--/.Slides-->

                                    <!--Controls-->
                                    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <!--/.First column-->

                            <!--Second column-->
                            <div class="col-md-4">
                                <!--Title-->
                                <a>
                                    <h4 class="yellow-text">{{ nama_barang }} <small>{{ nama_kategori }}</small></h4>
                                </a>
                                <hr>
                                <!--Price-->
                                <div class="price">
                                    <p><span class="price-after">Rp. {{ harga }}</span></p>
                                </div>

                                <hr>

                                <h4 class="yellow-text">Keterangan</h4>
                                <hr>
                                <p>{{ keterangan }}</p>
                                <br>

                            </div>
                            <!--/.Second column-->

                            <!--Third column-->
                            <div class="col-md-5">
                                <h4 class="yellow-text">Rekomendasi Produk</h4>
                                <hr>

                                <!--First review-->
                                <div class="media">
                                    <a class="media-left waves-light">
                                        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-13.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">John Doe</h4>
                                        <ul class="rating inline-ul">
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus.</p>
                                    </div>
                                </div>

                                <!--Second review-->
                                <div class="media">
                                    <a class="media-left waves-light">
                                        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-14.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Nathan Casie</h4>
                                        <ul class="rating inline-ul">
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star amber-text"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus.</p>
                                    </div>
                                </div>

                                <!--Second review-->
                                <div class="media">
                                    <a class="media-left waves-light">
                                        <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-15.jpg" alt="Generic placeholder image">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Dave Snow</h4>
                                        <ul class="rating inline-ul">
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star amber-text"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--/.Third column-->
                        </div>
                    </div>
                    <!--/.Grid-->
                </div>
            </div>
            <!--/First row-->

        </section>
        <!--/Section: Product intro-->


        <hr class="between-sections">

        <!--Section: Product gallery-->
        <section class="section mb-4">

            <!--Section heading-->
            <h1 class="section-heading wow fadeIn" data-wow-delay="0.2s">Product gallery</h1>


            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">

                    <div id="mdb-lightbox-ui"></div>

                    <div class="mdb-lightbox no-margin">


                        <figure class="col-md-4">
                            <a href="http://mdbootstrap.com/images/docs/lightbox-gallery/img%20(52)" data-size="1600x1067">
                                <img src="http://mdbootstrap.com/images/docs/lightbox-thumbs/img%20(52)" class="img-fluid" />
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a href="http://mdbootstrap.com/images/docs/lightbox-gallery/img%20(53)" data-size="1600x1067">
                                <img src="http://mdbootstrap.com/images/docs/lightbox-thumbs/img%20(53)" class="img-fluid" />
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a href="http://mdbootstrap.com/images/docs/lightbox-gallery/img%20(55)" data-size="1600x1067">
                                <img src="http://mdbootstrap.com/images/docs/lightbox-thumbs/img%20(55)" class="img-fluid" />
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a href="http://mdbootstrap.com/images/docs/lightbox-gallery/img%20(54)" data-size="1600x1067">
                                <img src="http://mdbootstrap.com/images/docs/lightbox-thumbs/img%20(54)" class="img-fluid" />
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a href="http://mdbootstrap.com/images/docs/lightbox-gallery/img%20(57)" data-size="1600x1067">
                                <img src="http://mdbootstrap.com/images/docs/lightbox-thumbs/img%20(57)" class="img-fluid" />
                            </a>
                        </figure>

                        <figure class="col-md-4">
                            <a href="http://mdbootstrap.com/images/docs/lightbox-gallery/img%20(56)" data-size="1600x1067">
                                <img src="http://mdbootstrap.com/images/docs/lightbox-thumbs/img%20(56)" class="img-fluid" />
                            </a>
                        </figure>

                    </div>

                </div>
            </div>

        </section>
    </div>

</main>
<!--/Main layout-->
