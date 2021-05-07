<?php 
include "../config1.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		$city = $_POST['city'];
		$type = $_POST['type'];
		$image = $_POST['image'];
		
		

		// write the update query
		$sql = "UPDATE `zoo_and_park` SET `name`='$name',`description`='$description',`city`='$city',`type`='$type',`image`='$image' WHERE `id`='$id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header("location:show-zoo.php") ; 
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$zoo_and_park_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `zoo_and_park` WHERE `id`='$zoo_and_park_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$name = $row['name'];
			$description = $row['description'];
			$city = $row['city'];
			$type = $row['type'];
			$image = $row['image'];
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