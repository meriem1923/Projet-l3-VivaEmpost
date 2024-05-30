
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Les CVs  de nos candidats</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cv-entr.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<aside class="sidebar">
        <ul class="links">
            <h4 style="font-size: large; font-weight: bold; font-style: italic;">Mon profil</h4>
            <li>
                <span class="material-symbols-outlined">person</span>
                <a href="Viva.html">Visiter mon profil</a>
            </li>
            <li class="logout-link">
                <span class="material-symbols-outlined">logout</span>
                <a href="pagehome.php">Log-out</a>
            </li>
            <h4 style="font-size: large; font-weight: bold; font-style: italic;">Gestion des postes</h4>
            <li>
                <span class="material-symbols-outlined">dashboard</span>
                <a href="gestion-post.php">Visiter mes postes</a>
            </li>
           
            <hr>
            <h4 style="font-size: large; font-weight: bold; font-style: italic;">Demandeur d'emploi</h4>
            
            <li>
                <span class="material-symbols-outlined">patient_list</span>
                <a href="condidateur.php">Consulter condidatures </a>
                <ul class="sousmenu" >
                </ul>
            </li>
            <li style="position: relative; left: 7px;"><span class="material-symbols-outlined">done_all</span><a href="accepter.php" style="font-size: 15px;">Cv accepter</a></li>
            <li style="position: relative; left: 7px;"><span class="material-symbols-outlined">archive</span><a href="archive.php" style="font-size: 15px">Cv archive</a></li>
            <li style="position: relative; left: 7px;"><span class="material-symbols-outlined">timer</span><a href="enattente.php" style="font-size: 15px">Cv en attante</a></li>
            <li>
                <span class="material-symbols-outlined">phone</span>
                <a href="#">Nous contacter </a>
            </li>
        </ul>
    </aside>

  
    <div class="emp">
        <section class="swiper mySwiper">
        <div class='swiper-wrapper'><?php
$host = "localhost";
$bduser = "root";
$bdpass = "";
$bddata = "projet";
$bdd = mysqli_connect($host, $bduser, $bdpass, $bddata);

if (!$bdd) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

$result = mysqli_query($bdd, "SELECT * FROM employeur");
while ($row = mysqli_fetch_array($result)) {

    echo "
    <div class='card swiper-slide'>
        <div class='card__content'>
            <img src='relative/path/to/pi.png' alt='Profile Image'>
            <span class='card__title'>"  . htmlspecialchars($row['user']) . "</span>
            <p class='card__text'>
                <span class='material-symbols-outlined'>Cardiology</span>" . htmlspecialchars($row['Nom']) . " " . htmlspecialchars($row['Prenom']) . "
                <br>
                <br>
                <span class='material-symbols-outlined'>inventory</span>" .htmlspecialchars($row['Date_naissance']) . "<br>
                <br>
                <span class='material-symbols-outlined'>work_history</span>" .htmlspecialchars($row['Diplome']) . "<br>
            </p> 
            <button class='card__btn'><a href='acp-arch-cv.php?id=$row[Id_emp]'>More</a></button>
            
        </div>
    </div>
    ";
}
?>
        </div>
       </section>
    </div>
</body>
</html>

