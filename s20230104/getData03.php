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
$option = $data['option'];
$result = 0;
switch ($option) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;

    default:
        $result = "option 請輸入+ - * /";
        break;
}
$myArr = [
    'num1' => $num1,
    'num2' => $num2,
    'result' => $result,
];
// dd($myArr);
echo json_encode($myArr);
    // echo "123";
    // $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    // echo json_encode($data);
