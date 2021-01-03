<?PHP
require_once "../config.php";


class CommentaireC {

	function AjouterCom($event){
        $sql="insert into comment (description,id_evenement,id_user) values (:description,:id_evenement,:id_user)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_user=$event->getid_user();
        $description=$event->getDescription();
        $id_evenement=$event->getId_evenement();

		$req->bindValue(':id_user',$id_user);
        $req->bindValue(':description',$description);
        $req->bindValue(':id_evenement',$id_evenement);

        $req->execute();
           }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function supprimerCom($id_com){
		$sql="DELETE FROM comment where id_com= $id_com";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
        
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/***/
    function AfficherCom($id_evenement){
		$sql="SELECT * from comment where id_evenement= $id_evenement";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
       return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function RecupererCom($idcom){
		$sql="SELECT * from comment where id_com=$idcom ";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
       return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function modifierCommentaire($com,$id){
		$sql="UPDATE comment SET  description=:description WHERE id_com=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    
       
        $description=$com->getDescription();
        $req->bindValue(":description",$description);
        $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
		
    }

}

?>