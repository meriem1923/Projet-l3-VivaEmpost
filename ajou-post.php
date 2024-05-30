<?php 
// session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "projet";
$conn = mysqli_connect($host, $username, $password, $database);
if ($conn) {
    // Connexion réussie
} else { 
    echo "failed";
}

if (isset($_POST['Submit'])) {    
    $Titre = mysqli_real_escape_string($conn, $_POST['Titre']);     
    $Description = mysqli_real_escape_string($conn, $_POST['Description']);
    $Sallaire = mysqli_real_escape_string($conn, $_POST['Sallaire']);
    $Heure = mysqli_real_escape_string($conn, $_POST['Heure']);
    $Competence = mysqli_real_escape_string($conn, $_POST['Competence']);
    $Diplome = mysqli_real_escape_string($conn, $_POST['Diplome']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);
    $Sexe = mysqli_real_escape_string($conn, $_POST['Sexe']);
    $Taille = mysqli_real_escape_string($conn, $_POST['Taille']);
    $Age = mysqli_real_escape_string($conn, $_POST['Age']);
    $Type_contrat = mysqli_real_escape_string($conn, $_POST['Type_contrat']);
    $Date = mysqli_real_escape_string($conn, $_POST['Date']);
    $Categories = mysqli_real_escape_string($conn, $_POST['Categories']);

    $sql = "INSERT INTO post (Titre, Description, Sallaire, Heure, Competence, Diplome, experience, Sexe, Taille, Age, Type_contrat, Date, Categories) 
            VALUES ('$Titre', '$Description', '$Sallaire', '$Heure', '$Competence', '$Diplome', '$experience', '$Sexe', '$Taille', '$Age', '$Type_contrat', '$Date', '$Categories')";
    $check = mysqli_query($conn, $sql);
    if ($check) {
        ;
    } else {
        echo "Data not sent: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <style>
                 @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        body{
        height: 190svh ;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(115deg, #b1c8fa 10%, #fabbbb 90%);
        background-size: cover; /* Set the desired size */
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
        dialog {
        top : 45%;
        left : 0%;
        margin: 10% auto;
        width: 70%;
        height: 150px;
        max-width: 300px;
        background-color: #09436a;
        padding: 34px;
        border: 10px;
        border-color: #343131;
        border-radius: 25px;
        }
        dialog > p {
            text-align: center;
            margin: 0;
        }
        dialog > p:first-of-type {
            margin: 0 auto 20px;
            font-size: 18px;
            font-weight: 300;
        }


        .container{
        max-width: 850px;
        background: #fff;
        width: 800px;
        padding: 25px 40px 10px 40px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        top: 1%;
        position: relative;
        }
        .container .text{
        text-align: center;
        font-size: 41px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        background: -webkit-linear-gradient(right, #0022ff, #ea0101, #0022ff, #ea0101);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        }
        .container form{
        padding: 30px 0 0 0;
        }
        .container form .form-row{
        display: flex;
        margin: 32px 0;
        }
        form .form-row .input-data{
        width: 100%;
        height: 40px;
        margin: 0 20px;
        position: relative;
        }
        form .form-row .textarea{
        height: 70px;
        }
        .input-data input,
        .textarea textarea{
        display: block;
        width: 100%;
        height: 100%;
        border: none;
        font-size: 17px;
        border-bottom: 2px solid rgba(0,0,0, 0.12);
        }
        .input-data input:focus ~ label, .textarea textarea:focus ~ label,
        .input-data input:valid ~ label, .textarea textarea:valid ~ label{
        transform: translateY(-20px);
        font-size: 14px;
        color: #3498db;
        }
        .textarea textarea{
        resize: none;
        padding-top: 10px;
        }
        .input-data label{
        position: absolute;
        pointer-events: none;
        bottom: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
        }
        .textarea label{
        width: 100%;
        bottom: 40px;
        background: #fff;
        }
        .input-data .underline{
        position: absolute;
        bottom: 0;
        height: 2px;
        width: 100%;
        }
        .input-data .underline:before{
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
        .textarea textarea:valid ~ .underline:before{
        transform: scale(1);
        }
        .submit-btn .input-data{
        overflow: hidden;
        height: 45px!important;
        width: 25%!important;
        }
        .submit-btn .input-data .inner{
        height: 100%;
        width: 300%;
        position: absolute;
        left: -100%;
        background: -webkit-linear-gradient(right,  #0022ff, #ea0101, #0022ff, #ea0101);
        transition: all 0.4s;
        }
        .submit-btn .input-data:hover .inner{
        left: 0;
        }
        .submit-btn .input-data input{
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
        .container .text{
            font-size: 30px;
        }
        .container form{
            padding: 10px 0 0 0;
        }
        .container form .form-row{
            display: block;
        }
        form .form-row .input-data{
            margin: 35px 0!important;
        }
        .submit-btn .input-data{
            width: 40%!important;
        }
        }
    </style>
</head>
<body>
        <dialog id="myDialog1" class="modal">
            <img src="ok.png" alt="Check" style="left: 40%; margin-bottom: 5px; position: relative; width: 40px; height: 40px;">
            <p>Les données sont envoyées avec succès.</p>
        </dialog>
    <div class="container">
        <a href="gestion-post.php"><span class="material-symbols-outlined"></span>OK</a>
        <h2>inserer</h2>
        <p class="erreur_message">
           <?php 
              if (isset($message)) {
                  echo $message;
              }
           ?>
        <form action="" method="POST">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Titre" id="Titre" required>
                    <div class="underline"></div>
                    <label for="Titre">Titre</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Sallaire" id="Sallaire" required>
                    <div class="underline"></div>
                    <label for="Sallaire">Sallaire</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Heure" id="Heure" required>
                    <div class="underline"></div>
                    <label for="Heure">Heure</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Competence" id="Competence" required>
                    <div class="underline"></div>
                    <label for="Competence">Compétence</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Diplome" id="Diplome" required>
                    <div class="underline"></div>
                    <label for="Diplome">Diplôme</label>
                </div>
                <div class="input-data">
                    <input type="text" name="experience" id="experience" required>
                    <div class="underline"></div>
                    <label for="experience">Expérience</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Sexe" id="Sexe" required>
                    <div class="underline"></div>
                    <label for="Sexe">Sexe</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Taille" id="Taille" required>
                    <div class="underline"></div>
                    <label for="Taille">Taille</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="Age" id="Age" required>
                    <div class="underline"></div>
                    <label for="Age">Âge</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Type_contrat" id="Type_contrat" required>
                    <div class="underline"></div>
                    <label for="Type_contrat">Type de contrat</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data">
                    <input type="date" name="Date" id="Date" required>
                    <div class="underline"></div>
                    <label for="Date">Date</label>
                </div>
                <div class="input-data">
                    <input type="text" name="Categories" id="Categories" required>
                    <div class="underline"></div>
                    <label for="Categories">Catégories</label>
                </div>
            </div>

            <div class="form-row">
                <div class="input-data textarea">
                    <textarea name="Description" rows="8" cols="80" required></textarea>
                    <div class="underline"></div>
                    <label for="Description">Description</label>
                </div>
            </div>
            
            <div class="form-row submit-btn" style="margin-bottom: 10px;">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="Submit" name="Submit" id="mybtn">
                </div>
                <script>
                        var btn = document.getElementById("mybtn");
                        var dialog = document.getElementById("myDialog1");

                        btn.onclick = function() {
                            dialog1.show();
                            setTimeout(function() {
                                dialog1.close();
                            }, 2000); 
                        };
                </script>
            </div>
        </form>
    </div>
</body>
</html>
