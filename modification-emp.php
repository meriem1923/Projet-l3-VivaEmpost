<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
$id2 = isset($_GET['id2']) ? $_GET['id2'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier l'employeur</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=font-effect-fire-animation">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 240vh;
        }

        .main {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 600px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        img {
            display: block;
            margin: 0 auto 20px;
            max-width: 100%;
            border-radius: 10px;
        }

        p {
            margin: 10px 0 5px;
            font-weight: 500;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .main {
                width: 90%;
            }

            h2 {
                font-size: 20px;
            }

            button {
                font-size: 14px;
            }
        }
    </style>
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
    
    if (isset($_POST['update'])) {
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
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $nous_contacter = mysqli_real_escape_string($conn, $_POST['nous_contacter']);


        $update_query = "UPDATE employeur SET Nom='$Nom', Prenom='$Prenom', Date_naissance='$Date_naissance', Langue_metrise='$Langue_metrise', addresse='$addresse', Email='$Email', Num_telp='$Num_telp', Diplome='$Diplome', Sexe='$Sexe', Taille='$Taille', Situation_fam='$Situation_fam', user='$user', password='$password', nous_contacter='$nous_contacter' WHERE Id_emp=$ID";
        
        if(mysqli_query($conn, $update_query)) {
            header("location:pageProfile.php?id=$ID" );
            exit();
        } else {
            echo "Erreur lors de la mise à jour : " . mysqli_error($conn);
        }
    }
?>

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
            <textarea name="nous_contacter" rows="9" cols="50"><?php echo $data['nous_contacter']; ?></textarea>
            <br>
            
            <!-- Ajoutez ici les autres champs du formulaire avec leurs valeurs préremplies -->
            <button name ='update' type='submit'> Enregistrer les modifications</button>
        </form>
    </div>

</body>
</html>
