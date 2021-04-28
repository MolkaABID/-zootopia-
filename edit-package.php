<HTML>
<head>
</head>
<body>
<?PHP
session_start();

  include_once("C:/xampp/htdocs/ZOOTOPIA/app/core/Package.php");

if (isset($_GET['code'])){
	$PackageC=new PackageC();
    $result=$PackageC->RCPR_Package($_GET['code']);
	foreach($result as $row){
		$code=$row['CODE'];
		$nom=$row['NOM'];
		$qte=$row['QUANTITE'];
		$alerte=$row['ALERTE'];
		$prix=$row['PRIX'];
		$date=$row['DATE_ARV'];
		$type=$row['TYPE'];
		$image=$row['IMAGE'];
		$description=$row['DESCRPT'];

?>







/*
html code 
*/






<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Package=new Package($_POST['code'],$_POST['qte'],$_POST['nom'],$_POST['date'],$_POST['prix'],$_POST['alerte'],$_POST['type'],$_POST['image'],$_POST['description']);
	$PackageC->Edit_Package($Package,$_POST['code_ini']);

	header('Location: packages.php');
	exit();

}
?>
</body>
</HTMl>
