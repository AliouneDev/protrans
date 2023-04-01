<?php 
$sql = "SELECT * FROM services";

// Exécution de la requête SQL
$result = mysqli_query($conn, $sql);

// Vérification s'il y a des résultats
if (mysqli_num_rows($result) > 0) {
?>
    <!-- Welcome To Cargo Start -->
    <section class="bg-white wide-tb-100">
        <div class="container">
            <!-- Heading Main -->
            <div class="row">
                <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                    <h1 class="heading-main">
                        <span>Ce que nous offrons</span>
                        Nos services
                    </h1>
                </div>
            </div>
            <!-- Heading Main -->

            <!-- Icon Boxes -->
            <div class="row">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    // Récupération des données de la table
                    $titre = $row["titre"];
                    $description = $row["description"];
                    $icone_name = $row["icone_name"];
                ?>
                <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                    <a href="service-details.html">
                        <div class="icon-box-1">
                            <img src="assets/icone/<?php echo $icone_name; ?>" alt="">
                            <div class="text">
                                <i class="icofont-vehicle-delivery-van"></i>
                                <?php echo $titre; ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php    
                }
                ?>
            </div>
            <!-- Icon Boxes -->
        </div>
    </section>
<?php    
}
?>