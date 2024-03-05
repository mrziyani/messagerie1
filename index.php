<!DOCTYPE html>
<html>
<head>
	<title>Display Data</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			// Refresh the data every 5 seconds
			setInterval(function() {
				$.ajax({
					url: "get_data.php",
					type: "POST",
					success: function(data) {
						$("#data_table").html(data);
					}
				});
			},200); // 5 seconds
		});
	</script>
</head>
<body>
	<h1>Data Table</h1>
	<table id="data_table">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
		<!-- Data will be inserted here -->
	</table>
</body>
</html>