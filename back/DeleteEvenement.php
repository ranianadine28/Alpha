<?PHP
include "../Core/EvenementC.php";
include "../Entities/Evenement.php";

$evenementC=new EvenementC();

	

	$evenementC->supprimerEvenement($_GET['id_evenement']);
	
	header("Location: index.php");


?>