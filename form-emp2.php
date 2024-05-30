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
    $Nom = mysqli_real_escape_string($conn, $_POST['Nom']);
    $Prenom = mysqli_real_escape_string($conn, $_POST['Prenom']);
    $Date_naissance = mysqli_real_escape_string($conn, $_POST['Date_naissance']);
    $Langue_metrise = mysqli_real_escape_string($conn, $_POST['Langue_metrise']);
    $addresse = mysqli_real_escape_string($conn, $_POST['addresse']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Num_telp = mysqli_real_escape_string($conn, $_POST['Num_telp']);
    $Diplome = mysqli_real_escape_string($conn, $_POST['Diplome']);
    $Sexe = mysqli_real_escape_string($conn, $_POST['Sexe']);
    $Taille = mysqli_real_escape_string($conn, $_POST['Taille']);
    $Situation_fam = mysqli_real_escape_string($conn, $_POST['Situation_fam']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $password_user = mysqli_real_escape_string($conn, $_POST['password']);
    $nous_contacter = mysqli_real_escape_string($conn, $_POST['nous_contacter']);

    $image_up = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_up = "images/" . $image_name;

        if (move_uploaded_file($image_location, $image_up)) {
            echo "File uploaded successfully.";
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
