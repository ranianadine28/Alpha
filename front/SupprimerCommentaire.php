<?PHP
include "../Core/CommentaireC.php";
include "../Entities/Commentaire.php";

$comC=new CommentaireC();

	
session_start();

	$comC->supprimerCom($_GET['id_com']);
	$id=$_GET['id_evenement'];
	header("Location: DetailEvenement.php?id_evenement=$id");



?>