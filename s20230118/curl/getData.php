<?php
function dd($array)
{
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
}


//init curl
$ch = curl_init();
//curl_setopt可以設定curl參數

//設定url
curl_setopt($ch, CURLOPT_URL, "https://opendata.hccg.gov.tw/API/v3/Rest/OpenData/004E0547C834932D?take=10&skip=0");

// 加入User Agent 模擬browser行為
// curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");

// CURLOPT_RETURNTRANSFE
// 關掉 exec 直接顯示
// 預設是false 顯示
// true 關掉
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
// var_dump($result);
// echo $result;
dd($result);
$json_decode = json_decode($result);
dd($json_decode);

//關閉連線
curl_close($ch);

// var_dump(json_decode($result, true));
