<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="descr.CSS">
    <title>Modifier l'employeur</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=font-effect-fire-animation">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>
<?php
    $host = "localhost";
    $bduser = "root";
    $bdpass = "";
    $bddata = "projet";
    $conn = mysqli_connect($host, $bduser, $bdpass, $bddata);
    $ID = $_GET['id'];
   
    if (!$conn) {
        die("Échec de la connexion : " . mysqli_connect_error());
    }
   
    $up = mysqli_query($conn,"SELECT * FROM employeur WHERE Id_emp =$ID");
    $data = mysqli_fetch_array($up);
    
    if(isset($_POST['update'])) {
        // Assurez-vous que les données du formulaire sont envoyées et non vides avant de les utiliser
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
        $password = $_POST['password'];
        $nous_contacter = $_POST['nous_contacter'];

        // Effectuer la mise à jour des données dans la base de données
        $update_query = "UPDATE employeur SET Nom='$Nom', Prenom='$Prenom', Date_naissance='$Date_naissance', Langue_metrise='$Langue_metrise', addresse='$addresse', Email='$Email', Num_telp='$Num_telp', Diplome='$Diplome', Sexe='$Sexe', Taille='$Taille', Situation_fam='$Situation_fam', user='$user', password='$password', nous_contacter='$nous_contacter' WHERE Id_emp=$ID";
        
        if(mysqli_query($conn, $update_query)) {
            header("location:DESVV2.php?id=$ID" );
        } else {
            echo "Erreur lors de la mise à jour : " . mysqli_error($conn);
        }
    }
?>
<center>
    <div class="main">
        <form method="post" enctype="multipart/form-data">
            <h2>Mon CV</h2>
            <img src="../image/loading-process-update-system-icon-260nw-1492575584.webp" alt="" width="450px">
            <input type="hidden" name="Id_emp" value="<?php echo $data['Id_emp']; ?>">
            <p>Nom :</p>
            <input type="text" name='Nom' value="<?php echo $data['Nom']; ?>">
            <br>
            <p>Prenom :</p>
            <input type="text" name='Prenom' value="<?php echo $data['Prenom']; ?>">
            <br>
            <p>Date_naissance :</p>
            <input type="text" name='Date_naissance' value="<?php echo $data['Date_naissance']; ?>">
            <br>
            <p>Langue_metrise :</p>
            <input type="text" name='Langue_metrise' value="<?php echo $data['Langue_metrise']; ?>">
            <br>
            <p>addresse :</p>
            <input type="text" name='addresse' value="<?php echo $data['addresse']; ?>">
            <br>
            <p>Email :</p>
            <input type="text" name='Email' value="<?php echo $data['Email']; ?>">
            <br>
            <p>Num_telp :</p>
            <input type="text" name='Num_telp' value="<?php echo $data['Num_telp']; ?>">
            <br>
            <p>Diplome :</p>
            <input type="text" name='Diplome' value="<?php echo $data['Diplome']; ?>">
            <br>
            <p>Sexe :</p>
            <input type="text" name='Sexe' value="<?php echo $data['Sexe']; ?>">
            <br>
            <p>Taille :</p>
            <input type="text" name='Taille' value="<?php echo $data['Taille']; ?>">
            <br>
            <p>Situation_fam :</p>
            <input type="text" name='Situation_fam' value="<?php echo $data['Situation_fam']; ?>">
            <br>
            <p>user :</p>
            <input type="" name='user' value="<?php echo $data['user']; ?>">
            <br>
            <p>password :</p>
            <input type="" name='password' value="<?php echo $data['password']; ?>">
            <br>
            <p>Description :</p>
            <textarea name="nous_contacter" rows="4" cols="50"><?php echo $data['nous_contacter']; ?></textarea>
            <br>
            
            <!-- Ajoutez ici les autres champs du formulaire avec leurs valeurs préremplies -->
            <button name ='update' type='submit'> Enregistrer les modifications</button>
        </form>
    </div>
</center>
</body>
</html>
