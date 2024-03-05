<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

</body>

<?php
if(isset($_POST['submit']))
{
  if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['daten'])&& isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['password'])&&isset($_POST['password1']))
 { 
  
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $daten=$_POST['daten'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $mdp=$_POST['password'];
  $password1=$_POST['password1'];

  
  if($mdp==$password1)
  {

  require 'cnx.php';
  $sql = "INSERT INTO `users`(`prenom`, `nom`, `datenais`, `sexe`, `email`, `mdp`) VALUES ('$nom', '$prenom', '$daten', '$gender','$email','$mdp')";
  // Exécution de la requête
  if (mysqli_query($conn, $sql)) {
    ?>
    <div class="alert alert-primary" role="alert">
    New record created successfully!
  </div>
  <a href="login.php"><img width="20" height="20" src="img/back.jpg" alt=""  ></a></li>
  <li><a 
    <?php
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


}
else{
  ?>
  <div class="alert alert-primary" role="alert">
  mdp pas identiques!
  </div>
  <a href="inscription.php"><img width="20" height="20" src="img/back.jpg" alt=""  ></a></li>
  <li><a 
  <?php
  
}
}
else{
  ?>
  <!-- alert -->
  <div class="alert alert-primary" role="alert">
  remplir tous les champs!
  </div>
  <a href="inscription.php"><img width="20" height="20" src="img/back.jpg" alt=""  ></a></li>
  <li><a 
  <?php
}
}
?>