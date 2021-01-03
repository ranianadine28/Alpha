<?PHP
include "../Entities/Commentaire.php";
include "../Core/CommentaireC.php";
session_start();


if ( isset($_POST['description']) )
{
    
  
$com=new Commentaire(1,$_POST['description'],$_POST['id_evenement'],$_SESSION['id']);
//Partie2
$id=$_POST['id_evenement'];
var_dump($com);
//Partie3
$comC=new CommentaireC();
$comC->AjouterCom($com);
header("Location: DetailEvenement.php?id_evenement=$id");
}

?>