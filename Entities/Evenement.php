<?PHP
class evenement{
	private $id_evenement;
	private $name;
	private $date;
	private $nb_participants;
    private $image;
	private $description;
	private $nb_places;
	function __construct($id_evenement,$name,$date,$nb_places,$image,$description,$nb_participants){
		$this->id_evenement=$id_evenement;
		$this->name=$name;
		$this->date=$date;
		$this->nb_places=$nb_places;
        $this->image=$image;
		$this->description=$description;
		$this->$nb_participants=$nb_participants;

	}
	
	function getid_evenement(){
		return $this->id_evenement;
	}
	function getname(){
		return $this->name;
	}
	function getdate(){
		return $this->date;
	}
	function getnb_participants(){
		return $this->nb_participants;
	}
	
	function getnb_places(){
		return $this->nb_places;
	}
	function getimage(){
		return $this->image;
	}
	function getdescription(){
		return $this->description;
	}
	function setid_evenement($id_evenement){
		$this->id_evenement=$id_evenement;
	}
	function setname($nom_produit){
		$this->nom_produit;
	}
	function setdate($date){
		$this->date=$date;
	}
	function setnb_participants($nb_participants){
		$this->nb_participants=$nb_participants;
	}
	function setimage($image){
		$this->image=$image;
	}
	function setdescription($description){
		$this->description=$description;
	}
	
	function setnb_places($nb_places){
		$this->nb_places=$nb_places;
	}
}

?>