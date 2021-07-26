<?php

$con= mysqli_connect('localhost','root','','finales') or die('Connection error to the server');

$sql= "INSERT INTO alex VALUES('".$_POST["name"]."','".$_POST["last_name"]."','".$_POST["email"]."','".$_POST["city"]."')";

$result= mysqli_query($con, $sql) 
or die ('Error in the query database');

mysqli_close($con);

echo 'The full name introduced is: '.$_POST["name"].$_POST["last_name"].'<br>';
echo 'and the email address is: '.$_POST["email"]; '<br>';
echo 'and the name of the city is: '.$_POST["city"];

?>


