<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eleven Guitar Admin</title>

    <link rel="shortcut icon" type="image/png" href="<?= base_url().'/mdb/' ?>favicon.ico"/>

    <link rel="stylesheet" href="<?= base_url().'mdb/' ?>font-awesome/css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/mdb.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/style.css">
</head>

<body class="fixed-sn mdb-skin">

    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">

            <!-- Logo -->
            <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
                    <img src="http://mdbootstrap.com/images/avatars/img%20(9)" class="img-fluid rounded-circle">
                    <div class="rgba-stylish-strong">
                        <p class="user white-text">Admin<br>admin@gmail.com</p>
                    </div>
                </div>
            </li>
            <!--/. Logo -->

            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-heart"></i> New Arrivals<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Handbags</a>
                                </li>
                                <li><a href="#" class="waves-effect">Shoes</a>
                                </li>
                                <li><a href="#" class="waves-effect">Dresses</a>
                                </li>
                                <li><a href="#" class="waves-effect">Skirts</a>
                                </li>
                                <li><a href="#" class="waves-effect">Jeans</a>
                                </li>
                                <li><a href="#" class="waves-effect">Outerwear</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-diamond"></i> Accessories<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Jewelry</a>
                                </li>
                                <li><a href="#" class="waves-effect">Wallets & Purses</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-gitlab"></i> For kids<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Girls</a>
                                </li>
                                <li><a href="#" class="waves-effect">Boys</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-sun-o"></i> Summer<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Swimsuits</a>
                                </li>
                                <li><a href="#" class="waves-effect">Sandals</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-briefcase"></i> Fall / Winter<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Coats</a>
                                </li>
                                <li><a href="#" class="waves-effect">Boots</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-coffee "></i> Spring<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Denim jackets</a>
                                </li>
                                <li><a href="#" class="waves-effect">Sneakers</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->

        </ul>
        <!--/. Sidebar navigation -->

        <!--Navbar-->
        <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p>BrandFlow Home Page</p>
            </div>


            <ul class="nav navbar-nav float-xs-right">

                <li class="nav-item ">
                    <a class="nav-link"> <span class="tag red z-depth-1">2</span> <i class="fa fa-shopping-cart"></i> <span class="hidden-sm-down">Cart</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link"><i class="fa fa-sign-in"></i> <span class="hidden-sm-down">Register</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a>
                    <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <a class="dropdown-item" href="#">Logout</a>
                        <a class="dropdown-item" href="#">My account</a>
                    </div>
                </li>
            </ul>

        </nav>
        <!--/.Navbar-->
    </header>
    <!--/Double navigation-->

    <!--Main layout-->
    <?= $content ?>
    <!--/Main layout-->





    <!-- SCRIPTS -->
    <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/tether.min.js"></script>
    <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/mdb.min.js"></script>

    <script>
        // SideNav init
        $(".button-collapse").sideNav();
        var el = document.querySelector('.custom-scrollbar');
        Ps.initialize(el);
    </script>

    <script>
        new WOW().init();
    </script>

    <script>
        $(function() {
            var data = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                }, {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }]
            };

            var option = {
                responsive: true,
            };

            // Chart-1
            var ctx = document.getElementById("myChart-1").getContext('2d');
            var myLineChart = new Chart(ctx).Line(data, option);

             // Chart-2
            var ctx = document.getElementById("myChart-2").getContext('2d');
            var myLineChart = new Chart(ctx).Line(data, option);

             // Chart-3
            var ctx = document.getElementById("myChart-3").getContext('2d');
            var myLineChart = new Chart(ctx).Line(data, option);
        });
    </script>

</body>

</html>
