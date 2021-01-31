<?php
require_once("db_config.php");
//signup.php
$email = $_POST["email"];
$name = $_POST["name"];
$pass = $_POST["pass"];

$query = "SELECT * FROM login_flutter WHERE email LIKE $email";
$res = mysqli_query($con,$query);
$data = mysql_fetch_array($res);

if($data[0] > 1){
    //acc exists
    echo json_encode("account already exists");
    
}else{
    //create acc
    $query = "INSERT INTO login_flutter(id,name,email,pass) VALUES (null, '$name,"$email","$pass");
    $res = mysqli_query($query);
    
    if($res){
        echo json_encode("true");
        
    }else{
        echo json_encode("false");
    }
}

?>
