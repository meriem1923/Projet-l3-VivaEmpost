<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
} 
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demandeur d'emploi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="employeur.css">
  </head>
  <body>
    <aside class="sidebar" method='conctat'>
      <div class="logo"> <img src="logoviva.png" alt="Logo de mon site"> <h2>Viva Empost</h2> </div>

      <ul class="links"> 
        <h4>Mon profil</h4>
        <li>  <span class="material-symbols-outlined">person</span> <a href="pageProfile.php?id=<?php echo $id; ?>">Visiter mon profil</a> </li>
        
            <li class="logout-link"> <span class="material-symbols-outlined">logout</span> <a href="pagehome.php">Logout</a>  
        </li>
              
        <h4>Post</h4>
        <li><span class="material-symbols-outlined">Engineering</span> <a href="post-tech.php?id2=<?php echo $id; ?>">Post Techniques </a> </li>
        <li><span class="material-symbols-outlined">Support_Agent</span> <a href="post-admi.php?id2=<?php echo $id; ?> ">Post Administrative</a> </li>
        
        <hr>
        <li>  <span class="material-symbols-outlined">Mark_Email_Unread</span> <a href="etat.php?id=<?php echo $id; ?>">etat</a> </li>
      </ul>
    </aside>
  </body>
</html>