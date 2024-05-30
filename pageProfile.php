<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
$id2 = isset($_GET['id2']) ? $_GET['id2'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="descr.css">
    <title> Cv d'employeur</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=font-effect-fire-animation">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>
   
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "projet";
$conn = mysqli_connect($host, $username, $password, $database);

if($conn) {
    echo "connected";
} else { 
    echo "failed: " . mysqli_connect_error();        
}

$id_emp = isset($_GET['id']) ? $_GET['id'] : null;

if ($id_emp) {
    $req = mysqli_query($conn, "SELECT * FROM employeur WHERE Id_emp=$id_emp");
    if ($req) {
        $data = mysqli_fetch_array($req);  
    } else {
        echo "Error in query: " . mysqli_error($conn);
        $data = null;
    }
} else {
    echo "No ID provided";
    $data = null;
}

mysqli_close($conn);
?>

<?php if ($data): ?>
    <div class="container">
        <div class="box">
            <div class="left-column">
                <img src='<?php echo htmlspecialchars($data['image']); ?>' alt="Image employeur ">
                <span class="description">
                    <strong>Description :</strong>
                    <p><br><?php echo htmlspecialchars($data['nous_contacter']); ?><br><br></p>
                </span>
                <span>
                    <button class="btn1"><a href="modification-emp.php?id=<?php echo urlencode($id_emp); ?>">modification</a></button>
                </span> 
            </div>
  
            <div class="right-column">
                <div class="Titre">
                    <h1><?php echo htmlspecialchars($data['user']); ?></h1>
                </div>
                <span style="display: inline-block;">
                    <strong>Nom : </strong><?php echo htmlspecialchars($data['Nom']); ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Prenom :</strong><?php echo htmlspecialchars($data['Prenom']); ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Date de naissance : </strong><?php echo htmlspecialchars($data['Date_naissance']); ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Sexe : </strong><?php echo htmlspecialchars($data['Sexe']); ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Taille : </strong><?php echo htmlspecialchars($data['Taille']); ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Situation familiale : </strong><?php echo htmlspecialchars($data['Situation_fam']); ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Address: </strong><?php echo htmlspecialchars($data['addresse']); ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Numéro de Téléphone : </strong><?php echo htmlspecialchars($data['Num_telp']); ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Email :</strong> <a href="mailto:<?php echo htmlspecialchars($data['Email']); ?>"><?php echo htmlspecialchars($data['Email']); ?></a>
                </span>
                <span style="display: inline-block;">
                    <strong>Diplome : </strong><?php echo htmlspecialchars($data['Diplome']); ?>
                </span>
                <span style="display: inline-block;">
                    <strong>Langue maîtrisée : </strong><?php echo htmlspecialchars($data['Langue_metrise']); ?>
                </span>
            </div>
        </div>
    </div>
<?php else: ?>
    <p>No data available for the given ID.</p>
<?php endif; ?>

</body>
</html>
