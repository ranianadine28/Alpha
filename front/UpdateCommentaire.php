<?PHP
include "../Entities/Commentaire.php";
include "../Core/CommentaireC.php";
session_start();
$CommentaireC=new CommentaireC();


     
      
$commentaire=new Commentaire($_POST["id_com"],$_POST["description"],$_POST["id_evenement"],$_SESSION["id"]);
//Partie2

var_dump($commentaire);
//Partie3
$commentaireC=new CommentaireC();
session_start();
$id=$_POST["id_evenement"];
$commentaireC->modifierCommentaire($commentaire,$_POST['id_com']);

header("Location: DetailEvenement.php?id_evenement=$id");
    





?>