<?php 
require 'connexion.php';
session_start();
$id1 = $_SESSION['userid'];
$id2 = $_GET["id2"]; 
$pre2 = $_GET["pre2"]; 
$test="";


?>
<script>
clearTextArea() ;
</script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
        <title>Chat</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
        <title>Chat</title>
        <link rel="stylesheet" type="text/css" href="fichierchater.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
	
	
	</head>
	<!--Coded With Love By Mutiullah Samim-->
	<body>
	<div id="message_table"></div>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">

						
						<?php  
						$sql2="SELECT * FROM personne WHERE (personne.ID  IN (SELECT friend.idrec FROM friend WHERE friend.idemet ='$id1' AND friend.etat=1) or personne.ID IN (SELECT friend.idemet FROM friend WHERE friend.idrec ='$id1' AND friend.etat=1)) AND (personne.ID <> '$id1')";  
						$result2 = mysqli_query($conn, $sql2);
						while($row2 = mysqli_fetch_assoc($result2)) 
            				{
						?>
						<li class="active">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<?php
									$p1=$row2['ID'];
									$p2=$row2['nom'];
								?>
								<a href="chater.php?id2=<?php echo $p1 ?>&pre2=<?php echo $p2 ?>" >
								<div class="user_info">
									<span> <?php echo $row2['nom']; ?> </span>
									<!--<p>Kalid is online</p> -->
								</div>
								</a>
							</div>
						</li>
								<?php } ?>

						</ui>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Chat with <?php echo $pre2 ?> </span>
								<!--	<p>1767 Messages</p> -->
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>


						<?php
                            $sql="SELECT * FROM `conv` WHERE idemet IN ('$id1','$id2') AND idrec IN ('$id1','$id2')";
                            $result = mysqli_query($conn, $sql);
						?>

						<div class="card-body msg_card_body">

							<?php
								    while($row = mysqli_fetch_assoc($result)) 
										{
											if($row["idemet"]==$id2)
													{
							?>
														<div class="d-flex justify-content-start mb-4">
								
															<div class="msg_cotainer">
															<?php echo $row["message"]?>
																<!--<span class="msg_time">8:40 AM, Today</span>-->
															</div>
														</div>
											<?php   } ?>

							<?php 			if($row["idemet"]==$id1)
                                                    { ?>
														<div class="d-flex justify-content-end mb-4">
															<div class="msg_cotainer_send">
															<?php echo $row["message"]?>
																<!--<span class="msg_time_send">8:55 AM, Today</span>-->
															</div>															
														</div>
											  <?php }	?>

									<?php }	?>						
		<form method="post" action="envoyer_msg.php?id2=<?php echo $id2 ;?>&pre2=<?php echo $pre2 ;?>">		
						    <div class="card-footer">
							<div class="input-group">																												
							</div>
							
						    </div>
					    </div>

						<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<input name="textarea" id="textarea" class="form-control type_msg" autocomplete="off" placeholder="Type your message...">
								<div class="input-group-append">
									<button class="input-group-text send_btn" type="submit" name="submit"  ><i class="fas fa-location-arrow"></i></button>
								</div>					
								
								
							
								
							</div>
		</form>
						

					
				</div>
			</div>
		</div>
		</div>
	</body>
</html>

<?php
  /*if (isset($_POST['submit'])) {

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["textarea"];
	if (strlen($text) != 0) 
	{
		echo "You entered: " . $text;
		$sql="INSERT INTO `conv`(`idemet`, `idrec`, `message`, `etat`) VALUES ('$id1','$id2','$text', 0)";
		$result=$conn->query($sql);
		$conn->close();
		$test="";	
		?>
		<script>
			document.getElementById("textarea").value = "";
		</script>
		<?php
		
	}
	
    ?>

<?php

  }}*/
  
?>

<script>
function clearTextArea() {
  document.getElementById("textarea").value = "";
}
</script>
<a href="listeamis.php"><img width="20" height="20" src="img/back.jpg" alt=""  ></a>  
