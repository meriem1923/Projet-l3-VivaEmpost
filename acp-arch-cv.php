<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="descr.css">
        <title>Cv d'employeur</title>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=font-effect-fire-animation">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>

    <body>
        <dialog id="myDialog1" class="modal">
            <img src="ok.png" alt="Check" style="left: 40%; margin-bottom: 5px; position: relative; width: 40px; height: 40px;">
            <p>Vous avez accepté ce CV.</p>
        </dialog>

        <dialog id="myDialog2" class="modal">
            <img src="archi1.png" alt="Check" style="left: 40%; margin-bottom: 5px; position: relative; width: 40px; height: 40px;">
            <p>Vous avez archivé ce CV.</p>
        </dialog>

                    

        <?php
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "projet";
            $conn = mysqli_connect($host, $username, $password, $database);
            if ($conn) {
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
                            $row = mysqli_fetch_assoc($req); // Fetch only one row
                    ?>
                    <form method='post' action=''>
                        <button type='submit' name='Archive' id="mybtn2">Archive</button>
                        <button type='submit' name='Accepter' id="mybtn1">Accepter</button>
                    </form>
                    <script>
                        var btn1 = document.getElementById("mybtn1");
                        var btn2 = document.getElementById("mybtn2");
                        var dialog1 = document.getElementById("myDialog1");
                        var dialog2 = document.getElementById("myDialog2");

                        btn1.onclick = function() {
                            dialog1.show();
                            setTimeout(function() {
                                dialog1.close();
                            }, 2000); 
                        };

                        btn2.onclick = function() {
                            dialog2.show();
                            setTimeout(function() {
                                dialog2.close();
                            }, 2000); 
                        };
                    </script>
                    <?php } ?>
                        
                    
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
