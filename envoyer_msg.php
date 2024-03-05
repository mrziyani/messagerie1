
<?php

session_start();
$id1 = $_SESSION['userid'];
$id2 = $_GET["id2"]; 
$pre2 = $_GET["pre2"]; 		
$message = $_POST['textarea'];
			require 'connexion.php';  
			if (strlen($message) != 0) 
	{
    		$sql="INSERT INTO `conv`(`idemet`, `idrec`, `message`, `etat`) VALUES ('$id1','$id2','$message',0) ";
    		$result=$conn->query($sql);
			echo $message;
	}
         header("Location: chater.php?id2=$id2&pre2=".$pre2);

			
		
	?>