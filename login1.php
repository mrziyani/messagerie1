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
  if(isset($_POST['email']) && isset($_POST['password']))
 { 
    $email=$_POST['email'];
    $mdp=$_POST['password'];
    require 'connexion.php';
    $sql="SELECT * FROM `personne`  where email='$email' and mdp='$mdp'";
    $resultat = mysqli_query($conn, $sql);
    if (!$resultat) {
        die('Erreur lors de l\'exécution de la requête : ' . mysqli_error($conn));
    }
    if (mysqli_num_rows($resultat) > 0)
        {
            $ligne = mysqli_fetch_assoc($resultat);
            $id_utilisateur = $ligne['ID'];
            $nom_utilisateur = $ligne['nom'];
            $prenom_utilisateur = $ligne['prenom'];
            // Démarrer la session
                session_start();

            // Stocker une variable de session
                $_SESSION['userid'] = $id_utilisateur;
                $_SESSION['username'] = $nom_utilisateur;              
                $_SESSION['userprenom'] = $prenom_utilisateur;
                header("Location: afterlogin.php");
        }
    else {
        ?>
        <div class="alert alert-primary" role="alert">
    email ou mdp inco!
  </div>
  <a href="login.php"><img width="20" height="20" src="img/back.jpg" alt=""  ></a></li>
        <?php
        
    }
    
    
 }
}
if(isset($_POST['submit1']))
{
    header("Location: inscription.php" );
}
  