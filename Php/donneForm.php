<?php

// if(isset($_POST['userName']) && isset($_POST['userFirstname']) && isset($_POST['userMail']) && isset($_POST['userMailConfirm']) && isset($_POST['userPass']) && isset($_POST['userPassConfirm'] )) {
    // if(($_POST['userName'] !== '') && ($_POST['userFirstname'] !== '') && ($_POST['userMail'] !== '') && ($_POST['userMailConfirm'] !== '') && ($_POST['userPass'] !== '') && ($_POST['userPassConfirm'] !== '')) {
        // $reponse = 'ok';
    // } else {
        // $reponse = 'Les champs sont vides';
    // }
// } else {
    // $reponse = 'Tous les champs ne sont pas parvenus';
// }
 
// echo $reponse;

	 include ("class/DbConnect.php");

	$db = new dbConnect();
 
	$db->SetInscription($_POST['userName'],$_POST['userFirstname'],$_POST['userMail'],$_POST['userPass']);

?>

