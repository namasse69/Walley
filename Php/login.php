<?php


class dbConnect{

	private $_name = $_GET['name'];
	private $_pass = $_GET['pass'];
	private $_dbConnect = null;
	private $_host = "localhost";
	private $_login = "root";
	private $_$password = "";
	private $_$dbname = "walley";
	
	function __construct(){
		$_dbConnect = new PDO("mysql:host=".$host.";dbname=".$dbname."", $login, $password);
		
	
	}
	
	fuction GetUserByName($name){
		$req = $db->prepare ('SELECT * FROM utilisateur  WHERE name =:name');

		$req->execute(
			array(
					'name' => $name
				)
			);
			$response = $req->fetch();
			var_dump($req);
						
			if ($response){
						if ($response['pass'] == $pass)
						{
							echo "Bienvenue ".$response['name'];
							//header("Location: acceuil.php");
							
						}else{
							echo "Mauvais mot de passe";
						}
			}else{

				echo "mauvais identifiant";
			}
	}

}

 $db = new dbConnect();
 $db->GetUserByName();

?>