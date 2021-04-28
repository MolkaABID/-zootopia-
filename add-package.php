<?PHP
include_once("C:/xampp/htdocs/ZOOTOPIA/app/core/Package.php");



if (isset($_POST['code']) and isset($_POST['nom']) and isset($_POST['qte']) and isset($_POST['alerte']) and isset($_POST['prix']) and isset($_POST['date']) and isset($_POST['type'])) {
	if (isset($_POST['image']) and isset($_POST['description'])) {

		$Package = new Package($_POST['code'], $_POST['qte'], $_POST['nom'], $_POST['date'], $_POST['prix'], $_POST['alerte'], $_POST['type'], $_POST['image'], $_POST['description']);

	

		if (!ctype_alpha($_POST['nom'])) {
?>
			<script>
				alert('Nom ne peut pas contenir des numeros!');
			</script>
		<?php
			header('Location: products.php');
		} else if (($_POST['qte']) < 0) {
		?>
			<script>
				alert('Quantité negative!');
			</script>
		<?php
			header('Location: products.php');
		} else if (($_POST['prix']) < 0) {
		?>
			<script>
				alert('Prix negatif!');
			</script>
		<?php
			header('Location: products.php');
		} else if (($_POST['date']) > date("Y/m/d")) {
		?>
			<script>
				alert('Date invalide!');
			</script>
		<?php
		} else {
		?>
			<script>
				alert('Package ajouté avec succes!');
			</script>
<?php
			$PackageC = new PackageC();
			$PackageC->Add_Package($Package);
			header('Location: products.php');
		}
	}
}
//*/

?>