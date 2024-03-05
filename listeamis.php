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
      <th scope="col">chater</th>
    </tr>
  </thead>
    
    <?php
        session_start();
        $id1 = $_SESSION['userid'];
        require 'connexion.php';
        //$sql=" SELECT * FROM Personne WHERE id <> '$id1'";
        //$sql="SELECT * FROM personne where personne.ID NOT IN (SELECT idemet FROM friend ) AND (SELECT idrec FROM friend ) AND personne.ID<>'$id1' ;";
        $sql="SELECT * FROM personne WHERE (personne.ID  IN (SELECT friend.idrec FROM friend WHERE friend.idemet ='$id1' AND friend.etat=1) or personne.ID IN (SELECT friend.idemet FROM friend WHERE friend.idrec ='$id1' AND friend.etat=1)) AND (personne.ID <> '$id1')";  
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) 
        {
            // Parcourir les résultats et afficher les données
            
            while($row = mysqli_fetch_assoc($result)) 
            {
                ?>
                <tbody>
                    <tr>
      
                        <td><?php echo $row["nom"]; echo $row["prenom"]; echo $row["ID"];?></td>                       
                        <td><a href="chater.php?id2=<?php echo $row["ID"]?>&pre2=<?php echo $row["nom"] ?> "><img width="20 height="20" src="img/chater.png" alt=""  ></a></td>
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