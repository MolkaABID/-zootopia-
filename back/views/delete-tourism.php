<?php 
include "../config1.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$eco_tourism_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `eco_tourism` WHERE `id`='$eco_tourism_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		header("location:show-tourism.php") ; 
		
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>