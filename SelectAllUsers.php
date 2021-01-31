<?php 
require_once 'Connexion.php'; 


$query = " SELECT * FROM user_details ";

$result = mysqli_query($con,$query);

$array = array();

while ($row  = mysqli_fetch_assoc($result))
{
	$array[] = $row; 
}


echo ($result) ? 
json_encode(array("code" => 1, "result"=>$array)) :
json_encode(array("code" => 0, "message"=>"Data not found !"));


?>