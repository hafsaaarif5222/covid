<?php
$servername = "localhost";
$username= "root";
$password = "";
$db_name= "covid_vaccination_system";

$connectivity = mysqli_connect($servername, $username, $password, $db_name);

if($connectivity == TRUE){
    echo '<script>alert("DataBase Connected Successfully")</script>';

}else{
    echo '<script>alert("Not Connected! TRY AGAIN")</script>';
}




?>