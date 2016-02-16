<?php

$res = opendir(dirname(__FILE__ ) . '/predpoklady');
$predpoklady = array();
  
while ($file = readdir($res)) {
  if ($file == '.') continue;
  if ($file == '..') continue;
  
  $data = explode('_', $file);
  
  list(, $ts, $Y, $m, $d) = $data;
  
  $time = mktime(0,0,0,$m,$d,$Y);
  
  $predpoklady[$ts][$time] = $file;
}
//var_dump($predpoklady);
foreach ($predpoklady as $ts => $times) {
  rsort($times);
  $predpoklady[$ts] = $times;
}

foreach ($predpoklady as $ts => $data) {
  $file = reset($data);
  include dirname(__FILE__ ) . '/predpoklady/'.$file;
}

?>
