<!DOCTYPE html>
<html lang="en">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins',sans-serif;
        }  
        
        ul, li {  /* Reset default list styles */
            list-style: none;
            padding: 0;
            margin: 0;
        }

        dialog {
            top : 45%;
            left : 75%;
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


        /* Style for the overlay (background behind the modal) */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            display: none;
            z-index: 999; /* Below the modal but above other content */
        }

        /* Style the header */
        .header {
            background-color: rgb(196, 230, 255);
            background-size: auto; /* Set the desired size */
            background-repeat: no-repeat;
            height: 63px;
            text-align: center;
        }

        .logo img {
            position: relative;
            display: flex;
            width: 80px; /* Adjust as needed */
            height: 70px;
            top: -3px;
        }

        .menu {
            display: inline-flex;
            float: right;
            justify-content: space-between;
            font-size: 2ch;
            font-style: italic;
            margin: 0; /* Center the entire navigation bar */
            text-align: center;
            position: absolute;
            top: 6%;
            left: 35%;
            
        }

        .menu li {
            display: inline-block; /* Display the list items horizontally */
            vertical-align: top;
            margin-right: 50px;
            margin-block: -7px;
            top: 0%;
            color: #F0F0F0;
        }

        .menu a {
            position: relative;
            font-weight: bold;
            transition: color 0.4s ease;
        }

        .menu a:hover {
            color: rgba(232, 236, 236, 0.865); /* Change to your desired hover color */
        }

        /* Style the submenu */
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
            background-color:rgb(255, 255, 255); /* Couleur du texte */
            color: rgb(0, 94, 255);
            border-radius: 40px;
            width: 180px;
            
        }

        .menu li:hover .sousmenu {
            display: block;
        }



        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap');

        :root {
            --primary-color: #ecf8fd;
            --secondary-color: #00b4d5;
            --tertiary-color: #0077b6;
            --gray-color: #5b5959;
        }

        * {
            box-sizing: border-box;
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1;
            padding: 0;
            margin: 0;
        }

        .container {
            background-color: var(--primary-color);
            min-height: 140vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background-color: white;
            border-radius: 10px;
            box-shadow: 5px 5px 10px 1px rgb(0, 0, 0, 12%);
            padding: 35px;
            width: 950px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            height: 110svh;
        }

        .box .right-column .Titre {
            margin-bottom: 40px;
            font-weight: 400;
            font-size: 24px;
            position: relative;
            left: 30px;
            
        }


        .box .left-column button{
            font-family:'Times New Roman', Times, serif;
            background-color: rgb(28, 81, 255);
            color: aliceblue;
            font-weight:bold;
            font-size: 18px;
            width: 140px;
            height:  40px;
            border-radius: 50px;
            position: relative;
            left: 90px;
            top: 0px;
        }

        .box .left-column button:hover{
            background-color: #ffffff;
            color: rgb(0, 81, 255);
        }


        .box .left-column {
            display:flex;
            flex-direction: column;
            justify-content:start;
            align-items: start;
            gap: 20px;
            margin-top: 0px;
            position: relative;
            left: 25px;
        }

        .box .left-column img{
            width: 340px;
            height: 240px;
            border-radius: 24px;
        }

        .box .left-column .description {
            text-align: start;
            line-height: 1.5;
            max-width: 340px;
            margin-top: 60px;
            font-size: 18px;

        }

        .box .right-column {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 15px;
        }

        .box .right-column p {
            color: var(--gray-color);
            justify-content: space-between;
            font-size: 14px;
            line-height: 1.5;
            position: relative;
            left: 45px;
        }

        dialog {
        top : 50%;
        left : 6%;
        margin: 10% auto;
        width: 90%;
        height: auto;
        max-width: 400px;
        background-color: #e6e5e5;
        padding: 34px;
        border-width: 2px;
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


    </style>
<head>
    <meta charset="UTF-8">
    <title>Details</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=font-effect-fire-animation">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>
    
    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "projet";
        $conn = mysqli_connect($host, $username, $password, $database);
        if($conn){
        ;
        } else{ 
        echo "failed" . mysqli_connect_error();        
        }

        $ID = $_GET['id'];
        $up = mysqli_query($conn, "SELECT * FROM post WHERE id=$ID");
        $data = mysqli_fetch_array($up);  
    ?>
    <div class="container">
        <div class="box">

            <div class="left-column">
                <span class="description">
                    <strong>Description du poste :</strong><br><?php echo $data['Description']; ?>
                    <p><br>.<br>
                        <br>
                    </p>
                </span>

                <?php   
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "projet";
    $conn = mysqli_connect($host, $username, $password, $database);

    if($conn){
        ;
    } else{ 
        echo "failed";
    }

    
    $IDpost = $_GET['id'];
    $IDemp = $_GET['id2'];

    $query_emp = "SELECT user FROM employeur WHERE Id_emp = '$IDemp'";
    $result_emp = mysqli_query($conn, $query_emp);
    $emp = "";
    if ($result_emp && mysqli_num_rows($result_emp) > 0) {
        $row_emp = mysqli_fetch_assoc($result_emp);
        $emp = $row_emp['user'];
    }
    $query_emp = "SELECT Sexe FROM employeur WHERE Id_emp = '$IDemp'";
    $result_emp = mysqli_query($conn, $query_emp);
    $Sexe = "";
    if ($result_emp && mysqli_num_rows($result_emp) > 0) {
        $row_emp = mysqli_fetch_assoc($result_emp);
        $Sexe = $row_emp['Sexe'];
    }
    $query_emp = "SELECT Diplome FROM employeur WHERE Id_emp = '$IDemp'";
    $result_emp = mysqli_query($conn, $query_emp);
    $Diplome = "";
    if ($result_emp && mysqli_num_rows($result_emp) > 0) {
        $row_emp = mysqli_fetch_assoc($result_emp);
        $Diplome = $row_emp['Diplome'];
    }
    $query_emp = "SELECT Date_naissance FROM employeur WHERE Id_emp = '$IDemp'";
    $result_emp = mysqli_query($conn, $query_emp);
    $Date_naissance = "";
    if ($result_emp && mysqli_num_rows($result_emp) > 0) {
        $row_emp = mysqli_fetch_assoc($result_emp);
        $Date_naissance= $row_emp['Date_naissance'];
    }
    // جلب العنوان (Titre) من جدول post
    $query_post = "SELECT Titre FROM post WHERE id = '$IDpost'";
    $result_post = mysqli_query($conn, $query_post);
    $post = "";
    if ($result_post && mysqli_num_rows($result_post) > 0) {
        $row_post = mysqli_fetch_assoc($result_post);
        $post = $row_post['Titre'];
    }
    ?>

    <form method='POST'>
        <div style="display: none;">
            <input type="text" name="id_emp" value="<?php echo $IDemp; ?>">
            <input type="text" name="user" value="<?php echo $emp; ?>">
            <input type="text" name="titre" value="<?php echo $post; ?>">
            <input type="text" name="Sexe" value="<?php echo $Sexe; ?>">
            <input type="Date" name="Date_naissance" value="<?php echo $Date_naissance; ?>">
            <input type="text" name="Diplome" value="<?php echo $Diplome; ?>">
            <input type="text" name="etat" value="en attente">
        </div>
        <button name="submit" type="submit" value="postuler" id="mybtn">Postuler</button>
        <dialog id="myDialog" class="modal">
                <img src="ok.png" alt="Check" style="left: 40%; margin-bottom: 5px; position: relative; width: 40px; height: 40px;">
                <p>Vous avez postuler dans ce poste.</p>
        </dialog>
        
        
            <script>
                var btn = document.getElementById("mybtn");
                var dialog1 = document.getElementById("myDialog");
        
                btn.onclick = function() {
                    dialog1.show();
                    setTimeout(function() {
                        dialog1.close();
                    }, 2000); 
                };
        
            </script>
    </form>

    <?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_emp = $_POST['id_emp'];
        $user = $_POST['user'];
        $titre = $_POST['titre'];
        $etat = $_POST['etat'];
        $Sexe = $_POST['Sexe'];
        $Diplome = $_POST['Diplome'];
        $Date_naissance = $_POST['Date_naissance'];
        
       
        $query_insert = "INSERT INTO postuler (Id_emp, user, post, etat,Sexe,Diplome,Date_naissance) VALUES ('$id_emp', '$user', '$titre', '$etat','$Sexe','$Diplome','$Date_naissance')";
        if (mysqli_query($conn, $query_insert)) {
            ;
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    ?>

            </div>

            <div class="right-column">
                <div class="Titre">
                    <h1><?php echo $data['Titre']; ?></h1>
                </div>
                <span style="display: inline-block;">
                    <strong>Catégorie : </strong><?php echo $data['Categories']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Type de Contrat :</strong><?php echo $data['Type_contrat']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Sallaire : </strong><?php echo $data['Sallaire']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Diplôme : </strong><?php echo $data['Diplome']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Compétence : </strong><?php echo $data['Competence']; ?>
              
                </span>
                <span style="display: inline-block;">
                    <strong> experience : </strong><?php echo $data['experience']; ?>
                 
                </span>
                <span style="display: inline-block;">
                    <strong>Sexe : </strong><?php echo $data['Sexe']; ?>
                 
                </span>
                <span style="display: inline-block;">
                    <strong>Age : </strong><?php echo $data['Age']; ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Taille : </strong><?php echo $data['Taille']; ?>
                </span>


            </div>
        </div>
    </div>

</body>
</html>