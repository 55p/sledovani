<?php

$res = opendir(dirname(__FILE__ ) . '/obehy');
$predpoklady = array();
  
while ($file = readdir($res)) {
  if ($file == '.') continue;
  if ($file == '..') continue;
  
  $obehy[] = $file;
}

foreach ($obehy as $file) {
  include dirname(__FILE__ ) . '/obehy/'.$file;
}

?>
