<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Les postes</title>
    <link rel="stylesheet" href="Apost.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

 <aside class="sidebar" method='conctat'>
      <div class="logo"> <img src="instalogo.jpg" alt="logo"> <h2>find-empost</h2> </div>
     <ul class="links"> 
        <h4>mon profil</h4>
        <li>  <span class="material-symbols-outlined">person</span>  <a href="#">visiter mon profil</a></li>
          <li class="logout-link"> <span class="material-symbols-outlined">logout</span> <a href="#">Logout</a> </li>
  <h4>post</h4>
           <li><span class="material-symbols-outlined">Engineering</span> <a href="#">Post </a></li>
      <hr>
           <li> <span class="material-symbols-outlined">phone</span> <a href="#">nous contacter </a></li>
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
