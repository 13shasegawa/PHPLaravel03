<?php
$name = "Shiori Hasgawa";
if($name === "Shiori Hasegawa") {
  echo "私は" . $name . "です";
} else {
  echo  "あなたの名前ではありません";
}

$total = 0;

for($i=1; $i<=10000; $i++){
  $total +=$i;
}
echo $total;

$fruits = array("pear","plum","apple","lemon","grape");

foreach($fruits as $fruit){
  echo $fruit;
  echo "\n";
}

$start = 1;
$end = 100;

for($i=$start; $i<=$end; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>
