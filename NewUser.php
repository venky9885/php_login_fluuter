<?php
 require_once 'Connexion.php';



                                    $username=$_POST['username'];
                                    $firstname=$_POST['firstname'];
                                    $lastname=$_POST['lastname'];
                                    $gender=$_POST['gender'];
                                    $password=$_POST['password'];
  
$query="INSERT INTO user_details(username, first_name, last_name, gender, password)
	 VALUES ('$username','$firstname','$lastname','$gender','$password')";
  	$exeQuery = mysqli_query($con, $query) ;

	 if($exeQuery){
	 echo (json_encode(array('code' =>1, 'message' => 'Ajouter avec succée')));
}else {echo(json_encode(array('code' =>2, 'message' => 'Non Terminer')));
 }


 ?>