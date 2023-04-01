 

    <footer class="wide-tb-70 bg-light-gray pb-0">
        <div class="container">
            <div class="row">

                <!-- Column First -->
                <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
                    <div class="logo-footer">
                        <img src="assets/images/logo.jpg" alt="">
                    </div>
                    <p>Notre entreprise de transport de cargo offre des solutions de livraison fiables et efficaces pour les entreprises de tous types et de toutes tailles. Nous sommes spécialisés dans le transport de cargaisons lourdes, encombrantes et délicates à travers le pays et nous avons une flotte de camions modernes et bien équipés pour répondre à vos besoins.</p>
                    <p>Nous offrons également des options de suivi de cargaison en temps réel et une communication transparente pour vous tenir informé de l’emplacement et de l’état de votre cargaison à tout moment. En outre, nous offrons des services de chargement et de déchargement pour vous aider à économiser du temps et des efforts, en vous permettant de vous concentrer sur votre entreprise.
                    </p>

                    <h3 class="footer-heading">Nos réseaux sociaux</h3>
                    <div class="social-icons">
                        <a href="https://sn.linkedin.com/in/william-l-seck-4070279b"><i class="icofont-facebook"></i></a>
                        <a href="https://sn.linkedin.com/in/william-l-seck-4070279b"><i class="icofont-twitter"></i></a>
                        <a href="https://sn.linkedin.com/in/william-l-seck-4070279b"><i class="icofont-whatsapp"></i></a>
                        <a href="https://sn.linkedin.com/in/william-l-seck-4070279b"><i class="icofont-google-plus"></i></a>
                    </div>
                </div>
                <!-- Column First -->

                <!-- Column Second -->
                <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">
                    <h3 class="footer-heading">Recent Post</h3>
                    <div class="blog-list-footer">
                        <ul class="list-unstyled">
                       <?php
               
                $sql = "SELECT * FROM posts ORDER BY date_creation DESC LIMIT 2";
        
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
                            <li>
                                <div class="media">
                                    <div class="post-thumb">
                                        <img src="assets/images/<?php echo $image_name; ?>" alt="" class="rounded-circle" style="width: 70px; height: 70px;">
                                    </div>
                                    <div class="media-body post-text">
                                        <h5 class="mb-3 h5-md"><a href="#"><?php echo $titre; ?></a></h5>
                                        <p><?php echo $contenu; ?></p>

                                        <div class="comment-box">
                                            <span><i class="icofont-ui-calendar"></i><?php echo $date_creation; ?></span>
                                            <span><a href="#"><i class="icofont-speech-comments"></i> 25</a></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php 
                 }
                }
    
        ?>
                        </ul>

                    </div>
                </div>
                <!-- Column Second -->

                <!-- Column Third -->
                <div class="col-lg-4 col-md-12 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.4s">
                    <h3 class="footer-heading">Our Photostream</h3>
                    <ul id="basicuse" class="photo-thumbs"></ul>
                </div>
                <!-- Column Third -->

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
                        Designed by <a href="#" rel="nofollow">AliouneTHIAM</a> © 2023 All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>