<?php 

class dbConnect{

	private $_dbConnect = null;
	private $_host = "localhost";
	private $_login = "root";
	private $_password = "";
	private $_dbname = "fdsfddfssdsf";
	
	function __construct()
	{
		$this->_dbConnect = new PDO("mysql:host=".$this->_host.";dbname=".$this->_dbname."", $this->_login, $this->_password);
	}
	
	
	function getHost(){
		return $this->_host;
	}
	
	
	function setHost($host){
		return $this->_host = $host;
	}
	
	
	
	function GetUserByName($name, $pass)
	{
		$req = $this->_dbConnect->prepare ('SELECT * FROM inscription  WHERE userMail =:Mail');

		$req->execute(
			array(
					'Mail' => $Mail
				)
			);
			$response = $req->fetch();
						
			if ($response){
						if ($response['userPass'] == $Pass)
						{
							echo "Bienvenue ".$response['Mail'];
							//header("Location: acceuil.php");
							
						}else{
							echo "Mauvais mot de passe";
						}
			}else{

				echo "mauvais identifiant";
			}
	}

}