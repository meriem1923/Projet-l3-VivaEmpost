<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
} else {
    // La clé 'ne' n'existe pas dans l'URL, gérer l'erreur ou attribuer une valeur par défaut
    echo "La clé 'ne' n'est pas définie.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Les postes</title>
    <link rel="stylesheet" href="profile-empost.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<aside class="sidebar" method='conctat'>
      <div class="logo"> <img src="C:/Users/user/Downloads/logoviva.png" alt="Logo de mon site"> <h2>Viva Empost</h2> </div>

      <ul class="links"> 
        <h4>Mon profil</h4>
        <li>  <span class="material-symbols-outlined">person</span> <a href="pageProfile.php?id=<?php echo $id; ?>">Visiter mon profil</a> </li>
            <li class="logout-link"> <span class="material-symbols-outlined">logout</span> <a href="pagehome.php">Logout</a>  
        </li>
              
        <h4>Post</h4>
        <li><span class="material-symbols-outlined">Engineering</span> <a href="POST.php?id2=<?php echo $id; ?>">Post Techniques </a> </li>
        <li><span class="material-symbols-outlined">Support_Agent</span> <a href="POST.php?id2=<?php echo $id; ?> ">Post Administrative</a> </li>
        <hr>
        <li>  <span class="material-symbols-outlined">phone</span> <a href="#">Nous contacter </a>  </li>


      </ul>
 
    </aside>

   
    <div class="ag-format-container">
        <div class="ag-courses_box">      
    <div id="results"></div>

 <?php
  // Connexion à la base de données
$host = "localhost";
$bduser = "root";
$bdpass = "";
$bddata = "projet";
$bdd = mysqli_connect($host, $bduser, $bdpass, $bddata);
$id_emp = $_GET['id2'];

if (!$bdd) { die("Échec de la connexion : " . mysqli_connect_error());}

$query = "SELECT * FROM post";

$result = mysqli_query($bdd, $query);
if ($result && mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {

    echo '<div class="ag-courses_item">
        <a href="POSTULER.php?id=' . $row['id'] . '& id2=' . $id_emp . '" class="ag-courses-item_link"> 
            <div class="ag-courses-item_bg"></div>
                <div class="ag-courses-item_title">' . $row['Titre'] . '</div>  
                <div class="ag-courses-item_date-box">
                <span class="ag-courses-item_date"><span class="material-symbols-outlined">Currency_Exchange</span>'   . $row['Sallaire'] . '</span><br>
                <span class="ag-courses-item_date"><span class="material-symbols-outlined">Schedule</span>'   . $row['Date'] . '</span>
                </div>
                </a>
                </div>';
                }
            } else {
                echo "Aucun résultat trouvé.";
            }
            mysqli_close($bdd);

            ?>

       </div>
    </div> 
</body>
</html>
