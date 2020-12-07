<?PHP
require_once "../config.php";
class EvenementC {


	function ajouterEvenement($evenement){
		$sql="insert into evenement (name,date,nb_participants,image,description,delai,nb_places) values (:name,:date, 0,:image,:description,'true',:nb_places)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $name=$evenement->getname();
        $date=$evenement->getdate();
        $nb_places=$evenement->getnb_places();
        $image=$evenement->getimage();
        $description=$evenement->getdescription();
		$req->bindValue(':name',$name);
		$req->bindValue(':date',$date);
		$req->bindValue(':nb_places',$nb_places);
        $req->bindValue(':image',$image);
        $req->bindValue(':description',$description);
        $req->execute();
           }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
    function afficherEvenements(){
		$sql="SElECT * From evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }	
    function afficherEvenements1(){
		$sql="SElECT * From evenement where delai= 'true'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }	
    function supprimerEvenement($id){
		$sql="DELETE FROM evenement where id_evenement= :id_evenement";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_evenement',$id);
		try{
            $req->execute();
            header('Location: afficherEvenement.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/***/
    
    function modifierEvenement($evenement,$id){
		$sql="UPDATE evenement SET  name=:nom, date=:date, nb_places=:nb_places, image=:image, description=:description WHERE id_evenement=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    
        $nom=$evenement->getname();
        $date=$evenement->getdate();
        $nb_places=$evenement->getnb_places();
        $image=$evenement->getimage();
        $description=$evenement->getdescription();
       

        

    
        
    
		
        $req->bindValue(':nom',$nom);
        $req->bindValue(':date',$date);
        $req->bindValue(":nb_places",$nb_places );
        $req->bindValue(":image",$image);
        $req->bindValue("description",$description);


            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
		
    }
    function modifierEvenementDelai($evenement,$id){
		$sql="UPDATE evenement SET  delai='false' WHERE id_evenement=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    
		    $datas = array(':id'=>$id);
    
		
		$req->bindValue(':id',$id);
       

            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
	
    }
    function modifierEvenementPlace($evenement,$id,$placesdemande){
		$sql="UPDATE evenement SET  nb_places=:nb_places, nb_participants=:nb_participants WHERE id_evenement=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        $nb_participants=$evenement->getnb_participants()+$placesdemande;
        $nb_places=$evenement->getnb_places()-$placesdemande;

    
    
		
        $req->bindValue(":nb_participants",$nb_participants );
        $req->bindValue(":nb_places",$nb_places );


            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
	
    }
    function modifierEvenementPlace2($evenement,$id,$placesdemande){
		$sql="UPDATE evenement SET  nb_places=:nb_places, nb_participants=:nb_participants WHERE id_evenement=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        
        $nb_places=$evenement->getnb_places()+$placesdemande;
        $nb_participants=$evenement->getnb_participants()-$placesdemande;

    
    
		
        $req->bindValue(":nb_participants",$nb_participants );
        $req->bindValue(":nb_places",$nb_places );


            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
	
	}
	function recupererEvenement($id_evenement){
		$sql="SELECT * from evenement where id_evenement=$id_evenement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>