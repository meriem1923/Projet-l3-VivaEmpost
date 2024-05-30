
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
            <li style="position: relative; left: 7px;"><span class="material-symbols-outlined">timer</span><a href="enattente.php" style="font-size: 15px">Cv en attente</a></li>
            
        </ul>
    </aside>

      <main class="table">
         <section class="table__header">
             <h1>Consulter CV en attante</h1>   
             <div class="input-group">
            <input type="text" id="searchTitre" onkeyup="search();" placeholder="post...">
            <input type="text" id="searchSalaire" onkeyup="search();" placeholder="sexe...">
            <input type="text" id="searchHeure" onkeyup="search();" placeholder="Diplome...">
            <input type="text" id="searchContrat" onkeyup="search();" placeholder="date_naissance...">
            <span class="material-symbols-outlined">Search</span>
              </div>
             </section>

         <section class="table__body"> 
            <table>
                 <thead>
                    <tr>
                        <th>Poste</th>  <th>Id_emp</th> <th>etat</th> 
                         <th>user</th> <th>Sexe</th>  <th>Diplome</th> 
                         <th>Date_naissance</th> <th>Check</th>  

                    </tr>
                 </thead>

                 <?php 
               $conn = mysqli_connect("localhost","root","","projet");
               
                       if(!$conn){ echo "n'êtes pas connecté à la base";}
                  $req = mysqli_query($conn , "SELECT * FROM postuler where etat='accepter'");                
                  if(mysqli_num_rows($req) == 0){
                      echo "Il n'y a pas post ajouter !" ;                    
                  }else {
                      while($row=mysqli_fetch_assoc($req)){                      
            ?>
            
            <tbody>
                    <td><?php echo $row['post']?></td>
                    <td><?php echo $row['Id_emp']?></td>
                    <td><?php echo $row['etat']?></td>
                    <td><?php echo $row['user']?></td>
                    <td><?php echo $row['Sexe']?></td>
                    <td><?php echo $row['Diplome']?></td>
                    <td><?php echo $row['Date_naissance']?></td>
                    
                 <td><a href="acp-arch-cv.php?id=<?php echo $userId=$row['Id_emp'] ;?> & id2=<?php echo $userId=$row['post'] ;?>"> <span class="material-symbols-outlined" style="color: black;">Edit_Square</span> </a></td>
                 </tbody> 
                   <?php } } ?>
         </tbody>
             
            </table>
         </section>
     </main>
     <script>
        function search() {
          var inputPost = document.getElementById('searchPost').value.toUpperCase();
          var inputDiplome = document.getElementById('searchDiplome').value.toUpperCase();
          var inputSexe = document.getElementById('searchSexe').value.toUpperCase();
          var inputDate_naissance = document.getElementById('searchDate_naissance').value.toUpperCase();

          var table, tr, i;
          table = document.getElementById('myTable');
          tr = table.getElementsByTagName('tr');
          for (i = 1; i < tr.length; i++) { 
            var tdPost = tr[i].getElementsByTagName('td')[0];
            var tdDiplome = tr[i].getElementsByTagName('td')[6];
            var tdSexe = tr[i].getElementsByTagName('td')[5];
            var tdDate_naissance = tr[i].getElementsByTagName('td')[7];
            if (tdPost && tdDiplome &&  tdSexe && tdDate_naissance) {
              if (tdPost.innerHTML.toUpperCase().indexOf(inputTitre) > -1 &&
                  tdDiplome.innerHTML.toUpperCase().indexOf(inputSalaire) > -1 &&
                  tdSexe .innerHTML.toUpperCase().indexOf(inputHeure) > -1 &&
                  tdDate_naissance .innerHTML.toUpperCase().indexOf(inputContrat) > -1) {
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