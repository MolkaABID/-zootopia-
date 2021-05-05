<?php 
include "../config1.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$age = $_POST['age'];
		$num = $_POST['num'];
		$email = $_POST['email'];
		
		

		// write the update query
		$sql = "UPDATE `client` SET `nom`='$nom',`prenom`='$prenom',`email`='$email',`age`='$age',`num`='$num' WHERE `id`='$id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			header("location:users.php") ; 
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `client` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$nom = $row['nom'];
			$prenom = $row['prenom'];
			$email = $row['email'];
			$age = $row['age'];
			$num = $row['num'];
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