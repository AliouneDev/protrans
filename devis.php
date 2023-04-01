<section class="wide-tb-100 bg-fixed free-quote free-quote-alt pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-7">
                        <div class="free-quote-form">
                            <!-- Heading Main -->
                            <h1 class="heading-main mb-4">
                                <span>Demander un </span>
                                Devis gratuit
                            </h1>
                            <!-- Heading Main -->

                            <!-- Free Quote From -->
                            <form action="#" method="post" novalidate="novalidate" class="col rounded-field">
                                <div class="form-row mb-4">
                                    <input type="text" name="name" class="form-control" placeholder="Votre nom">
                                </div>
                                <div class="form-row mb-4">
                                    <input type="text" name="email" class="form-control" placeholder="Messagerie Electronique">
                                </div>
                                <div class="form-row mb-4">
                                    <select title="Please choose a package" required="" name="transport_type"
                                        class="form-control wide" aria-required="true" aria-invalid="false">
                                        <option value="">Typede Transport</option>
                                        <option value="Type 1">Type 1</option>
                                        <option value="Type 2">Type 2</option>
                                        <option value="Type 3">Type 3</option>
                                        <option value="Type 4">Type 4</option>
                                    </select>
                                </div>
                                <div class="form-row mb-4">
                                    <select title="Please choose a package" required="" name="freight_type"
                                        class="form-control wide" aria-required="true" aria-invalid="false">
                                        <option value="">Type de fret</option>
                                        <option value="Type 1">Type 1</option>
                                        <option value="Type 2">Type 2</option>
                                        <option value="Type 3">Type 3</option>
                                        <option value="Type 4">Type 4</option>
                                    </select>
                                </div>
                                <div class="form-row mb-4">
                                    <textarea rows="7" placeholder="message" class="form-control"></textarea>
                                </div>
                                <div class="form-row text-center">
                                    <button type="submit" name="submit" class="form-btn mx-auto btn-theme bg-orange">Submit Now <i
                                            class="icofont-rounded-right"></i></button>
                                </div>
                            </form>
                            <!-- Free Quote From -->
                        </div>
                    </div>
                </div>
            </div>
            <?php
				if (isset($_POST['submit'])) {
					$name = $_POST['name'];
					$email = $_POST['email'];
					$transport_type = $_POST['transport_type'];
					$freight_type= $_POST['freight_type'];
                    $message= $_POST['message']; 


                    $sql = "INSERT INTO devis SET
						name = '$name',
						email = '$email',
						transport_type = '$transport_type',
						freight_type= '$freight_type',
                        message = '$message'
						
					";
				
					$res = mysqli_query($conn,$sql);
				
					if ($res == true) {
						$_SESSION['add'] = "Devis bien envoyé";
						header("location:".SITEURL."index-2.php"); 
					}
					else{
						$_SESSION['add'] = "no success";
						header("location:".SITEURL."index-2.php"); 
					}
				}
				
				?>
        </section>