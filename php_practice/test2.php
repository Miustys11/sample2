<?php
$sam = 0;

for ($i = 0; $i <= 10000; $i++) {
    $sam += $i;
}

echo $sam;

//3
$fruits = array("apple","grape","orange","peach","strowberry");

foreach ($fruits as $fruit) {
    echo "要素は" . $fruit;
    echo "\n";
}

//4
$start = 1;
$end = 100;

for ($i = $start; $i <= $end; $i++) {

  if ($i % 5 === 0) {
    echo $i;
    echo "\n";
  }
}
