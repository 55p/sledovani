<?php
$prevod['Masarykovo n.'] = 'Masarykovo nádraží';
$prevod['n.Vltavou'] = 'nad Vltavou';
$prevod['n.Labem'] = 'nad Labem';
$prevod['n.L.hl.n.'] = 'nad Labem hl.n.';
$prevod['n.Svitavou'] = 'nad Svitavou';
$prevod['n.Cidlinou'] = 'nad Cidlinou';
$prevod['n.Jizerou'] = 'nad Jizerou';
$prevod['n.Oslavou'] = 'nad Oslavou';
$prevod['n.Moravou'] = 'nad Moravou';
$prevod['n.Sázavou'] = 'nad Sázavou';
$prevod['n.Jeviš.'] = 'nad Jevišovkou';
$prevod['u Uh.Hrad.'] = 'u Uherského Hradiště';

ini_set('max_execution_time', 6000);

include "phpQuery.php";
include "../../funkce.php";
include "../data.php";

header('Content-type: text/html; charset=utf-8');

define ('DATUM', "15.10.2015");
$TS = getTS(strtotime(DATUM));

$vlaky = array();
foreach ($TS as $klic => $obeh) {
  foreach ($obeh as $jedenDen) {
    foreach ($jedenDen as $jedenVlak) {
      //if ($jedenVlak < 28000) continue;
      if ($jedenVlak > 30000) continue;
      
      $jednaTrasaTohoVlaku = najdiTrasu($jedenVlak, $obeh);
      if (!$jednaTrasaTohoVlaku)
        $vlaky[] = array($jedenVlak, $obeh, $klic);
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
$trasyTS = array();

foreach ($vlaky as $key => $value) {
  
  stahniTrasuVlaku($value);
  
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

ksort($trasyTS);

foreach ($trasyTS as $ts => $trasy) {
  echo "<h3>$ts</h3>";
  echo '<textarea name="output" cols = 50 rows = 20 readonly>';
    foreach ($trasy as $jednaTrasa) {
      echo $jednaTrasa;
      echo "\n";
    }
  echo '</textarea>';
}


function stahniTrasuVlaku($poleVlaku) {
  list($cisloVlaku, $obeh, $ts) = $poleVlaku;

  global $trasyTS, $prevod;

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
  
  $lastRow = pq("tr");
  
  if (count($lastRow) >= 2) {
  @$first = pq($lastRow->elements[2]);
  @$last = pq($lastRow->elements[count($lastRow->elements) -1]);
  
  //var_dump($first);
  //var_dump($last);
  
  if ($first AND $last) {
    echo $zeStanice = trim(strip_tags(pq($first->find("td:first"))));
    $zeStCas = trim(strip_tags(pq($first->find("td")->elements[2])));
    $doStanice = trim(strip_tags(pq($last->find("td:first"))));
    $doStCas = trim(strip_tags(pq($last->find("td")->elements[1])));
    
    $zeStanice = str_replace(
      array_keys($prevod), 
      array_values($prevod), 
      $zeStanice);
      
      //var_dump(array_keys($prevod));
      //var_dump(array_values($prevod));
      
    $doStanice = str_replace(
      array_keys($prevod), 
      array_values($prevod), 
      $doStanice);
    
    $trasyTS[$ts][] = "\$trasa['".$cisloVlaku."'] = array('$zeStanice;$zeStCas', '$doStanice;$doStCas');";
  }
  }
  //var_dump($trasyTS);
  //echo "<br>";
}

?>
