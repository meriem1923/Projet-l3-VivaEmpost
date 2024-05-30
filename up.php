<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "projet";
$conn = mysqli_connect($host, $username, $password, $database);
if($conn){
    echo "connected";
} else{ 
    echo "failed";
}

if(isset($_POST['update'])) { 
    $ID = $_POST[ 'id'];
    

    $Nom=mysqli_real_escape_string($con, $_POST['Nom']);             
    $Prenom=  mysqli_real_escape_string($con, $_POST['Prenom']);       
    $Date_naissance= mysqli_real_escape_string($con, $_POST['Date_naissance']);            
    $Langue_metrise= mysqli_real_escape_string($con, $_POST['Langue_metrise']);         
    $addresse= mysqli_real_escape_string($con, $_POST['addresse']);        
    $Email=mysqli_real_escape_string($con, $_POST['Email']);             
    $Num_telp=  mysqli_real_escape_string($con, $_POST['Num_telp']);       
    $Diplome= mysqli_real_escape_string($con, $_POST['Diplome']);            
    $Sexe= mysqli_real_escape_string($con, $_POST['Sexe']);         
    $Taille= mysqli_real_escape_string($con, $_POST['Taille']);        
    $Situation_fam= mysqli_real_escape_string($con, $_POST['Situation_fam']);         
    $nous_contacter= mysqli_real_escape_string($con, $_POST['nous_contacter']);        
    $user= mysqli_real_escape_string($con, $_POST['user']);         
    $password= mysqli_real_escape_string($con, $_POST['password']);     


$IMAGE=$_FILES["image"];
$image_location = $_FILES["image"]["tmp_name"];//makan sora
$image_name     = $_FILES["image"]["name"];//ism sora
$image_up       ="images/".$image_name; //dast min ajl hifd swar da5al foldar images
   
    $update = "UPDATE employeur SET  Nom='$Nom' , Prenom = '$Prenom',  Date_naissance='$Date_naissance',   Langue_metrise=$Langue_metrise
     addresse='$addresse' ,    Email= '$Email' , Num_telp='$Num_telp' ,  Diplome='$Diplome' ,  Sexe='$Sexe' , Taille='$Taille' ,  
    Situation_fam='$Situation_fam'    ,  nous_contacter='$nous_contacter' ,  user= '$user' ,  password= '$password '
         WHERE id=$ID";

mysqli_query($conn, $update);
if(move_uploaded_file($image_location,'images/'.$image_name)){
echo "<script>alert('تم تحديث المنتج بنجاح ')</script>";
}else{
    echo "<script>alert('حدث خطئ ')</script>";

}
header('location: ****.php');
}



?>