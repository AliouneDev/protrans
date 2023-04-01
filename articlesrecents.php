<section class="wide-tb-100">
    <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                    <span>COMPANY'S NEWS</span>
                    Recent Postes
                </h1>
            </div>
            <!-- Heading Main -->

            <!-- Blog Items -->
            <?php 
            $sql = "SELECT * FROM posts ORDER BY date_creation DESC LIMIT 3";

            // Exécution de la requête SQL
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
            <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
                <div class="blog-warp">
                    <div class="blog-image">
                        <img src="assets/images/<?php echo $row["image_name"]; ?>" alt="" class="rounded" style="width: 300px;
    height: 270px;">
                    </div>
                    <div class="meta-box"><a href="#"><?php echo $titre ;?></a> <span>/</span><?php echo $row["date_creation"];?></div>
                    <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                    <p><?php echo $contenu; ?></p>
                </div>
            </div>
            <?php
                }
            }
            ?>
            <!-- Blog Items -->
        </div>
    </div>
</section>
<style>
    .blog-warp {
        display: inline-block;
        vertical-align: top;
    }
    .row {
        text-align: center;
    }
</style>