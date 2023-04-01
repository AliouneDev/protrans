<?php  include ('Config/Constants.php');
if (isset($_POST["like"])) {
    $post_id = $_POST["id"];
    
    // Vérification si l'utilisateur a déjà aimé le post
    $sql_check_like = "SELECT * FROM likes WHERE post_id = $post_id AND user_id = $user_id";
    $result_check_like = mysqli_query($conn, $sql_check_like);
    
    if (mysqli_num_rows($result_check_like) == 0) {
        // Insertion du like dans la table "likes"
        $sql_insert_like = "INSERT INTO likes (post_id, user_id) VALUES ($post_id, $user_id)";
        mysqli_query($conn, $sql_insert_like);
    }
}
?>