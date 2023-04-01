

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-cerulean.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php
	include('partial/menu.php');
?>	
	<div class="main content">
		<div class="wrapper">
			<h1>Add projet</h1>
			<br/>
			<?php
				if (isset($_SESSION['add'])) {
					echo $_SESSION['add'];
					unset($_SESSION['add']);
				}

				if (isset($_SESSION['opload'])) {
					echo $_SESSION['opload'];
					unset($_SESSION['opload']);
				}

			?>

			<br/><br/>

            <form action=" " method="POST" enctype="multipart/form-data">
    <table class="tbl-30">
        <tr>
            <td>chef_de_projet</td>
            <TD>
                <input type="text" name="chef_de_projet" placeholder="Entrer Votre client"><br/><br/>
            </td>
        </tr>

        <tr>
            <td>client</td>
            <TD>
                <input type="text" name="client" placeholder="Entrer Votre client"><br/><br/>
            </td>
        </tr>

        <tr>
            <td>gesCategorie</td>
            <TD>
                <input type="text" name="gesCategorie" placeholder="Entrer Votre client"><br/><br/>
            </td>
        </tr>

        <tr>
            <td>date</td>
            <TD>
                <input type="date" name="date" placeholder="Entrer Votre client"><br/><br/>
            </td>
        </tr>

        <tr>
            <td>statue</td>
            <TD>
                <input type="text" name="statue" placeholder="Entrer Votre client"><br/><br/>
            </td>
        </tr>

        <tr>
            <td>contenu</td>
            <TD>
                <input type="text" name="contenu" placeholder="Entrer Votre client"><br/><br/>
            </td>
        </tr>

        <tr>
            <td>Sélectionnez Images:</td>
            <TD>
                <input type="file" name="image[]" style="width:200px;" multiple> 
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" id="submit" value="Add Projet" class="btn btn-secondary">
            </td>
        </tr>
    </table>
</form>
			<?php
				if (isset($_POST['submit'])) {
					$chef_de_projet = $_POST['chef_de_projet'];
					$client = $_POST['client'];
                    $gesCategorie = $_POST['gesCategorie'];
                    $date = $_POST['date'];
                    $statue = $_POST['statue'];
                    $contenu = $_POST['contenu'];
					
					
				
                    if (isset($_FILES['image'])) {
                        $total_files = count($_FILES['image']['name']);
                      
                        for ($i = 0; $i < $total_files; $i++) {
                          $image_name = $_FILES['image']['name'][$i];
                          $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                          $image_name = "tarification_" . rand(000, 999) . '.' . $ext;
                      
                          $source_path = $_FILES['image']['tmp_name'][$i];
                          $destination_path = "../assets/images/portfolio/" . $image_name;
                      
                          $upload = move_uploaded_file($source_path, $destination_path);
                      
                          if (!$upload) {
                            $_SESSION['opload'] = "Error uploading file(s)";
                            header("Location: " . SITEURL . "admin/manage projet.php");
                            exit;
                          }
                      
                          // Ajoutez le nom de l'image à un tableau pour chaque fichier téléchargé
                          $images[] = $image_name;
                        }
                      }
                      else {
                        $images = array();
                      }
				
                      $sql = "INSERT INTO projet SET
                      chef_de_projet = '$chef_de_projet',
                      client = '$client',
                      gesCategorie = '$gesCategorie',
                      date = '$date',
                      statue = '$statue',
                      contenu = '$contenu',
                      image_name = '" . implode(",", $images) . "'";
                    
				
					$res = mysqli_query($conn,$sql);
				
					if ($res == true) {
						$_SESSION['add'] = "success";
						header("location:".SITEURL."admin/manage projet.php"); 
					}
					else{
						$_SESSION['add'] = "no success";
						header("location:".SITEURL."admin/manage projet.php"); 
					}
				}
				
				?>



<?php  include('partial/footer.php');?>

</body>
</html>
