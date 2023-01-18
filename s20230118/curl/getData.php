<?php 
//init curl
$ch = curl_init();
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , "https://opendata.hccg.gov.tw/API/v3/Rest/OpenData/004E0547C834932D?take=10&skip=0");
//設定AGENT
// curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
//執行，並將結果存回

// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
// var_dump($result);
//關閉連線
curl_close($ch);

// var_dump(json_decode($result, true));
