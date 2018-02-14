<?php

require_once 'connection.php';

$data = json_decode(file_get_contents("php://input"));

$name = $data->name;
$deposit = $data->deposit;
$card = $data->cCard;

// echo $name,$deposit,$cCard;

$sql = "INSERT INTO accounts VALUES (NULL, '$name','$deposit','$card')";

$query = mysqli_query($db,$sql);

if ($query) {
  echo '200';
}else{
  echo '502';
}
