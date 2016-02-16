<?php
ini_set('max_execution_time', 600);

include "../../funkce.php";
include "../data.php";

define ('DATUM', "1.9.2015");
$TS = getTS(strtotime(DATUM));

$time = time();
for ($i = 0; $i < 20; $i++) {
  
  $jedou = array();
  $vicekrat = array();
  
  foreach ($TS as $obeh) {
    foreach ($obeh as $vlaky) {
      foreach ($vlaky as $jedenVlak) {
        $omezeniVlaku = najdiOmezeni($jedenVlak, $obeh);
        if (jedeVlak($jedenVlak, $omezeniVlaku, date("j.n.Y", $time))) {
          $jedou[] = intval($jedenVlak);
        }
      }
    }
  }
  
  
  $limit = count($jedou);
  for ($j = 0; $j < $limit; $j++) {
    for ($k = $j+1; $k < $limit; $k++) {
      if ($jedou[$j] == $jedou[$k]) {
        $vicekrat[] = $jedou[$j];
      }
    }
  }
  if (count($vicekrat) > 0) {
  echo "<p>";
    echo date("j.n.Y", $time);
    echo ": ";
    foreach ($vicekrat as $vlak) {
      echo $vlak;
      echo ", ";
    }
  echo "</p>";
  } 
  unset($vicekrat);
  unset($jedou);
  
  $time += (24*3600);
}

?>
