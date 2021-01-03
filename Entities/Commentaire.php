<?PHP
class Commentaire{
	private $id_com;
    private $description;
	private $id_evenement;
	private $id_user;


	function __construct($id_com,$description,$id_evenement,$id_user){

		$this->id_evenement=$id_evenement;
        $this->description=$description;
        $this->id_com=$id_com;
       
		$this->id_user=$id_user;
	}
	function getId_evenement(){
		return $this->id_evenement;
    }
    function getDescription(){
		return $this->description;
	}
	function getId_com(){
		return $this->id_com;
	}
	function getId_user(){
		return $this->id_user;
	}
	
	function setId_evenement($id_evenement){
		$this->id_evenement=$id_evenement;
	}
	function setDescription($description){
		$this->description=$description;
    }
    function setId_com($id_com){
		$this->id_com=$id_com;
	}
		function setId_user($id_user){
		$this->id_user=$id_user;
	}
	
}
?>