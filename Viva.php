<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Votre profil</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    }

    body {
        height: 100svh;
        background-image: linear-gradient(to right bottom,rgba(66, 131, 253, 0.568),rgba(249, 53, 53, 0.482));
        background-size: 1600px 1200px;
        
    }

    .font {
        align-items: center;
        right: 25%;
        left: 25%;
        top: 35%;
        bottom: 15%;
    }

    .font img{
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 470px;
        height: 470px;
        right: 25%;
        left: 34%;
        top: 4em;
        margin-bottom: 2%;
    }

    .font h2{
        font-family: 'Tangerine', serif;
        text-shadow: 4px 4px 4px #3d454d9c;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgb(11, 0, 0);
        font-size: 60px;

    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 110px;
        height: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(17px);
        --webkit-backdrop-filter: blur(17px);
        border-right: 1px solid rgba(255, 255, 255, 0.7);
        transition: width 0.3s ease;
    }

    .sidebar:hover {
        width: 260px;
    }
    .sidebar .links {
        list-style: none;
        margin-top: 20px;
        overflow-y: auto;
        scrollbar-width: none;
        height: calc(100% - 140px);
    }

    .sidebar .links::-webkit-scrollbar {
        display: none;
    }

    .links li {
        display: flex;
        border-radius: 4px;
        align-items: center;
    }

    .links li:hover {
        cursor: pointer;
        background: #fff;
    }

    .links h4 {
        color: #222;
        font-weight: 500;
        display: none;
        margin-bottom: 10px;
    }

    .sidebar:hover .links h4 {
        display: block;
    }

    .links hr {
        margin: 10px 8px;
        border: 1px solid #4c4c4c;
    }

    .sidebar:hover .links hr {
        border-color: transparent;
    }

    .links li span {
        padding: 12px 10px;
    }

    .links li a {
        padding: 10px;
        color: #000;
        display: none;
        font-weight: 500;
        white-space: nowrap;
        text-decoration: none;
    }

    .sidebar:hover .links li a {
        display: block;
    }

    .links .logout-link {
        margin-top: 20px;
    }

    .links .sousmenu {
        display: block;
        list-style-type:none;
        display: none;
        padding: 0;
        margin: 0;
        position: absolute;
        z-index: 100;
        border-radius: 40px;
        margin-top: 12px;
        width: 250px;
        height: 200;
        
    }

    .links .sousmenu li {
        display: block;
        float: none;
        margin: 5px;
        margin-top: 10px;
        padding: 0;
        border-top: 1px solid transparent;
        border-right: 1px solid transparent;
        border-radius: 40px;
    }

    .links .sousmenu li a:link, .links li a:visited {
        display: block;
        font-size: 1.09rem;
        color: #000;
        text-decoration: none;
        background-color:transparent;
    }

    .links .sousmenu li a:hover {
        background-color:rgb(255, 255, 255); /* Couleur du texte */
        color: rgb(0, 94, 255);
        border-radius: 40px;
        width: 180px;
        
    }

</style>
</head>
  <body>
    <div class="font">
    <img src="logoviva.png" alt="Logo de mon site">
      <h2>Bienvenue sur votre page de profil !</h2>
    </div>
    <aside class="sidebar">
        <ul class="links">
            <h4 style="font-size: large; font-weight: bold; font-style: italic;">Mon profil</h4>
            <li>
                <span class="material-symbols-outlined">person</span>
                <a href="Viva.php">Visiter mon profil</a>
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
            
        </ul>
    </aside>

  </body>
</html>
