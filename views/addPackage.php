<?php
    require_once '../Controller/packageC.php';
    require_once '../Model/package.php';

    $packageC =  new  packageC();

    if (isset($_POST['nom']) && isset($_POST['localisation']) &&isset($_POST['date']) &&isset($_POST['prix']) &&isset($_POST['type']) &&isset($_POST['image']) &&isset($_POST['description'])) {
        $package = new Package( $_POST['nom'] ,  $_POST['localisation'] , $_POST['date'] , $_POST['prix'], $_POST['type'], $_POST['image'], $_POST['description']);
        
        $packageC->addPackage($package);

        header('Location:show Packages.php');
    }
?>
