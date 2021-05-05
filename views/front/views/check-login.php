<?php 
  
session_start();
include "../config1.php";

if (isset($_POST['username']) && isset($_POST['mdp']) && isset($_POST['role'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$mdp = test_input($_POST['mdp']);
	$role = test_input($_POST['role']);

	if (empty($username)) {
		header("Location: login.php?error=User Name is Required");
	}else if (empty($mdp)) {
		header("Location: login.php?error=mdp is Required");
	}else {

		// Hashing the mdp
		$mdp = md5($mdp);
        
        $sql = "SELECT * FROM client WHERE username='$username' AND mdp='$mdp'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['mdp'] === $mdp && $row['role'] == $role) {
        		$_SESSION['nom'] = $row['nom'];
        		$_SESSION['cin'] = $row['cin'];
        		$_SESSION['role'] = $row['role'];
        		$_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
        		$_SESSION['age'] = $row['num'];
                $_SESSION['prenom'] = $row['prenom'];
        		

        		header("Location: logindone.php");

        	}else {
        		header("Location: login.php?error=Incorect login");
        	}
        }else {
        	header("Location: login.php?error=Incorect User name or mdp");
        }

	}
	
}else {
	header("Location: login.php");
}