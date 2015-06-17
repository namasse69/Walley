<?php

$name = $_GET['name'];
$pass = $_GET['pass'];

$host = "localhost";
$login = "root";
$password = "";
$dbname = "walley";

	try{
		$q = new PDO("mysql:host=".$host.";dbname=".$dbname."", $login, $password);
		
		$req = $q->prepare ('SELECT * FROM utilisateur  WHERE name =:name');

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
	}catch (PDOException $e)
	{
		echo "erreur".$e->getMessage();
	}

?>