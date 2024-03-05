<?php
// Select data from the database
require 'connexion.php';
$sql = "SELECT * FROM personne";
$result = $conn->query($sql);

// Generate an HTML table with the data
if ($result->num_rows > 0) {
	echo "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nom"]. "</td><td>" . $row["prenom"]. "</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>No data found</td></tr>";
}

$conn->close();
?>

?>