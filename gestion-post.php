
<!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="consulte-cv.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
     <title>Gestion des post</title>
 </head>
 
 <body>
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


    <main class="table">
    <section class="table__header">
        <h1>POST</h1>
        <div class="input-group">
            <input type="text" id="searchTitre" onkeyup="search();" placeholder="Recherche par titre...">
            <input type="text" id="searchSalaire" onkeyup="search();" placeholder="Recherche par salaire...">
            <input type="text" id="searchHeure" onkeyup="search();" placeholder="Recherche par heure...">
            <input type="text" id="searchContrat" onkeyup="search();" placeholder="Recherche par type de contrat...">
            <span class="material-symbols-outlined">Search</span>
        </div>
    </section>

    <section class="table__body">
        <a href="ajou-post.php" class="add"><span class="material-symbols-outlined">Add_Task</span>Ajouter</a>
        <table id="myTable">
            <!-- Votre code thead et tbody ici -->
             <thead>
                     <tr>
                        <th>Titre</th> <th>Sallaire</th>  <th>Heure</th> <th>Competence</th>
                        <th>Diplome</th> <th>experience</th> <th>Type_contrat</th>  <th>Date</th> <th>Categories</th>
                          <th>edit</th> <th>delete</th>
                     </tr>
                 </thead>

                 <?php 
               $conn = mysqli_connect("localhost","root","","projet");
                       if(!$conn){ echo "n'êtes pas connecté à la base";}
                  $req = mysqli_query($conn , "SELECT * FROM post");               
                  if(mysqli_num_rows($req) == 0){
                      echo "Il n'y a pas post ajouter !" ;                    
                  }else {
                      while($row=mysqli_fetch_assoc($req)){                      
            ?>
            
                 <tbody>
                    <td><?=$row['Titre']?></td>
                    <td><?=$row['Sallaire']?></td>
                    <td><?=$row['Heure']?></td>
                    <td><?=$row['Competence']?></td>
                    <td><?=$row['Diplome']?></td>
                   <td><?=$row['experience']?></td>
                   <td><?=$row['Type_contrat']?></td>
                   <td><?=$row['Date']?></td>
                   <td><?=$row['Categories']?></td> 

                 <td><a href="modifier.php?id=<?=$row['id']?>"> <span class="material-symbols-outlined" style="color: black;">Edit_Square</span> </a></td>
                 <td><a href="supprimer.php?id=<?=$row['id']?>"> <span class="material-symbols-outlined" style="color: black;">Delete</span></a></td>

                 </tbody> 
                   <?php } } ?>
             
              </table>
         </section>
     </main>
     <script>
     function search() {
  var inputTitre = document.getElementById('searchTitre').value.toUpperCase();
  var inputSalaire = document.getElementById('searchSalaire').value.toUpperCase();
  var inputHeure = document.getElementById('searchHeure').value.toUpperCase();
  var inputContrat = document.getElementById('searchContrat').value.toUpperCase();

  var table, tr, i;
  table = document.getElementById('myTable');
  tr = table.getElementsByTagName('tr');


  for (i = 1; i < tr.length; i++) { 
    var tdTitre = tr[i].getElementsByTagName('td')[0];
    var tdSalaire = tr[i].getElementsByTagName('td')[1];
    var tdHeure = tr[i].getElementsByTagName('td')[2];
    var tdContrat = tr[i].getElementsByTagName('td')[6];

    
    if (tdTitre && tdSalaire && tdHeure && tdContrat) {
      if (tdTitre.innerHTML.toUpperCase().indexOf(inputTitre) > -1 &&
          tdSalaire.innerHTML.toUpperCase().indexOf(inputSalaire) > -1 &&
          tdHeure.innerHTML.toUpperCase().indexOf(inputHeure) > -1 &&
          tdContrat.innerHTML.toUpperCase().indexOf(inputContrat) > -1) {
        tr[i].style.display = '';
      } else {
        tr[i].style.display = 'none';
      }
    }
  }
}

 </script>
 
 </body>
 
 </html>