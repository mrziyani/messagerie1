<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Full Name</th>
      <th scope="col">ICON accepter</th>
      <th scope="col">ICON decline</th>
    </tr>
  </thead>
    
    <?php
        session_start();
        $id1 = $_SESSION['userid'];
        require 'connexion.php';
        $sql="SELECT * FROM friend , personne WHERE friend.idemet = personne.ID AND friend.idrec = '$id1' AND friend.etat= 0;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) 
        {
            // Parcourir les résultats et afficher les données
            
            while($row = mysqli_fetch_assoc($result)) 
            {
                ?>
                <tbody>
                    <tr>
      
                        <td><?php echo $row["nom"]; echo $row["prenom"]; ?></td>                       
                        <td><a href="accepter.php?id2= <?php echo $row["ID"] ?> "><img width="20 height="20" src="img/accepter.png" alt=""  ></a></td>
                        <td><a href="decline.php?id2= <?php echo $row["ID"] ?> "><img width="20 height="20" src="img/decline.png" alt=""  ></a></td>
                     </tr>

                <?php
            }
        }
    ?>

  </tbody>
</table>
</body>
<a href="afterlogin.php"><img width="20" height="20" src="img/back.jpg" alt=""  ></a>     
<?php
    
?>