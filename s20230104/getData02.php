<?php
function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$data = $_GET;
$num1 = $data['num1'];
$num2 = $data['num2'];
$result = $num1 + $num2;
$myArr = [
    'num1' => $num1,
    'num2' => $num2,
    'result' => $result,
];
echo json_encode($myArr);
