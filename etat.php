<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0; // default value if id is not set
}

$conn = mysqli_connect("localhost","root","","projet");
if(!$conn) { 
    echo "n'êtes pas connecté à la base";
} else {
    $req = mysqli_query($conn, "SELECT * FROM postuler WHERE Id_emp=$id");
    $hasPosts = ($req && mysqli_num_rows($req) > 0);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="consulte-cv.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <title>Gestion des post</title>
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
<main class="table">
    <section class="table__header">
        <h1>Consulter mon état</h1>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th>Poste</th>
                    <th>État</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($hasPosts) {
                    while($row = mysqli_fetch_assoc($req)) {
                        echo "<tr>";
                        echo "<td>{$row['post']}</td>";
                        echo "<td>{$row['etat']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Il n'y a pas de post ajouté !</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</main>
<script>
function search() {
    var input, filter, table, tr, td, i, textValue;
    input = document.querySelector('input[type="search"]');
    filter = input.value.toUpperCase();
    table = document.querySelector('table');
    tr = table.getElementsByTagName('tr');

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName('td');
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                textValue = td[j].textContent || td[j].innerText;
                if (textValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = '';
                    break;
                } else {
                    tr[i].style.display = 'none';
                }
            }
        }
    }
}
</script>
</body>
</html>
