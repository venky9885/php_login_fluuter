<?php
 require_once 'Connexion.php';



                                    $userid=$_POST['userid'];
                                   
  
$query="DELETE FROM user_details WHERE user_id='$userid'";
  	$exeQuery = mysqli_query($con, $query) ;

	 if($exeQuery){
	 echo (json_encode(array('code' =>1, 'message' => 'Supprime avec succee')));
}else {echo(json_encode(array('code' =>2, 'message' => 'Non Terminer')));
 }


 ?>