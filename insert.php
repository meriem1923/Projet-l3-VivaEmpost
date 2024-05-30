<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "projet";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

if (isset($_POST['Submit'])) {
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Date_naissance = $_POST['Date_naissance'];
    $Langue_metrise = $_POST['Langue_metrise'];
    $addresse = $_POST['addresse'];
    $Email = $_POST['Email'];
    $Num_telp = $_POST['Num_telp'];
    $Diplome = $_POST['Diplome'];
    $Sexe = $_POST['Sexe'];
    $Taille = $_POST['Taille'];
    $Situation_fam = $_POST['Situation_fam'];
    $user = $_POST['user'];
    $password_user = $_POST['password'];
    $nous_contacter = $_POST['nous_contacter'];

    $image_up = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_up = "images/" . $image_name;

        if (move_uploaded_file($image_location, $image_up)) {
            echo "File uploaded successfully.";
            header('location: aceuille1.php');
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "No file uploaded or an error occurred during upload.";
    }

    $date = "INSERT INTO employeur (Nom, Prenom, Date_naissance, Langue_metrise, addresse, Email, Num_telp, Diplome, Sexe, Taille, Situation_fam, user, password, nous_contacter, image) 
            VALUES ('$Nom', '$Prenom', '$Date_naissance', '$Langue_metrise', '$addresse', '$Email', '$Num_telp', '$Diplome', '$Sexe', '$Taille', '$Situation_fam', '$user', '$password_user', '$nous_contacter', '$image_up')";

    $check = mysqli_query($conn, $date);
    if ($check) {
        echo "Data sent";
    } else {
        echo "Data not sent: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
