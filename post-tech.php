<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
$id2 = isset($_GET['id2']) ? $_GET['id2'] : null;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Les postes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: auto;
            background-image: linear-gradient(to right bottom, rgba(66, 131, 253, 0.653), rgba(249, 53, 53, 0.653));
            background-size: 1600px 2000px;
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
            -webkit-backdrop-filter: blur(17px);
            border-right: 1px solid rgba(255, 255, 255, 0.7);
            transition: width 0.3s ease;
        }

        .sidebar:hover {
            width: 260px;
        }

        .sidebar .logo {
            color: #000;
            display: flex;
            align-items: center;
            padding: 25px 10px 15px;
        }

        .logo img {
            width: 53px;
            border-radius: 50%;
        }

        .logo h2 {
            font-size: 1.15rem;
            font-weight: 600;
            margin-left: 15px;
            display: none;
        }

        .sidebar:hover .logo h2 {
            display: block;
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
            font-weight: 40000;
            display: none;
            margin-bottom: 10px;
        }

        .sidebar:hover .links h4 {
            display: block;
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

        .ag-format-container {
            flex-shrink: 0;
            left: 22%;
            top: 30px;
            display: block;
            width: 78%;
            height: 20em;
            position: relative;
        }

        .ag-courses_box {
            display: flex;
            align-items: flex-start;
            flex-wrap: wrap;
            padding: 0 0;
        }

        .ag-courses_item {
            flex-basis: calc(118% / 3 - 13px);
            margin: 0 15px 10px;
            overflow: hidden;
            border-radius: 28px;
        }

        .ag-courses-item_link {
            display: block;
            padding: 30px 20px;
            background-color: #ffffff;
            overflow: hidden;
            position: relative;
        }

        .ag-courses-item_link:hover,
        .ag-courses-item_link:hover .ag-courses-item_date {
            text-decoration: none;
            color: #FFF;
        }

        .ag-courses-item_link:hover .ag-courses-item_bg {
            transform: scale(10);
        }

        .ag-courses-item_title {
            min-height: 87px;
            margin: 0 0 25px;
            overflow: hidden;
            font-weight: bold;
            font-size: 23px;
            color: #000000;
            z-index: 2;
            position: relative;
        }

        .ag-courses-item_date-box {
            font-size: 18px;
            color: #000000;
            z-index: 2;
            position: relative;
        }

        .ag-courses-item_date {
            font-weight: bold;
            color: #f9b234;
            transition: color .5s ease;
        }

        .ag-courses-item_bg {
            height: 128px;
            width: 128px;
            background-color: #fd2020d6;
            z-index: 1;
            position: absolute;
            top: -75px;
            right: -75px;
            border-radius: 50%;
            transition: all .5s ease;
        }

        .ag-courses_item:nth-child(2n) .ag-courses-item_bg {
            background-color: #58aef9;
        }

        .ag-courses_item:nth-child(3n) .ag-courses-item_bg {
            background-color: #f95454;
        }

        .ag-courses_item:nth-child(4n) .ag-courses-item_bg {
            background-color: #007bff;
        }

        .ag-courses_item:nth-child(5n) .ag-courses-item_bg {
            background-color: #b655f7;
        }

        .ag-courses_item:nth-child(6n) .ag-courses-item_bg {
            background-color: #83a2fa;
        }

        .card__text-material-symbols-outlined {
            display: block;
            position: relative;
            margin-right: 3px;
            justify-content: left;
        }

        @media only screen and (max-width: 979px) {
            .ag-courses_item {
                flex-basis: calc(50% - 30px);
            }
            .ag-courses-item_title {
                font-size: 24px;
            }
        }

        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }
        }

        @media only screen and (max-width: 639px) {
            .ag-courses_item {
                flex-basis: 100%;
            }
            .ag-courses-item_title {
                min-height: 72px;
                line-height: 1;
                font-size: 24px;
            }
            .ag-courses-item_link {
                padding: 22px 40px;
            }
            .ag-courses-item_date-box {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
<aside class="sidebar" method='conctat'>
      <div class="logo"> <img src="logoviva.png" alt="Logo de mon site"> <h2>Viva Empost</h2> </div>

      <ul class="links"> 
        <h4>Mon profil</h4>
        <li>  <span class="material-symbols-outlined">person</span> <a href="pageProfile.php?id=<?php echo $id; ?>">Visiter mon profil</a> </li>
        
            <li class="logout-link"> <span class="material-symbols-outlined">logout</span> <a href="Logout.php">Logout</a>  
        </li>
              
        <h4>Post</h4>
        <li><span class="material-symbols-outlined">Engineering</span> <a href="post-tech.php?id2=<?php echo $id; ?>">Post Techniques </a> </li>
        <li><span class="material-symbols-outlined">Support_Agent</span> <a href="post-admi.php?id2=<?php echo $id; ?> ">Post Administrative</a> </li>
        
        <hr>
        <li>  <span class="material-symbols-outlined">Mark_Email_Unread</span> <a href="etat.php?id=<?php echo $id; ?>">etat</a> </li>
      </ul>
    </aside>

<div class="ag-format-container">
    <div class="ag-courses_box">
        <div id="results"></div>
        <?php
        $host = "localhost";
        $bduser = "root";
        $bdpass = "";
        $bddata = "projet";
        $bdd = mysqli_connect($host, $bduser, $bdpass, $bddata);
        $id_emp = isset($_GET['id2']) ? $_GET['id2'] : null;

        if (!$bdd) {
            die("Échec de la connexion : " . mysqli_connect_error());
        }

        $query = "SELECT * FROM post WHERE Categories='Technique'";
        $result = mysqli_query($bdd, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="ag-courses_item">
                    <a href="POSTULER.php?id=' . urlencode($row['id']) . '&id2=' . urlencode($id_emp) . '" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>
                        <div class="ag-courses-item_title">' . htmlspecialchars($row['Titre']) . '</div>
                        <div class="ag-courses-item_date-box">
                            <span class="ag-courses-item_date"><span class="material-symbols-outlined">Currency_Exchange</span>' . htmlspecialchars($row['Sallaire']) . '</span><br>
                            <span class="ag-courses-item_date"><span class="material-symbols-outlined">Schedule</span>' . htmlspecialchars($row['Date']) . '</span>
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
