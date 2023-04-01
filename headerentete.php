

<?php $sql = "SELECT * FROM contact_entreprise ORDER BY id DESC LIMIT 1";
   // Exécution de la requête SQL
$result = mysqli_query($conn, $sql);

// Vérification s'il y a des résultats
if (mysqli_num_rows($result) > 0) {	
    while ($row = mysqli_fetch_assoc($result)) {
        // Récupération des données de la table
        $adresse = $row["adresse"];
        $telephone = $row["telephone"];
        $messagerie = $row["messagerie"];?>
    <header class="header-one wow fadeInDown">
        <div class="d-flex align-items-center text-md-left top-bar">
            <div class="container px-0">
                <div class="row align-items-center">
                    <div class="col d-flex">
                        <div class="top-text">
                            <small class="txt-black">Adresse</small>
                            <?php echo $adresse; ?>
                        </div>
                        <div class="top-text">
                            <small class="txt-black">Emaii</small>
                            <a href="#"><?php echo $messagerie; ?></a>
                        </div>
                        <div class="top-text">
                            <small class="txt-black">Numéro de Téléphone</small>
                            <?php echo $telephone; ?>
                        </div>
                    </div>
                    <div class="col-md-auto d-flex">

                        <!-- Topbar Language Dropdown Start -->
                        <div class="dropdown d-inline-flex lang-toggle">
                            <a href="#" class="dropdown-toggle btn" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-hover="dropdown"
                                data-animations="slideInUp slideInUp slideInUp slideInUp">
                                <img src="assets/images/us.svg" alt="" class="dropdown-item-icon">
                                <span class="d-inline-block d-lg-none">US</span>
                                <span class="d-none d-lg-inline-block">United States</span> <i
                                    class="icofont-rounded-down"></i>
                            </a>
                            <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                                <a class="dropdown-item active" href="#">English</a>
                                <a class="dropdown-item" href="#">Deutsch</a>
                                <a class="dropdown-item" href="#">Español&lrm;</a>
                            </div>
                        </div>
                        <!-- Topbar Language Dropdown End -->

                        <div class="d-inline-flex request-btn ml-2">
                            <a class="btn-theme icon-left bg-orange no-shadow d-none d-lg-inline-block align-self-center"
                                href="devis.php" role="button" data-toggle="modal" data-target="#request_popup"><i
                                    class="icofont-page"></i> Demande de devis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation Start -->
        <nav class="header-fullpage navbar navbar-expand-lg header-fullpage nav-light">
            <div class="container text-nowrap bdr-nav px-0">
                <div class="d-flex mr-auto">
                    <a class="navbar-brand rounded-bottom light-bg" href="index-2.php">
                        <img src="assets/images/logo.jpg" alt="">
                    </a>
                </div>
                <!-- Topbar Request Quote Start -->
                <span class="order-lg-last d-inline-flex request-btn">
                    <a class="nav-link" href="#" id="search_home"><i class="icofont-search"></i></a>
                </span>
                <!-- Toggle Button Start -->
                <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Toggle Button End -->

                <!-- Topbar Request Quote End -->

                <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown"
                    data-animations="slideInUp slideInUp slideInUp slideInUp">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="index.php" id="dropdown03"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acceuil <i
                                    class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="index.php">Home Layout 1</a></li>
                                <li><a class="dropdown-item" href="index-2.php">Home Layout 2</a></li>
                                <li><a class="dropdown-item" href="index-3.php">Home Layout 3</a></li>
                                <li><a class="dropdown-item" href="index-4.php">Home Layout 4</a></li>
                                <li><a class="dropdown-item" href="index-5.php">Home Layout 5</a></li>
                                <li><a class="dropdown-item" href="index-6.php">Home Layout 6</a></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-toggle-mob dropdown-item dropdown-submenu" href="#"
                                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Third Level Menu <i
                                            class="icofont-rounded-right float-right"></i></a>
                                    <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdown">
                                        <li><a href="#" class="dropdown-item">Action</a></li>
                                        <li><a href="#" class="dropdown-item">Another action</a></li>
                                        <li><a href="#" class="dropdown-item">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Pages <i
                                    class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about-us.php">A propos</a></li>
                                <li><a class="dropdown-item" href="services.php">Services</a></li>
                                <li><a class="dropdown-item" href="shortcodes-element.php">Shortcode Elements</a></li>
                                <li><a class="dropdown-item" href="typography.php">Typographie</a></li>
                                <li><a class="dropdown-item" href="request-page.php">Code Requis</a></li>
                                <li><a class="dropdown-item" href="pricing-plan.php">Nos Tarifs</a></li>
                                <li><a class="dropdown-item" href="404-page.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Projects <i
                                    class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="project-grid.php">Grilles</a></li>
                                <li><a class="dropdown-item" href="project-masonary.php">Projects Masonary</a></li>
                                <li><a class="dropdown-item" href="project-single.php">Projects Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="index.html" id="blog-menu"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i
                                    class="icofont-rounded-down"></i></a>

                            <ul class="dropdown-menu" aria-labelledby="blog-menu">
                                <li><a class="dropdown-item" href="blog-list.php">Blog List</a></li>
                                <li><a class="dropdown-item" href="blog-standard.php">Blog Standard</a></li>
                                <li><a class="dropdown-item" href="blog-grid.php">Blog Grid</a></li>
                                <li><a class="dropdown-item" href="blog-single.php">Blog Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Contact <i
                                    class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="contact-us.php">Contact Us</a></li>
                                <li><a class="dropdown-item" href="contact-us-option.php">Contact Us Option</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Main Navigation End -->
                </div>


            </div>
        </nav>
        <!-- Main Navigation End -->
    </header>
<?php
} 

} 

?>
    <!-- Fullscreen Slider Start -->
    <div class="slider bg-navy-blue">
        <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
            data-alias="classic4export" data-source="gallery"
            style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_slider_1078_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <li data-index="rs-82" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="Power4.easeOut" data-easeout="Power4.easeOut"
                        data-masterspeed="1000" data-thumb="../../assets/images/waterfal-100x50.jpg" data-rotate="0"
                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="" data-slicey_shadow="0px 0px 50px 0px transparent">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/impré1.jpg" alt="" data-bgposition="center center"
                            data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="100"
                            data-scaleend="150" data-rotatestart="0" data-rotateend="0" data-blurstart="0"
                            data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg"
                            data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme NotGeneric-Title" id="slide-82-layer-2"
                            data-blendmode=”color-dodge“ data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-70','-70','-70','-70']" data-fontsize="['70','60','60','55']"
                            data-lineheight="['80','70','70','40']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":200,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Nous sommes
                            PROTRANS221</div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption medium_light_white tp-resizeme" id="slide-82-layer-3"
                            data-blendmode=”color-dodge“ data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                            data-voffset="['-10','-10','-10','-10']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":500,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-fontsize="['28','28','28','28']" data-lineheight="['34','34','34','50']">De la prise en charge
                            à la Destination</div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption tp-resizeme small_light_white " id="slide-82-layer-4"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":600,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-fontsize="['16','16','16','13']" data-lineheight="['30','30','30','20']"><br>      PROTRANS est la concrétisation de plus d’une vingtaine d’années de dur <br>labeur d’une
équipe professionnelle qui continue de relever <br> défis et de s’adapter aux réalités de
l’industrie.<br>
Piliers de notre entreprise, nos collaborateurs de par leur savoir-faire sont essentiels pour
offrir un service de qualité à nos clients.</div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption tp-resizeme btn-theme bg-navy-blue rev-btn" id="slide-82-layer-5"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','140']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":750,"speed":1000,"sfx_effect":"blockfromleft","sfxcolor":"#ffffff","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[30,30,30,30]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[30,30,30,30]" data-fontsize="['14','14','14','14']"
                            data-lineheight="['16','16','16','16']">Plus d'Informations <i class="icofont-rounded-right"></i>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                        data-masterspeed="2000" data-thumb="rev-slider/assets/images/datcolor-100x50.jpg"
                        data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7"
                        data-saveperformance="off" data-title="Intro" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/impré2.jpg" alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                            data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme" id="slide-3-layer-1" data-x="left"
                            data-hoffset="60" data-y="center" data-voffset="-120"
                            data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                            data-transform_idle="o:1;" data-fontsize="['70','70','70','45']"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="700" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" style="z-index: 1; white-space: nowrap;">
                            <span class="slider-small">py</span> <br>Obstacle
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme" id="slide-3-layer-2" data-x="left"
                            data-hoffset="60" data-y="center" data-voffset="10"
                            data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                            data-transform_idle="o:1;"
                            data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1400" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on"
                            style="z-index: 2; white-space: nowrap; font-size: 18px; line-height: 30px;">Notre mission est d’offrir à nos partenaires une expertise technique de pointe et une
vision locale non seulement dans le transport multimodal (air, mer et terre),<br> mais
également dans le transit et la logistique en général, pour tous types de marchandises..
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption BigBold-Button rev-btn " id="slide-3-layer-3" data-x="left"
                            data-hoffset="60" data-y="center" data-voffset="100" data-width="['auto']"
                            data-height="['auto']" data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                            data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 0);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-start="2100" data-splitin="none"
                            data-splitout="none"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                            data-responsive_offset="on" data-responsive="off"
                            style="z-index: 3; white-space: nowrap; font-weight: 800;background-color:rgba(41, 46, 49, 1.00);border-color:rgba(255, 255, 255, 0);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
                            READ MORE
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);">
                </div>
            </div>
        </div>
    </div>