<?php
require_once("db_config.php");
//signup.php
$email = $_POST["email"];
$pass = $_POST["pass"];

$query = "SELECT * FROM login_flutter WHERE email LIKE $email";
$res = mysqli_query($con,$query);
$data = mysql_fetch_array($res);


//data[0]=id, data[1]=name, data[2]= emAIL , data[3]= pass
if($data[2] >= 1){
    //acc exists
    echo json_encode("account already exists");
    $query = "SELECT * FROM login_flutter and pass LIKE '$pass'";
    $res = mysqli_query($con,$query);
    $data = mysql_fetch_array($res);
    
    if(data[3] >= 1){
        // pass matched
        echo json_encode("true");
        
    }else{
        //incorrect pass
        echo json_encode("false");
    }
    
}else{
    //not acc exists
     echo json_encode("donthave an account");
}

?>
