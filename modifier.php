<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "projet";
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("ID non fourni");
}

$req = mysqli_query($conn, "SELECT * FROM post WHERE id = $id");
if (mysqli_num_rows($req) == 1) {
    $row = mysqli_fetch_assoc($req);
} else {
    die("Publication introuvable");
}

if (isset($_POST['Submit'])) {
    $Titre = $_POST['Titre'];
    $Description = $_POST['Description'];
    $Sallaire = $_POST['Sallaire'];
    $Heure = $_POST['Heure'];
    $Competence = $_POST['Competence'];
    $Diplome = $_POST['Diplome'];
    $experience = $_POST['experience'];
    $Sexe = $_POST['Sexe'];
    $Taille = $_POST['Taille'];
    $Age = $_POST['Age'];
    $Type_contrat = $_POST['Type_contrat'];
    $Date = $_POST['Date'];
    $Categories = $_POST['Categories'];

    // Requête de modification
    $query = "UPDATE post SET 
        Titre = '$Titre', 
        Description = '$Description', 
        Sallaire = '$Sallaire',
        Heure = '$Heure', 
        Competence = '$Competence', 
        Diplome = '$Diplome', 
        experience = '$experience', 
        Sexe = '$Sexe', 
        Taille = '$Taille', 
        Age = '$Age', 
        Type_contrat = '$Type_contrat', 
        Date = '$Date', 
        Categories = '$Categories' 
        WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: gestion-post.php");
        exit();
    } else {
        $message = "Erreur : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <style>
        /* Add your CSS here */
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        * {
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            height: 120svh;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 10px;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(115deg, #b1c8fa 10%, #fabbbb 90%);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            max-width: 800px;
            background: #fff;
            width: 700px;
            padding: 25px 40px 10px 40px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            top: 1%;
            position: relative;
        }
        .container .text {
            text-align: center;
            font-size: 41px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            background: -webkit-linear-gradient(right, #0022ff, #ea0101, #0022ff, #ea0101);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .container form {
            padding: 30px 0 0 0;
        }
        .container form .form-row {
            display: flex;
            margin: 32px 0;
        }
        form .form-row .input-data {
            width: 100%;
            height: 40px;
            margin: 0 20px;
            position: relative;
        }
        form .form-row .textarea {
            height: 70px;
        }
        .input-data input,
        .textarea textarea {
            display: block;
            width: 100%;
            height: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid rgba(0, 0, 0, 0.12);
        }
        .input-data input:focus ~ label, 
        .textarea textarea:focus ~ label,
        .input-data input:valid ~ label, 
        .textarea textarea:valid ~ label {
            transform: translateY(-20px);
            font-size: 14px;
            color: #3498db;
        }
        .textarea textarea {
            resize: none;
            padding-top: 10px;
        }
        .input-data label {
            position: absolute;
            pointer-events: none;
            bottom: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .textarea label {
            width: 100%;
            bottom: 40px;
            background: #fff;
        }
        .input-data .underline {
            position: absolute;
            bottom: 0;
            height: 2px;
            width: 100%;
        }
        .input-data .underline:before {
            position: absolute;
            content: "";
            height: 2px;
            width: 100%;
            background: #3498db;
            transform: scaleX(0);
            transform-origin: center;
            transition: transform 0.3s ease;
        }
        .input-data input:focus ~ .underline:before,
        .input-data input:valid ~ .underline:before,
        .textarea textarea:focus ~ .underline:before,
        .textarea textarea:valid ~ .underline:before {
            transform: scale(1);
        }
        .submit-btn .input-data {
            overflow: hidden;
            height: 45px!important;
            width: 25%!important;
        }
        .submit-btn .input-data .inner {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            background: -webkit-linear-gradient(right, #6778eb, #f06969, #6778eb, #f06969);
            transition: all 0.4s;
        }
        .submit-btn .input-data:hover .inner {
            left: 0;
        }
        .submit-btn .input-data input {
            background: none;
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            position: relative;
            z-index: 2;
        }

        @media (max-width: 700px) {
            .container .text {
                font-size: 30px;
            }
            .container form {
                padding: 10px 0 0 0;
            }
            .container form .form-row {
                display: block;
            }
            form .form-row .input-data {
                margin: 35px 0!important;
            }
            .submit-btn .input-data {
                width: 40%!important;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Modifier</h2>
    <p class="erreur_message">
       <?php 
          if (isset($message)) {
              echo $message;
          }
       ?>
    </p>
    <form action="" method="post">
        <div class="form-row">  
            <div class="input-data">   
                <input type="text" name="Titre" id="Titre" value="<?php echo htmlspecialchars($row['Titre']); ?>"> 
                <div class="underline"></div> 
                <label for="Titre">Titre</label>    
            </div>
            <div class="input-data">
                <input type="text" name="Sallaire" id="Sallaire" value="<?php echo htmlspecialchars($row['Sallaire']); ?>">
                <div class="underline"></div> 
                <label for="Sallaire">Sallaire</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="text" name="Heure" id="Heure" value="<?php echo htmlspecialchars($row['Heure']); ?>">
                <div class="underline"></div>  
                <label for="Heure">Heure</label>
            </div>
            <div class="input-data">
                <input type="text" name="Competence" id="Competence" value="<?php echo htmlspecialchars($row['Competence']); ?>">
                <div class="underline"></div>  
                <label for="Competence">Competence</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="text" name="Diplome" id="Diplome" value="<?php echo htmlspecialchars($row['Diplome']); ?>">
                <div class="underline"></div>   
                <label for="Diplome">Diplome</label>
            </div>
            <div class="input-data">
                <input type="text" name="experience" id="experience" value="<?php echo htmlspecialchars($row['experience']); ?>">
                <div class="underline"></div>   
                <label for="experience">experience</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="text" name="Sexe" id="Sexe" value="<?php echo htmlspecialchars($row['Sexe']); ?>">
                <div class="underline"></div>     
                <label for="Sexe">Sexe</label>
            </div> 
            <div class="input-data">
                <input type="text" name="Taille" id="Taille" value="<?php echo htmlspecialchars($row['Taille']); ?>">
                <div class="underline"></div>    
                <label for="Taille">Taille</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="text" name="Age" id="Age" value="<?php echo htmlspecialchars($row['Age']); ?>">
                <div class="underline"></div>  
                <label for="Age">Age</label>
            </div>
            <div class="input-data">
                <input type="text" name="Type_contrat" id="Type_contrat" value="<?php echo htmlspecialchars($row['Type_contrat']); ?>">
                <div class="underline"></div>   
                <label for="Type_contrat">Type_contrat</label>
            </div>
        </div>
        
        <div class="form-row">
            <div class="input-data">
                <input type="text" name="Date" id="Date" value="<?php echo htmlspecialchars($row['Date']); ?>">
                <div class="underline"></div>  
                <label for="Date">Date</label>
            </div>
            <div class="input-data">
                <input type="text" name="Categories" id="Categories" value="<?php echo htmlspecialchars($row['Categories']); ?>">
                <div class="underline"></div>   
                <label for="Categories">Categories</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data textarea">
                <textarea name="Description" rows="8" cols="80"><?php echo htmlspecialchars($row['Description']); ?></textarea>
                <br/>
                <div class="underline"></div>   
                <label for="Description">Description</label>
                <div class="form-row submit-btn" style="margin-bottom: 10px;">
                    <div class="input-data">
                        <div class="inner"></div>
                        <input type="Submit" value="Submit" name="Submit">
                    </div>
                </div>  
            </div>
        </div>
    </form>
</div>
</body>
</html>
