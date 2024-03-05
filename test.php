<?php
require 'connexion.php';


//fetch data from message table
$sql = "SELECT * FROM conv ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $message = $row["message"];
        //$time = $row["time"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!--HTML Code-->
<!DOCTYPE html>
<html>
<head>
	<title>Show New Data</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			setInterval(function(){
				$.ajax({
					url: "getdata.php",
					type: "POST",
					success: function(data){
						$("#message").html(data);
					}
				});
			}, 300);
		});
	</script>
</head>
<body>
	<h1>New Data:</h1>
	<div id="message">
		<?php echo $message; ?>
	</div>
	<div id="time">
		<?php //echo $time; ?>
	</div>
</body>
</html>