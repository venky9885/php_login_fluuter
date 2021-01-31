<?php
 require_once 'Connexion.php';

  $user_id=$_POST['iduser'];
  $username =$_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname =$_POST['lastname'];
  $gender =$_POST['gender'];
 
  
$query="UPDATE user_details SET username='$username',
			     first_name='$firstname',
			     last_name='$lastname',
			     gender='$gender'
                 
				 WHERE user_id='$user_id'";

 
   $exeQuery = mysqli_query($con, $query) ;


	 if($exeQuery){
	 echo (json_encode(array('code' =>1, 'message' => 'Modifier avec succee')));
}else {echo(json_encode(array('code' =>2, 'message' => 'Modification Non Terminer')));
 }


 ?>