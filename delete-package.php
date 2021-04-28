<?PHP
  include_once("C:/xampp/htdocs/ZOOTOPIA/app/core/Package.php");

$produitC=new PackageC();
if (isset($_POST["code"])){
	$produitC->Delete_Package($_POST["code"]);
	header('Location: products.php');
}

?>