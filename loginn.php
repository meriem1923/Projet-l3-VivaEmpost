<?php
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "projet";

    // Connexion à la base de données
    $conn = mysqli_connect($host, $username, $password, $database);

    // Vérifier la connexion
    if ($conn === false) {
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    $email = $_POST['Email'];
    $password = $_POST['password_ent'];

    // Requête SQL pour vérifier les informations d'identification
    $sql = "SELECT * FROM entreprise WHERE Email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        // Vérifier si l'e-mail existe
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Vérifier le mot de passe
            if (password_verify($password, $row['password_ent'])) {
                // Mot de passe correct, démarrer une nouvelle session
                $_SESSION['id_ent'] = $row['id'];
                $_SESSION['password'] = $row['password_ent'];
                $_SESSION['email'] = $row['Email'];
                
                header("Location: Viva.html");
                exit();
            } else {
                $password_err = "Le mot de passe que vous avez saisi n'est pas valide.";
            }
        } else {
            $email_err = "Aucun compte trouvé avec cet e-mail.";
        }
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>log-entr</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Abel|Aguafina+Script|Artifika|Athiti|Condiment|Dosis|Droid+Serif|Farsan|Gurajada|Josefin+Sans|Lato|Lora|Merriweather|Noto+Serif|Open+Sans+Condensed:300|Playfair+Display|Rasa|Sahitya|Share+Tech|Text+Me+One|Titillium+Web');

        body {
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
        }

        .split-container {
            display: flex;
            height: 100vh; 
        }
        .left-half {
            background-image: url("desk1.jpg");
            background-size: cover;
            width: 50%;
        }
        .right-half {
            background-image: linear-gradient(rgba(103, 144, 180, 0.356), rgba(0, 115, 255, 0.151));
            width: 50%;
        }

        #container {
            background-image: linear-gradient(to top, rgba(205, 156, 242, 0.40) 0%, rgba(246, 255, 255, 0.71) 100%);
            box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
            text-align: center;
            border-radius: 5px;
            margin: 3em auto;
            background: rgb(255, 255, 255);
            height: 400px;
            width: 480px;
            padding: 1em;
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0;
        }

        #container h2 {
            color: #222;
            font-family: 'Playfair Display', serif;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            letter-spacing: 2px;
            font-size: 3.5em;
            margin: 0;
        }
        #container p {
            font-family: 'Farsan', cursive;
            margin: 3px 0 1.5em 0;
            font-size: 1.3em;
            color: #7d7d7d;
        }

        #container input {
            width: 210px;
            display: inline-block;
            text-align: center;
            border-radius: 7px;
            background: #eee;
            padding: 1em 2em;
            outline: none;
            border: none;
            color: #222;
            transition: 0.3s linear;
        }
        ::placeholder { color: #999; }
        #container input:focus { background: rgba(73, 163, 248, 0.253); }

        #container button {
            background-image: linear-gradient(to left, rgba(66, 102, 235, 0.75) 0%, rgba(248, 74, 74, 0.86) 100%);
            box-shadow: 0 9px 25px -5px #91cbfbbb;
            font-family: 'Abel', sans-serif;
            padding: 0.5em 1.9em;
            margin: 2.3em 0 0 0;
            border-radius: 7px;
            font-size: 1.4em;
            cursor: pointer;
            color: #FFFFFF;
            font-size: 1em;
            outline: none;
            border: none;
            transition: 0.3s linear;
        }
        #container button:hover { transform: translatey(2px); }
        #container button:active { transform: translatey(5px); }
    </style>
    <?php
    if (!empty($email_err)) {
        echo '<script type="text/javascript">alert("' . $email_err . '");</script>';
    }
    if (!empty($password_err)) {
        echo '<script type="text/javascript">alert("' . $password_err . '");</script>';
    }
    ?>
</head>
<body>
    <div class="split-container">
        <div class="left-half"></div>
        <div class="right-half"></div>
        <div id="container">
            <h2>Log in</h2>
            <p>ENTREPRISE</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div>
                    <label>Email</label>
                    <input type="email" name="Email" placeholder="Your Email" required style="margin-bottom: 10px; margin-top: 30px;">
                </div>
                <div>
                    <label>Mot de passe</label>
                    <input type="password" name="password_ent" placeholder="Your password" required>
                </div>
                <div>
                    <button type="submit" value="Se connecter">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
