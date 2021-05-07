<?php 
include "../config1.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		
		$city = $_POST['city'];
		$description = $_POST['description'];
		
		

		// write the update query
		$sql = "UPDATE `eco_tourism` SET `name`='$name',`city`='$city',`description`='$description' WHERE `id`='$id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header("location:show-tourism.php") ; 
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$eco_tourism_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `eco_tourism` WHERE `id`='$eco_tourism_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$name = $row['name'];
			
			$city = $row['city'];
			$description = $row['description'];
			$id = $row['id'];
		}

	?>
		
		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>