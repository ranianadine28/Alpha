<?php

require_once "../config.php";

class RatingC
{

  

    function getEvenement($id_evenement)
    {
        $sql = "SELECT * FROM evenement where id_evenement=$id_evenement ORDER BY id_evenement DESC";
        
        $db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function getUserRating($userId, $evenementId)
    {
        $average = 0;
        $sql = "SELECT rating FROM rating WHERE user_id = $userId and evenement_id = $evenementId ";
        $db = config::getConnexion();
		try{
        $result=$db->query($sql);
        $num_of_rows = $result->rowCount() ;

        if ($num_of_rows > 0) {
            foreach ($result as $row) {
                $average = round($row["rating"]);
            } // endForeach
        } // endIf
        return $average;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
    }
    function getAverageRating( $evenementId)
    {
        $average=$somme = 0;
        $sql = "SELECT rating FROM rating WHERE  evenement_id = $evenementId ";
        $db = config::getConnexion();
		try{
        $result=$db->query($sql);
        $num_of_rows = $result->rowCount() ;
            $i=0;
        if ($num_of_rows > 0) {
            foreach ($result as $row) {
                $i++;
                $somme += $row["rating"];

            } // endForeach
            $average=ceil($somme/$i);
        } // endIf
        return $average;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	
    }
    function getTotalRating($evenementId)
    {
        $sql = "SELECT * FROM rating WHERE evenement_id = $evenementId";
        $db = config::getConnexion();
		try{
        $liste=$db->query($sql);
        $num_of_rows = $liste->rowCount() ;
        return $num_of_rows;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function isUserRatingExist($userId, $evenement_id)
    {
        $sql = "select * from rating where user_id =$user_id and evenement_id = $evenement_id";
        $db = config::getConnexion();
		try{
        $liste=$db->query($sql);
        $num_of_rows = $liste->rowCount() ;
        return $num_of_rows;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function addRating($userId, $evenement_id, $rating)
    {
        $insertQuery = "INSERT INTO rating(userId,evenement_id, rating) VALUES ($userId,$evenement_id,$rating) ";
        
        $db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
       
        $req->execute();
           }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
}
