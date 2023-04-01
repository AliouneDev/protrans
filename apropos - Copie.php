
<?php $sql = "SELECT * FROM tbl_apropos2 ORDER BY id DESC LIMIT 1";


// Exécution de la requête SQL
$result = mysqli_query($conn, $sql);

// Vérification s'il y a des résultats
if (mysqli_num_rows($result) > 0) {	
    while ($row = mysqli_fetch_assoc($result)) {
        // Récupération des données de la table
        $sujet = $row["sujet"];
        $titre = $row["titre"];
        $description = $row["description"];
        $image_name = $row["image_name"];
        
?>
        <section class="bg-light-gray wide-tb-100 bg-wave">
            <div class="container pos-rel">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/images/<?php echo $row["image_name"] ?>" class="bordered-img" alt="">
                    </div>

                    <div class="col-lg-6 ml-auto why-choose mt-5 mt-lg-0 wow fadeInRight" data-wow-duration="0"
                        data-wow-delay="0.6s">
                        <!-- Heading Main -->
                        <h1 class="heading-main text-left wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                            <span><?php echo $sujet ?></span>
                            <?php echo $titre ?>
                        </h1>
                        <!-- Heading Main -->

                        <p><?php echo $description; ?></p>

                        <p>Compellingly develop fully researched process improvements through innovative opportunities.
                            Credibly productize highly efficient potentialities for vertical core competencies. Quickly
                            maintain pandemic experiences rather than low-risk high-yield processes.</p>

                        <div class="skillbar-wrap mt-5">
                            <div class="clearfix">
                                Logistics
                            </div>
                            <div class="skillbar" data-percent="75%">
                                <div class="skillbar-percent">75%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>

                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Truck Rental
                            </div>
                            <div class="skillbar" data-percent="50%">
                                <div class="skillbar-percent">50%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>

                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Courier
                            </div>
                            <div class="skillbar" data-percent="95%">
                                <div class="skillbar-percent">95%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Air Transport
                            </div>
                            <div class="skillbar" data-percent="60%">
                                <div class="skillbar-percent">60%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                        <div class="skillbar-wrap">
                            <div class="clearfix">
                                Support
                            </div>
                            <div class="skillbar" data-percent="95%">
                                <div class="skillbar-percent">95%</div>
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
<?php
}
}

?>
      
        
        <!-- About Us Section End -->