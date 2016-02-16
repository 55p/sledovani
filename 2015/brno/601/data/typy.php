<?php
$prevod['Masarykovo n.'] = 'Masarykovo nádraží';
$prevod['n.Vltavou'] = 'nad Vltavou';
$prevod['n.Labem'] = 'nad Labem';
$prevod['n.Svitavou'] = 'nad Svitavou';
$prevod['n.Cidlinou'] = 'nad Cidlinou';
$prevod['n.Jizerou'] = 'nad Jizerou';


ini_set('max_execution_time', 6000);

include "phpQuery.php";
include "../../funkce.php";
include "../data.php";

header('Content-type: text/html; charset=utf-8');

define ('DATUM', "20.8.2015");
$TS = getTS(strtotime(DATUM));

$cisla = array();

$vlaky = array();
foreach ($TS as $klic => $obeh) {
  foreach ($obeh as $jedenDen) {
    foreach ($jedenDen as $jedenVlak) {
      //if ($jedenVlak < 28000) continue;
      if ($jedenVlak > 30000) continue;
      
      $jedenTypTohoVlaku = najdiTyp($jedenVlak, $obeh);
      if (!$jedenTypTohoVlaku) {
        $cisloCislem = intval($jedenVlak);
        if (in_array($cisloCislem, $cisla)) {
          continue;
        }
        $vlaky[] = array($jedenVlak, $obeh, $klic);
        $cisla [] = $cisloCislem;
      }
    }
  }
}



sort($vlaky);

//var_dump($vlaky);
//die;
//var_dump($vlaky);
//return;
$i = 0;
ob_start();
//echo "<div>";
$typyTS = array();

foreach ($vlaky as $key => $value) {
  
  stahniTypVlaku($value);
  
  //if ($i++ > 10) break;
  if ($i++ > 40) {
    //break;
    //sleep(4);
    $i = 0;
    
  }
}
//echo "</div>";
//ob_end_flush();
ob_end_clean();

ksort($typyTS);

foreach ($typyTS as $ts => $trasy) {
  echo "<h3>$ts</h3>";
  echo '<textarea name="output" cols = 50 rows = 20 readonly>';
    foreach ($trasy as $jednaTrasa) {
      echo $jednaTrasa;
      echo "\n";
    }
  echo '</textarea>';
}


function stahniTypVlaku($poleVlaku) {
  list($cisloVlaku, $obeh, $ts) = $poleVlaku;

  global $typyTS;

  $datum = strtotime(DATUM);
  $omezeni = najdiOmezeni($cisloVlaku, $obeh);
  while (!jedeVlak("", $omezeni, date("j.n.Y", $datum))) {
    date("j.n.Y", $datum);
    $datum += 86400;
  }

  //echo 
  $adr = "http://www.cd.cz/spojeni/Route.aspx?trainnumber=".intval($cisloVlaku)."&date=".date("j.n.Y", $datum);
  //echo "<br>";
  $opts = array('http' =>
          array(
              'header'  => 'User-agent: Opera/9.80 (J2ME/MIDP; Opera Mini/4.4.29476/32.1151; U; cs) Presto/2.8.119 Version/11.10'
          )
      );
      $context = stream_context_create($opts);
      $page = file_get_contents($adr, false, $context);
    
  $pq = phpQuery::newDocumentHTML($page);
  
  $nadpis = pq("table td h3");
  
  foreach ($nadpis as $elem) {
    $typCislo = DOMinnerHTML($elem);
    list($typ,) = explode(' ', $typCislo);
    break;
  }
  
  $typyTS[$ts][] = '$typ['.intval($cisloVlaku).'] = \''.$typ.'\';';
}
function DOMinnerHTML(DOMNode $element) 
{ 
    $innerHTML = ""; 
    $children  = $element->childNodes;

    foreach ($children as $child) 
    { 
        $innerHTML .= $element->ownerDocument->saveHTML($child);
    }

    return $innerHTML; 
} 
?>
