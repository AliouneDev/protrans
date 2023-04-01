<?php  include ('Config/Constants.php');?>
<!doctype html>
<html lang="en">

<head>
    <!-- xxx Basics xxx -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- xxx Change With Your Information xxx -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>Logzee - A Logistic Cargo Bootstrap HTML Template</title>
    <meta name="author" content="Mannat Studio">
    <meta name="description" content="Logzee is a Responsive HTML5 Template for Logistic and Cargo related services.">
    <meta name="keywords"
        content="Logzee, responsive, html5, business, cargo, chain supply, company, corporate, expedition, freight, logistics, packaging, services, shipping, transport, transportation, trucking, warehousing">

    <!-- xxx Favicon xxx -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- Main Style CSSS -->
    <link href="assets/css/theme-plugins.min.css" rel="stylesheet">
    <!-- Main Theme CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive Theme CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Page loader Start -->
    <div id="pageloader">
        <div class="loader-item">
            <div class="loader">
                <div class="spin"></div>
                <div class="bounce"></div>
            </div>
        </div>
    </div>
    <!-- Page loader End -->

    <?php include ('headerentete.php'); ?>
    <!-- Page Breadcrumbs Start -->
    <div class="slider bg-navy-blue bg-fixed pos-rel breadcrumbs-page">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Latest News</li>
                </ol>
            </nav>

            <h1>Latest News</h1>
            <div class="breadcrumbs-description">
                Iterative approaches to corporate strategy foster collaborative thinking to further the overall value
                proposition.
            </div>
        </div>
    </div>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- What We Offer Start -->
        <section class="wide-tb-80">
        <?php
$sql = "SELECT * FROM posts";

// Exécution de la requête SQL
$result = mysqli_query($conn, $sql);

// Vérification s'il y a des résultats
if (mysqli_num_rows($result) > 0) {
?>
            <div class="container pos-rel">
                <div class="row align-items-start">

                    <div class="col-md-12 col-lg-8 blog-list">
                        <div class="row">
                            <!-- Blog Items -->
                            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    // Récupération des données de la table
                    $titre = $row["titre"];
                    $contenu = $row["contenu"];
                    $date_creation = $row["date_creation"];
                    $auteur = $row["auteur"];
                    $image_name = $row["image_name"];
                ?>
                            <div class="col-md-6">
                                <div class="blog-warp">
                                    <img src="assets/images/<?php echo $image_name; ?>" alt="" class="rounded" style="width: 500px; height: 300px;">
                                    <div class="meta-box"><a href="#"><?php echo $auteur; ?></a> <span>/</span><?php echo $date_creation; ?>
                                    </div>
                                    <h4 class="h4-md mb-3"><a href="blog-single.html"><?php echo $titre; ?></a></h4>
                                    <p><?php echo $contenu; ?></p>
                                </div>
                            </div>
                            <?php
                }
                ?>
                           
                        </div>

                        <div class="text-center">
                            <a href="#" class="btn-theme bg-navy-blue">Older Post <i
                                    class="icofont-rounded-right"></i></a>
                        </div>
                    </div>


                    <div class="col-md-12 col-lg-4">
                        <!-- Add Some Left Space -->
                        <aside class="sidebar-spacer row">

                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Search Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Search</h3>
                                    <form class="flex-nowrap col ml-auto footer-subscribe p-0">
                                        <input type="text" class="form-control" placeholder="Search …">
                                        <button type="submit" class="btn btn-theme bg-orange"><i
                                                class="icofont-search p-0"></i></button>
                                    </form>
                                </div>
                                <!-- Search Widget End -->

                                <!-- Recent Post Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Recent Posts</h3>
                                    <div class="blog-list-footer">
                                        <ul class="list-unstyled">
                                        <?php
                                            $sql = "SELECT * FROM posts ORDER BY date_creation DESC LIMIT 2";
                                            $result = mysqli_query($conn, $sql);
        
                                            // Vérification s'il y a des résultats
                                            if (mysqli_num_rows($result) > 0) {  
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            // Récupération des données de la table
                                            $titre = $row["titre"];
                                            $contenu = $row["contenu"];
                                            $date_creation = $row["date_creation"];
                                            $auteur = $row["auteur"];
                                            $image_name = $row["image_name"];
                                        
                                        ?> 
                                            <li>
                                                <div class="media">
                                                    <div class="post-thumb">
                                                        <img src="assets/images/<?php echo $image_name; ?>" alt=""
                                                            class="rounded-circle" style="width: 70px; height: 70px;" >
                                                    </div>
                                                    <div class="media-body post-text">
                                                        <h5 class="mb-3 h5-md"><a href="#"><?php echo $titre; ?></a></h5>
                                                        <p><?php echo $contenu; ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                        <?php 
                 }
                }
        }
        ?>
                                    </div>
                                </div>
                                <!-- Recent Post Widget End -->

                                <!-- Sidebar Support Widget Start -->
                                <div class="widget-wrap text-center bg-light-theme rounded py-5">
                                    <div class="mb-2"><i class="icofont-headphone-alt icofont-4x"></i></div>
                                    <h3 class="h3-md fw-5 txt-orange mb-4">Need help?</h3>
                                    <p>Call our award-winning<br> support team 24/7</p>
                                    <a href="#" class="btn-theme bg-orange mt-3">Get In Touch <i
                                            class="icofont-rounded-right"></i></a>
                                </div>
                                <!-- Sidebar Support Widget End -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                            <div class="sidebar-secondary col-lg-12 col-md-6">
                                <!-- Recent Post Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Recent Posts</h3>
                                    <div class="blog-list-categories">
                                        <ul class="list-unstyled">
                                            <li class="active"><a href=" href"> Business</a></li>
                                            <li><a href="#">Logistiques</a></li>
                                            <li><a href="#">Nouvelles</a></li>
                                            <li><a href="#">Recents</a></li>
                                            <li><a href="#">Transport</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- Recent Post Widget End -->

                                <!-- Photostream Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Our Photostream</h3>
                                    <ul id="basicuse" class="photo-thumbs"></ul>
                                </div>
                                <!-- Photostream Widget End -->

                                <!-- Text Widget Widget Start -->
                                <div class="widget-wrap">
                                    <h3 class="h3-md fw-7 mb-4">Text Widget</h3>
                                    <p>Explain to you how all this mistaken idea of hovered link and praising pain was
                                        born and I will give you a complete count of the system expound</p>
                                </div>
                                <!-- Text Widget Widget End -->
                            </div>
                            <!-- Sidebar Secondary Start -->

                        </aside>
                        <!-- Add Some Left Space -->
                    </div>

                </div>

            </div>
            
        </section>
        <!-- What We Offer End -->
    </main>

    <!-- Email Subscribe Start -->
    <section class="wide-tb-50 pb-0 bg-light-theme footer-subscribe">
        <div class="container wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <div class="row">
                <div class="col-sm-12 d-flex col-md-12 col-lg-6 offset-lg-3">
                    <div class="d- align-items-center d-sm-inline-flex  w-100">
                        <div class="head">
                            <span class="d-block">SUBSCRIBE For</span> NEWSLETTER
                        </div>
                        <form class="flex-nowrap col ml-auto">
                            <input type="text" class="form-control" placeholder="Enter order number">
                            <button type="submit" class="btn btn-theme bg-navy-blue">Check Now <i
                                    class="icofont-envelope"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Email Subscribe End -->

    <!-- Main Footer Start -->
    <footer class="wide-tb-70 bg-light-theme pb-0">
        <div class="container">
            <div class="row">

                <!-- Column First -->
                <div class="col-lg-3 col-md-6">
                    <div class="logo-footer">
                        <img src="assets/images/logo_footer.svg" alt="">
                    </div>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                    <h3 class="footer-heading">We're Social</h3>
                    <div class="social-icons">
                        <a href="#"><i class="icofont-facebook"></i></a>
                        <a href="#"><i class="icofont-twitter"></i></a>
                        <a href="#"><i class="icofont-whatsapp"></i></a>
                        <a href="#"><i class="icofont-google-plus"></i></a>
                    </div>
                </div>
                <!-- Column First -->

                <!-- Column Second -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-heading">Quick Navigation</h3>
                    <div class="footer-widget-menu">
                        <ul class="list-unstyled">
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Home</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>About us</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>News</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Services</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Contacts</span></a></li>
                            <li><a href="#"><i class="icofont-simple-right"></i> <span>Support</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Column Second -->

                <!-- Column Third -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-heading">Get In Touch</h3>
                    <div class="footer-widget-contact">
                        <div class="media mb-3">
                            <i class="icofont-google-map mr-3"></i>
                            <div class="media-body">Envato Pty Ltd, 13/2 Elizabeth
                                St Melbourne VIC 3000, Australia</div>
                        </div>
                        <div class="media mb-3">
                            <i class="icofont-smart-phone mr-3"></i>
                            <div class="media-body">
                                <div>+1 (408) 786 - 5117 </div>
                                <div>+1 (408) 786 - 5227 </div>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <i class="icofont-ui-email mr-3"></i>
                            <div class="media-body">
                                <div><a href="#">info@logzee.com</a></div>
                                <div><a href="#">support@logzee-team.com</a></div>
                            </div>
                        </div>
                        <div class="media mb-3">
                            <i class="icofont-clock-time mr-3"></i>
                            <div class="media-body">
                                <div><strong>Mon - Fri</strong></div>
                                <div>10:00 Am - 6:00 PM EST</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column Third -->

                <!-- Column Fourth -->
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-heading">Recent Tweets</h3>
                    <div class="footer-widget-tweet">
                        <div class="d-flex align-items-start">
                            <i class="icofont-twitter txt-ligt-gray icofont-2x"></i>
                            <div class="tweet-stream"></div>
                        </div>

                        <div>
                            <a href="#" class="btn-theme icon-left"><i class="icofont-twitter"></i> Follow @twitter</a>
                        </div>
                    </div>
                </div>
                <!-- Column Fourth -->



            </div>
        </div>

        <div class="copyright-wrap bg-navy-blue wide-tb-30">
            <div class="container">
                <div class="row text-md-left text-center">
                    <div class="col-sm-12 col-md-6 copyright-links">
                        <a href="#">Privacy Policy</a> <span>|</span> <a href="#">Contact</a> <span>|</span> <a
                            href="#">Faq's</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-md-right text-center">
                        Designed by <a href="#" rel="nofollow">MannatStudio</a> © 2021 All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Main Footer End -->

    <!-- Search Popup Start -->
    <div class="overlay overlay-hugeinc">
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                    <div class="col-auto">
                        <i class="icofont-search"></i>
                    </div>
                    <div class="col">
                        <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="cola-auto">
                        <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Search Popup End -->

    <!-- Request Modal -->
    <div class="modal fade" id=request_popup tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable request_popup modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <!-- Contact Details Start -->
                    <section class="pos-rel bg-light-gray">
                        <div class="container-fluid p-0">
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="icofont-close-line"></i>
                            </a>
                            <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md"
                                style="box-shadow: 0px 18px 76px 0px rgba(0, 0, 0, 0.06);">
                                <div class="col bg-fixed bg-img-7 request_pag_img">
                                    &nbsp;
                                </div>


                                <div class="col-lg-7 col-12">
                                    <div class="px-3 m-5">
                                        <h2 class="h2-xl mb-4 fw-7 txt-orange">Request A Quote</h2>
                                        <form action="#" method="post" novalidate="novalidate" class="rounded-field">

                                            <div class="form-row">
                                                <div class="col-md mb-3">
                                                    <select title="Please choose a package" required="" name="package"
                                                        class="form-control wide" aria-required="true"
                                                        aria-invalid="false">
                                                        <option value="">Freight Type</option>
                                                        <option value="Type 1">Type 1</option>
                                                        <option value="Type 2">Type 2</option>
                                                        <option value="Type 3">Type 3</option>
                                                        <option value="Type 4">Type 4</option>
                                                    </select>
                                                </div>
                                                <div class="col-md mb-3">
                                                    <select title="Please choose a package" required="" name="package"
                                                        class="form-control wide" aria-required="true"
                                                        aria-invalid="false">
                                                        <option value="">Incoterms</option>
                                                        <option value="Type 1">Type 1</option>
                                                        <option value="Type 2">Type 2</option>
                                                        <option value="Type 3">Type 3</option>
                                                        <option value="Type 4">Type 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md mb-3">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="City of departure">
                                                </div>
                                                <div class="col-md mb-3">
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Delivery city">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md mb-3">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Total gross weight (KG)">
                                                </div>
                                                <div class="col-md mb-3">
                                                    <input type="text" name="email" class="form-control"
                                                        placeholder="Dimension">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md mb-3">
                                                    <div class="center-head"><span class="bg-light-gray txt-orange">Your
                                                            Personal Details</span></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md mb-3">
                                                    <input type="text" name="name" class="form-control mb-3"
                                                        placeholder="Your Name">
                                                    <input type="text" name="name" class="form-control mb-3"
                                                        placeholder="Email">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Phone Number">
                                                </div>
                                                <div class="col-md mb-3">
                                                    <textarea rows="7" placeholder="Message"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col pt-3">
                                                    <button type="submit" class="form-btn btn-theme bg-orange">Send
                                                        Message <i class="icofont-rounded-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Contact Details End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Request Modal -->

    <!-- Back To Top Start -->
    <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
    <!-- Back To Top End -->

    <!-- xxx Style Switcher xxx -->
    <div class="b-settings-panel active">
        <h5>Color Scheme</h5>
        <div class="settings-section color-list">
            <div class="items color_shade_default active" data-src="assets/css/themes/color_shade_1.css"><img
                    src="assets/color-theme/color_theme_1.png" alt=""></div>
            <div class="items color_shade_1" data-src="assets/css/themes/color_shade_2.css"><img
                    src="assets/color-theme/color_theme_2.png" alt=""></div>
            <div class="items color_shade_2" data-src="assets/css/themes/color_shade_3.css"><img
                    src="assets/color-theme/color_theme_3.png" alt=""></div>
            <div class="items color_shade_3" data-src="assets/css/themes/color_shade_4.css"><img
                    src="assets/color-theme/color_theme_4.png" alt=""></div>
            <div class="items color_shade_4" data-src="assets/css/themes/color_shade_5.css"><img
                    src="assets/color-theme/color_theme_5.png" alt=""></div>
            <div class="items color_shade_5" data-src="assets/css/themes/color_shade_6.css"><img
                    src="assets/color-theme/color_theme_6.png" alt=""></div>
            <div class="items color_shade_6" data-src="assets/css/themes/color_shade_7.css"><img
                    src="assets/color-theme/color_theme_7.png" alt=""></div>
            <div class="items color_shade_7" data-src="assets/css/themes/color_shade_8.css"><img
                    src="assets/color-theme/color_theme_8.png" alt=""></div>
            <div class="items color_shade_7" data-src="assets/css/themes/color_shade_9.css"><img
                    src="assets/color-theme/color_theme_9.png" alt=""></div>
            <div class="items color_shade_7" data-src="assets/css/themes/color_shade_10.css"><img
                    src="assets/color-theme/color_theme_10.png" alt=""></div>
        </div>
        <a class="btn btn-outline-secondary btn-block reset mt-4" data-src="assets/css/style.css"
            href="javascript:void(0)">Reset</a>
        <div class="btn-settings"></div>
    </div>
    <!-- xxx End xxx -->

    <!-- Jquery Library JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/theme-plugins.min.js"></script>
    <script src="assets/twitter/jquery.tweet.js"></script>

    <!-- JQuery Map Plugin -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
    <script type="text/javascript" src="assets/js/jquery.gmap.min.js"></script>

    <!-- Theme Custom FIle -->
    <script src="assets/js/site-custom.js"></script>
</body>

</html>