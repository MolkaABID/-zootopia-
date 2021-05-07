<?php
include "../config1.php";


$name = $_REQUEST['nom'];
$desc = $_REQUEST['desc'];
$city = $_REQUEST['city'];
$sql = 'INSERT INTO eco_tourism VALUES(default,"' . $name . '","' . $city . '","' . $desc . '");';
$result = $conn->query($sql);

if ($result == TRUE) {
    header("location:add-tourism.html");
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
