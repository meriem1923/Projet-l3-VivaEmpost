<?php
$host = "localhost";
$bduser = "root";
$bdpass = "";
$bddata = "projet";
$conn = mysqli_connect($host, $bduser, $bdpass, $bddata);

if (!$conn) {
    echo "La connexion a échoué : " . mysqli_connect_error();
}

$error = ""; 

if (isset($_POST['Submit'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    
    $sql = "SELECT Id_emp, password FROM employeur WHERE user='$user'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Erreur dans la requête : " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $resultPassword = $row['password'];
        $userId = $row['Id_emp']; 

        if ($password == $resultPassword) {
            header("Location: employeur.php?id=$userId"); 
            exit(); 
        } else {
            $error = 'Mot de passe incorrect !';
        }
    } else {
        $error = 'Utilisateur non trouvé !';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page aceuille</title>
        <?php
            if (!empty($error)) {
                echo '<script type="text/javascript">';
                echo 'alert("' . $error . '");';
                echo '</script>';
            }
        ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=font-effect-fire-animation">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'poppins',sans-serif;
            }  
 
            ul, li {  
                list-style: none;
                padding: 0;
                margin: 0;
            }

            body {
                height: 220svh;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-image: linear-gradient(rgba(0,0,0,0.432), rgba(0, 0, 0, 0.432)),url('vivamall2.jpg');
                background-size: cover;
                background-color: #ffffff;
                background-repeat: no-repeat;
                
            }
            dialog .modal .close-button {
                position: absolute;
                top: 90%;
                border: 0;
                border-radius: 8px;
                padding: 7px 32px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
                font-weight: 600;
                background: rgb(0, 149, 246);
                cursor: pointer;
                color: #FFF;
                transition: all 240ms linear;
            }
            button:hover {
                filter: brightness(0.8);
            }
            button:active {
                transform: scale(0.9);
            }
            dialog {
                margin: 10% auto;
                width: 100%;
                height: 400px;
                max-width: 500px;
                background-color: #fff;
                padding-left: 25px;
                padding-right: 25px;
                padding-top: 20px;
                padding-bottom: 10px;
                border: 1px;
                border-radius: 10px;
            }
            dialog > p {
                color: #000;
                line-height: 1.5;
                font-family: Arial, sans-serif;
                font-style: italic;
                font-weight: bold;
                text-align: center;
                margin: 0;
            }
            dialog >p:first-child{
                position: relative;
                align-content: center;
                margin: 0 auto 20px;
                font-size: 32px;
                font-weight: 600;
            }
            dialog > button {
                position: absolute;
                margin-top: 15px;
            }

            h1 {
                font-size: 90px;
                text-align: center;
                font-weight: bold;
                font-style: italic;
                color: rgb(255, 218, 218);
                text-shadow: 3px 3px 4px rgb(143, 127, 127);
                position: relative;
                top: 3%;
            }

            .title {
                position: relative;
                height: 50px; 
                opacity: 1;
                transition: opacity 1s ease; 
                animation-delay: 2s;
            }
            
            .header {
                background-color: transparent;
                background-size: auto;
                background-repeat: no-repeat;
                height: 63px;
                text-align: center;
            }

            .logo img {
                position: relative;
                display: flex;
                width: 80px; 
                height: 70px;
                top: -3px;
            }

            .menu {
                
                display: inline-flex;
                float: right;
                justify-content: space-between;
                font-size: 2.2ch;
                font-style: italic;
                margin: 0; 
                text-align: center;
                position: absolute;
                top: 6%;
                left: 35%;
                
            }

            .menu li {
                display: inline-block; 
                vertical-align: top;
                margin-right: 50px;
                margin-block: -7px;
                top: 0%;
                color: #F0F0F0;
            }

            .menu a {
                color: #ffffff;
                position: relative;
                font-weight: bold;
                transition: color 0.3s ease;
            }

            .menu a:hover {
                color: rgba(232, 236, 236, 0.865); 
            }

            
            .menu .sousmenu {
                display: block;
                list-style-type:none;
                display: none;
                padding: 0;
                margin: 0;
                position: absolute;
                z-index: 100;
                background-color: rgba(255, 255, 255, 0.963);
                border-radius: 40px;
                margin-top: 12px;
                width: 250px;
                height: 200;
            }

            .menu .sousmenu li {
                display: block;
                float: none;
                margin: 5px;
                margin-top: 10px;
                padding: 0;
                border-top: 1px solid transparent;
                border-right: 1px solid transparent;
                border-radius: 40px;
            }

            .menu .sousmenu li a:link, .menu li a:visited {
                display: block;
                font-size: 1.09rem;
                color: #000;
                text-decoration: none;
                background-color:transparent;
            }

            .menu .sousmenu li a:hover {
                background-color:rgb(255, 255, 255); 
                color: rgb(0, 94, 255);
                border-radius: 40px;
                width: 180px;
                
            }

            .menu li:hover .sousmenu {
                display: block;
            }




            .content {
                font-family: Arial, sans-serif;
                font-style: italic;
                font-weight: bold;
                padding: 25px;
                line-height: 1.8;
                font-size: 1rem;
                text-align:left;
                position:fixed;
                background-color:transparent;
                backdrop-filter: blur(36px);
                width: 700px;
                height: 200px;
                color: rgb(255, 255, 255);
                left: 20%;
                top: 230px;
                margin-top: 150px;
                position:absolute;
                border: 2px solid #485050; 
                border-radius: 10px 40px;
                border: 1px solid #3a4343; 
                border-radius: 7px; 
                box-shadow: 30px 30px 30px #3f4c4dc1;
                
            }

            .container {
                text-align: center;
                background-color:transparent;
                backdrop-filter: blur(30px);
                width: 450px;
                height: 450px;
                color: black;
                left: 25%;
                top:  690px;
                margin-left: 80px;
                margin-right: 30px;
                margin-bottom: 100px;
                margin-top: 10px;
                position: absolute;
                border: 1px solid #000000d3;
                border-radius: 7px;
                box-shadow: 30px 30px 30px #6ea7f15f;
            }


            h3{
                position:absolute; 
                top:10%;
                left: 125px;
                font-size:34px;
                color:rgb(0, 0, 0);
                font-style: italic ;
                text-decoration:underline;
            }


            .input-group {
                position: relative;
                margin: 30px 0;
                max-width: 310px;
                border-bottom:  2px solid #000;
                top: 120%;
            }

            .input-group {
                margin: 30px 0;
                position:relative;
                top:90px;
                left: 90px;
                border-bottom:  2px solid #000;
            }

            .input-group label {
                position: absolute;
                top: 40%;
                left: 30px;
                transform: translateY(-50%);
                color: #000000;
                font-size: 1rem;
                pointer-events: none;
                transition: all 0.5s ease-in-out;
            }

            input:focus ~ label, 
            input:valid ~ label {
                top: -5px;
            }

            .input-group input {
                width: 100%;
                height: 60px;
                background: transparent;
                border: none;
                outline: none;
                font-size: 1rem;
                padding: 0 35px 0 5px;
                color: #000;
            }

            .input-group ion-icon {
                position: absolute;
                right: 8px;
                color: #fff;
                font-size: 1.2rem;
                top: 200px;
            }

            .forget {
                margin: 35px 0;
                font-size: 0.85rem;
                color: #fff;
                display: flex;
                justify-content: space-between;
            
            }

            .forget label {
                display: flex;
                align-items: left;
            }
            .forget label {
                position:absolute;
                left: 900px;
            }

            .forget label input {
                margin-right: 3px;
            }

            .forget a {
                color: #fff;
                text-decoration: none;
                font-weight: 600;
            }

            .forget a:hover {
                text-decoration: underline;
            }

            button {
                width: 50%;
                height: 45px;
                border-radius: 40px;
                background-color: rgb(14, 96, 248);
                border: none;
                outline: none;
                cursor: pointer;
                font-size: 1rem;
                font-weight: 600;
                color:#FFF;
                transition: all 0.4s ease;
                position:absolute;
                top:70%;
                left: 125px;
            }

            button:hover {
            background-color: rgb(255, 255,255, 0.5);
            }

            .remember {
                font-size: 0.9rem;
                color: #000;
                text-align: center;
            }

            .remember p a {
                text-decoration: none;
                color: #000;
                font-weight: 600;
            }

            .remember p a:hover {
                text-decoration: underline;
            }


            .remember{
                position:relative;
                top: 170px;
                left: 10px;
                

            }
            sign-in label{
                position:absolute;
                left: 500px;
                top:50%;
            }



            footer {
                position: absolute;
                top: 210svh;
                width: 100%;
                background-color: #082251bb;
                color: #fff;
                padding: 1rem;
                height: 120px;
                text-align: center;
                margin-top: 2rem;
            }

            .social-icons {
                display: flex;
                justify-content:center; 
                margin-right: 30px;
                position: relative;
                top : 10px;
            }

            .social-icons a {
                margin: 0 20px; 
                width: 30px;
            }

            .contacter{
                color: whitesmoke ;
                font-size: 20px;
                font-style: italic;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                position: relative;
            }
        </style>
        
    </head>

    <body>
   
    <dialog class="modal">
            <p> <img src="logo.png" alt="Logo of the team" style="width: 48px; height: 48px; top:1%;">  M.R.A Team</p>
           
            <p>Vous êtes une entreprise et vous souhaitez avoir un site web similaire pour faciliter votre recrutement en ligne ? 
            <br>Contactez-nous via les médias suivants pour en savoir plus.</p>

            <button class="close-button" > Fermer </button>
            <a href="mailto:dougatassala@gmail.com"><img src="gmail.png" style="position: relative ; width: 48px; height: 48px; left: 79%; top: 10%;"/></a>
            <span style="text-align: center; top:10%;">
                <img src="what.png" style="position: relative ; width: 48px; height: 48px; left: 3%; top: 10%;"/>
                <p>Téléphone : +213 06 57 ** ** **</p>
            </span>
    </dialog>

        <script>
            const modal = document.querySelector('.modal');
    
           
            document.addEventListener('DOMContentLoaded', () => {
                modal.showModal();
            });
    
            
            const closeButton = document.querySelector('.close-button');
            closeButton.addEventListener('click', () => {
                modal.close();
            });
        </script>


        <header class="header">
            <div class="logo">
                <a href="logentre.php"><img src="logoviva.png" alt="Logo de mon site"></a>
            </div>
            <ul class="menu">
                <li><a href="pagehome.php">Accueil</a></li>
                <li><a href="poste.html">Postes</a></li>
                <li><a href="form-emp.php">Inscription</a></li>
                <li><a href="aboutus.html">A propos</a></li>
            </ul>
        </header>
        
        <div classe="home">
            <h1 class="title"></h1>
            <div id="animated-text" class="content"></div>
            <script>
                const phrases = [
                    "VIVA EMPOST  est dédié au recrutement chez l'entreprise de Viva Mall. Il simplifie les étapes du processus de recrutement et offre la possibilité aux employeurs résidant dans n'importe quelle zone géographique de soumettre leur CV sans avoir à se rendre physiquement à l'entreprise.",
                ];
                let currentPhraseIndex = 0;
                let currentCharIndex = 0;
                const textElement = document.getElementById("animated-text");
        
                function displayNextCharacter() {
                    if (currentCharIndex < phrases[currentPhraseIndex].length) {
                        const currentPhrase = phrases[currentPhraseIndex];
                        textElement.textContent += currentPhrase[currentCharIndex];
                        currentCharIndex++;
                        setTimeout(displayNextCharacter, 80); // Increase the delay here (e.g., 80 milliseconds)
                    } else {
                        // Move to the next phrase
                        currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
                        currentCharIndex = 0;
                        setTimeout(displayNextCharacter, 10);
                        textElement.textContent = ""; // Clear the text
                        setTimeout(displayNextCharacter, 200000); // Delay between phrases (e.g., 2000 milliseconds)
                    }
                }
        
                // Start the animation
                displayNextCharacter();
            </script>
        </div>


        <h1 class="font-effect-fire-animation">Bienvenue sur Viva Empost</h1>
        <div class="container">
            <div class="btn-menu">

                <div class="form-wrapper sign-in">

                    <form action="" method="POST">
                        <h3>Connexion</h3>
                        <div class="input-group">
                            <ion-icon name="ID"></ion-icon>
                            <input type="text"  name="user"  id="user" required>
                            <label for="">user</label>
                        </div>

                        <div class="input-group">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="password"  id="password" required>
                            <label for="">Password</label>
                        </div>

                        <button type="submit" value="Submit" name="Submit">Se connecter</button>
                    </form>                 
                </div>
            </div>       
        </div>
        <footer>
            <p class="copy" style="font-size: 18px; font-weight: bold;">&copy; 2024 Viva Emploi</p>
            <p class="contacter">Contacter Nous sur </p>
            <div class="social-icons">
                <a href="https://www.facebook.com/VivaMallannaba/?locale=fr_FR"><img src="facebook.png" alt="Facebook icon" style="width: 40px; height: 40px;"/></a>
                <a href="https://www.instagram.com/vivamall23/?hl=fr"><img src="instagram.png" alt="Twitter icon" style="width: 45px; height: 45px;"/></a>
                <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fvivaopenmall"><img src="twitter2.png" alt="Instagram icon" style="width: 40px; height: 40px;"/></a>
            </div>

        </footer>

    </body>
</html>