<?php 
include "../config1.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$zoo_and_park_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `client` WHERE `id`='$zoo_and_park_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		header("location:users.php") ; 
		
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>