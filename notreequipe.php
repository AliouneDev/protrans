<section class="bg-white wide-tb-100 mb-spacer-md">
<?php
$sql = "SELECT * FROM personnel";

// Exécution de la requête SQL
$result = mysqli_query($conn, $sql);

// Vérification s'il y a des résultats
if (mysqli_num_rows($result) > 0) {
?>
            <div class="container">
                <!-- Heading Main -->
                <div class="col-sm-12">
                    <h1 class="heading-main">
                        <span>Face Behind Logzee</span>
                        Our Team
                    </h1>
                </div>
                <!-- Heading Main -->
                
                <div class="row pb-5">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    // Récupération des données de la table
                    $poste = $row["poste"];
                    $nom = $row["nom"];
                    $image_name = $row["image_name"];
                ?>
                   
                    <div class="col-12 col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
                        <div class="team-section-one">
                            <img src="assets/images/<?php echo $image_name; ?>" alt="" style="width: 300px;
    height: 270px;" class="rounded">
                            <h4 class="h4-md txt-blue"><?php echo $nom; ?></h4>
                            <h5 class="h5-md txt-ligt-gray"><?php echo $poste; ?></h5>
                        </div>
                    </div>
                    
                    <?php
                }
                ?>

                </div>
                

                <div class="row text-center mt-5 wow fadeInDown" data-wow-duration="0" data-wow-delay="0.5s">
                    <div class="col-lg-8 col-md-12 mx-auto">
                        <h3 class="h3-xl fw-7 txt-blue">We Are Hiring! <span class="lead fw-5 txt-ligt-gray">Become part
                                of our talented team</span></h3>
                        <p class="mt-4">Vivamus imperdiet pulvinar risus, at posuere justo scelerisque sed. Vestibulum
                            ante
                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <a href="#" class="btn-theme bg-orange mt-2">Join Our Team <i
                                class="icofont-rounded-right"></i></a>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
        </section>
        