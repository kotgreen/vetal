<?php

$data = file_get_contents('php://input');
$input = json_decode( $data, TRUE );

$sum = $input["a"] + $input["b"];

echo json_encode(['sum' => $sum]);

?>
