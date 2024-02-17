<?php
function dd($arry)
{
    echo "<pre>";
    print_r($arry);
    echo "</pre>";
}

$mobileArr = [
    [
        'id' => 1,
        'model' => 'iphone10',
        'price' => '10000',
        'location' => ['taipei']
    ], [
        'id' => 2,
        'model' => 'iphone11',
        'price' => '20000',
        'location' => ['taipei', 'taithung']
    ], [
        'id' => 3,
        'model' => 'iphone12',
        'price' => '30000',
        'location' => ['kaoshoung']
    ], [
        'id' => 4,
        'model' => 'iphone13',
        'price' => '40000',
        'location' => ['taipei', 'taithung', 'kaoshoung']
    ],
];
// dd($ios);
// header("Content-Type: application/json;charset:utf-8");
// dd(json_encode($ios));
echo json_encode($mobileArr);
