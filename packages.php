<?PHP
session_start();


include "../../../config.php";

include_once("C:/xampp/htdocs/ZOOTOPIA/app/core/Package.php");
$PackageC=new PackageC();
$listePackages=$PackageC->Display_Packages();