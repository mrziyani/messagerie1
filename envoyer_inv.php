<?php
    require 'connexion.php';
    session_start();
    $id1 = $_SESSION['userid'];
    $id2 = $_GET['id2']; 
    $sql="INSERT INTO `friend`(`idemet`, `idrec`, `etat`) VALUES ( '$id1' , '$id2' , 0 )";
    $result=$conn->query($sql);
    //$sql2="INSERT INTO `friend`(`idemet`, `idrec`, `etat`) VALUES ( '$id2' , '$id1' , 0 )";
    //$result2=$conn->query($sql2);
    if($result /*and $result2*/)
    {
        header("Location: liste.php");
    }
    else{
        echo "echec";
    }
?>