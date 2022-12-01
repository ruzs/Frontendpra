<?php
function dd($data){
  echo"<pre>";
  print_r($data);
  echo"</pre>";
}
$multi =[
  [
    'name' => 'iphone14',
    'price' => '25800',
    'location' => ['北','中','南']
  ],[
    'name' => 'Zenfone9',
    'price' => '20500',
    'location' => ['中','南']
  ],[
    'name' => 'Pixel7',
    'price' => '17500',
    'location' => ['北','中']
  ],[
    'name' => 'ZFlip4',
    'price' => '30800',
    'location' => ['北','南']
  ],[
    'name' => 'Xperia1iv',
    'price' => '37990',
    'location' => ['北','中','南']
  ]
];
  dd($multi);
  foreach($multi as $key =>$value){
    echo'<hr>';
    dd($value);
  }
?>