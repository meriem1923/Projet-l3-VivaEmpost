<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="DES.CSS">
    <title>Cv d'employeur</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=font-effect-fire-animation">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    
</head>
<body>
   
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "projet";
$conn = mysqli_connect($host, $username, $password, $database);
if ($conn) {
    echo "connected";
} else { 
    echo "failed: " . mysqli_connect_error();
    exit;
}

$id_emp = isset($_GET['id']) ? intval($_GET['id']) : 0;
$post = isset($_GET['id2']) ? $_GET['id2'] : '';
$req = mysqli_query($conn, "SELECT * FROM employeur WHERE Id_emp=$id_emp");
$data = mysqli_fetch_array($req);  

// معالجة الطلبات القادمة من الأزرار
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Accepter'])) {
        $new_etat = 'Accepter';
    } elseif (isset($_POST['Archive'])) {
        $new_etat = 'Archive';
    }

    if (isset($new_etat)) {
        $update_req = mysqli_prepare($conn, "UPDATE postuler SET etat=? WHERE Id_emp=? AND post=?");
        mysqli_stmt_bind_param($update_req, 'sis', $new_etat, $id_emp, $post);
        mysqli_stmt_execute($update_req);
        mysqli_stmt_close($update_req);
    }
}

?>
    <div class="container">
        <div class="box">

            <div class="left-column">
               <!-- <img src="C:/Users/user/OneDrive/Desktop/MeriemWS/i.jpg" alt="Image d'employeur "> -->
               <img src='<?php echo $data['image']; ?>' alt="Image employeur ">
                <span class="description">
                    <strong>Description :</strong>
                    <p><br><?php echo $data['nous_contacter']; ?><br> <br></p>
                </span>
                
<?php
$req = mysqli_query($conn, "SELECT * FROM postuler WHERE Id_emp=$id_emp AND post='$post'");                

if (mysqli_num_rows($req) == 0) {
    echo "Il n'y a pas post ajouter !";
} else {
    while ($row = mysqli_fetch_assoc($req)) {
        echo "
        <form method='post' action=''>
            <input type='text' value='" . $row['etat'] . "' readonly>
            <input type='text' value='" . $row['Id_emp'] . "' readonly>
            <input type='text' value='" . $row['user'] . "' readonly>
            <input type='text' value='" . $row['post'] . "' readonly>
            <button type='submit' name='Archive'>Archive</button>
            <button type='submit' name='Accepter'>Accepter</button>
        </form>";
    }
}
?>
                
            </div>
  
            <div class="right-column">
                <div class="Titre">
                    <h1><?php echo $data['user']; ?></h1>
                </div>
                <span style="display: inline-block;">
                    <strong>Nom : </strong><?php echo $data['Nom']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Prenom :</strong><?php echo $data['Prenom']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Date de naissance : </strong><?php echo $data['Date_naissance']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Sexe : </strong><?php echo $data['Sexe']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Taille : </strong><?php echo $data['Taille']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Situation familiale : </strong><?php echo $data['Situation_fam']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Address: </strong><?php echo $data['addresse']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Numéro de Téléphone : </strong><?php echo $data['Num_telp']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Email : </strong><?php echo $data['Email']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Diplome : </strong><?php echo $data['Diplome']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Langue maîtrisée : </strong><?php echo $data['Langue_metrise']; ?>
                </span>
            </div>
        </div>
    </div>
</body>
</html>
