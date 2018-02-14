<?php

require_once "connection.php";

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;

// echo $id;

$sql = "DELETE FROM accounts WHERE id='$id' LIMIT 1";

$query = mysqli_query($db,$sql);

if ($query) {
  echo "200";
}else{
  echo "502";
};
