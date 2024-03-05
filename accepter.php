<?php
    require 'connexion.php';
    session_start();
    $id1 = $_SESSION['userid'];
    $id2 = $_GET['id2']; 
    $sql="UPDATE `friend` SET`etat`=1 WHERE idemet='$id2' AND idrec='$id1'";
    $resultat = $conn->query($sql); 
    if($resultat)
    {
        header("Location: notif.php");
    }
    else{
        echo "echec";
    }
?>
