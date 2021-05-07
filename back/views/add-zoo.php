<?php
include "../config1.php";


$name = $_REQUEST['nom'];
$desc = $_REQUEST['desc'];
$city = $_REQUEST['city'];
$pic = $_REQUEST['image'];
$type = $_REQUEST['type'];
$sql = 'INSERT INTO zoo_and_park VALUES(default,"' . $name . '","' . $desc . '","' . $city . '","' . $type . '","' . $pic . '");';
$result = $conn->query($sql);

if ($result == TRUE) {
    header("location:add-item.html");
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
