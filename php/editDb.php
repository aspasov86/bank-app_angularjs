<?php

require_once "connection.php";

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$name = $data->name;
$deposit = $data->deposit;
$card = $data->cCard;

$sql = "UPDATE accounts SET name ='$name', deposit='$deposit', cCard='$card' WHERE id='$id'";

$query = mysqli_query($db,$sql);

if ($query) {
  echo '200';
}else{
  echo "502";
}
