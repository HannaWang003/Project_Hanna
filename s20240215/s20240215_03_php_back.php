<?php
header('Access-Control-Allow-Origin: *');
$data = [
    's1' => 's1',
    's2' => 's2',
    's3' => 's3',
];
echo json_encode($data);
