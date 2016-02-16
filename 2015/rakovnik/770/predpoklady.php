<?php
$res = opendir(dirname(__FILE__ ) . '/predpoklady');
$predpoklady = array();

$actual = time();

while ($file = readdir($res)) {
  if ($file == '.') continue;
  if ($file == '..') continue;
  
  $data = explode('_', $file);
  
  list($predp, $ts, $Y, $m, $d) = $data;
  if ($predp !== 'predpoklady') continue;
  
  $time = mktime(0,0,0,$m,$d,$Y);
  
  if ($time > $actual) {
    continue;
  }
  
  $predpoklady[$ts][$time] = $file;
}

foreach ($predpoklady as $ts => $times) {
  rsort($times);
  $predpoklady[$ts] = $times;
}

foreach ($predpoklady as $ts => $data) {
  $file = reset($data);
  include dirname(__FILE__ ) . '/predpoklady/'.$file;
}

?>
