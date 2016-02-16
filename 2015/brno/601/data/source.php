<?php
 header('Content-Type: text/html; charset=utf-8');

ini_set('max_execution_time', 600);

//include_once '../../oop.php';
include "../../funkce.php";
include "../data.php";

getTS(time());

foreach ($TS as $skupina) {
  foreach ($skupina as $den) {
    foreach ($den as $vlak) {
      echo intval($vlak);
      echo ": ";
      $omezeni = najdiOmezeni($vlak, $skupina);
      echo isset($omezeni) ? $omezeni->text : "";
      echo ": ";
      $trasa = najdiTrasu($vlak, $skupina);
      echo implode(",", $trasa);
      echo "<br>";
    }
    echo "<br>";
  }
  echo "<br>";
}
