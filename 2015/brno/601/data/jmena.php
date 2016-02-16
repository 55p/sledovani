<?php
ini_set('max_execution_time', 600);

//include_once '../../oop.php';
include "phpQuery.php";
include "../../funkce.php";
include "../data.php";

header('Content-type: text/html; charset=utf-8');

$vlaky = array();
foreach ($TS as $obeh) {
  foreach ($obeh as $jedenDen) {
    foreach ($jedenDen as $jedenVlak) {
      if ($jedenVlak > 20000) continue;
      //if ($jedenVlak < 1955) continue;
      $vlaky[] = $jedenVlak;
    }
  }
}


sort($vlaky);
//var_dump($vlaky);
//return;
$i = 0;
ob_start();
echo "<div>";
foreach ($vlaky as $key => $value) {
  
  //if ($i++ == 5) break;
  stahniTrasuVlaku($value);
  
  //sleep(1);
}
echo "</div>";
ob_end_flush();

function stahniTrasuVlaku($cisloVlaku) {
  $datum = strtotime("02.02.2015");
  $omezeni = najdiOmezeni($cisloVlaku);
  while (!jedeVlak("", $omezeni, date("j.n.Y", $datum))) {
    date("j.n.Y", $datum);
    $datum += 86400;
  }

  $adr = "http://www.cd.cz/spojeni/Route.aspx?trainnumber=".intval($cisloVlaku)."&date=".date("j.n.Y", $datum);
  
  $opts = array('http' =>
          array(
              'header'  => 'User-agent: Opera/9.80 (J2ME/MIDP; Opera Mini/4.4.29476/32.1151; U; cs) Presto/2.8.119 Version/11.10'
          )
      );
      $context = stream_context_create($opts);
      $page = file_get_contents($adr, false, $context);
  
  $pq = phpQuery::newDocumentHTML($page);
  
  $title = pq ( pq("h1")->elements[0] ) ;
  
  ob_start();
  echo $title;
  $ele = ob_get_clean();
  
  $ele = strip_tags($ele);
  
  $ele = explode(intval($cisloVlaku), $ele, 2);
  if (count($ele) == 1) return;
  $ele = trim($ele[1]);
  if ($ele == "") return;
  
  echo "\$poznamkaObehu['".$cisloVlaku."'] = array('', '$ele');";
  echo "<br>";
  
  //var_dump($ele);
    //$h1 = pq($title->elements);
  
  //$zeStanice = trim(strip_tags(pq($h1->find("h1"))));
  
  //var_dump($title);
  return;
}
?>
