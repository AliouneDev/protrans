
        <!-- Counter End -->

        <!-- Our Gallery Start -->
        <section class="bg-white wide-tb-100">
            <div class="container pos-rel">
                <div class="row">
                    <!-- Heading Main -->
                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                        <h1 class="heading-main">
                            <span>our Gallery</span>
                            Photo Showcase
                        </h1>
                    </div>
                    <!-- Heading Main -->
                </div>

                <div id="js-styl2-mosaic" class="cbp">
                    <?php $sql = "SELECT * FROM tbl_notre_vitrine";
                    $result = mysqli_query($conn, $sql);

                    // Vérification s'il y a des résultats
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
            // Récupération des données de la table
            $image_name = $row["image_name"];?>

                    <div class="cbp-item design">
                        <div class="gallery-link">
                            <a href="project-single.html" class="txt-white"><i class="icofont-external-link"></i></a>
                        </div>
                        <a href="images/portfolio/fullwidth/img-1.jpg" class="cbp-caption cbp-lightbox"
                            data-title="Lorem ipsum">
                            <div class="cbp-caption-defaultWrap">
                                <img src="assets/images/<?php echo $image_name;?>" alt="" style="width: 400px;
    height: 300px;">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <i class="icofont-search icofont-2x txt-white"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
}
}
?>
                </div>

            </div>
        </section>