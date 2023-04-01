<section class="wide-tb-100 bg-fixed clients-bg pos-rel">
    <div class="bg-overlay blue opacity-80"></div>
    <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
                <h1 class="heading-main">
                    <span>CERTAINS DE NOS</span>
                    Clients
                </h1>
            </div>
            <!-- Heading Main -->

            <div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
                <div class="owl-carousel owl-theme" id="home-clients">

                    <?php 
                    $sql = "SELECT * FROM tbl_client";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $nom_client = $row["nom_client"];
                            $image_name = $row["image_name"];
                    ?>

                    <!-- Client Logo -->
                    <div class="item">
                        <img src="assets/images/clients/<?php echo $image_name;?> " alt="<?php echo $nom_client;?>" style="width: 40px;
    height: 100px;">
                    </div>
                    <!-- Client Logo -->

                    <?php 
                        }
                    } else {
                        echo "No clients found.";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>