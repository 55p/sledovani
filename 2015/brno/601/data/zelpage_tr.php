<?php
ini_set('max_execution_time', 6000);

include "phpQuery.php";
include "../../funkce.php";
include "../data.php";

header('Content-type: text/html; charset=utf-8');

define ('DATUM', "20.6.2015");

$TS = getTS(strtotime(DATUM));

//var_dump($TS);/

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

usort($vlaky, function($a,$b) {
  return strcmp($a[0],$b[0]);
});

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
ob_end_flush();
//ob_end_clean();

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

  global $trasyTS;

  $datum = strtotime(DATUM);
  $omezeni = najdiOmezeni($cisloVlaku, $obeh);
  while (!jedeVlak("", $omezeni, date("j.n.Y", $datum))) {
    date("j.n.Y", $datum);
    $datum += 86400;
  }

  //echo 
  //$adr = "http://www.cd.cz/spojeni/Route.aspx?trainnumber=".intval($cisloVlaku)."&date=".date("j.n.Y", $datum);
  //echo $adr = "http://www.zelpage.cz/razeni/15/vlaky/cd-".intval($cisloVlaku);
  //$adr = "http://www.zelpage.cz/razeni/15/?dotaz=".intval($cisloVlaku);
  $adr = "http://www.zelpage.cz/razeni/15/trasa-vlaku/rj-".intval($cisloVlaku);
  
  //echo "<br>";
  $opts = array('http' =>
          array(
              'header'  => 'User-agent: Opera/9.80 (J2ME/MIDP; Opera Mini/4.4.29476/32.1151; U; cs) Presto/2.8.119 Version/11.10'
          )
      );
      $context = stream_context_create($opts);
      $page = file_get_contents($adr, false, $context);
  
  $pq = phpQuery::newDocumentHTML($page);
  
  //$table = pq("table");
  $titulek = pq("tr.titulek");
  $titulek = $titulek->get(0);
  
  if (!$titulek) {
    return;
  }
  
  $vychozi = $titulek->nextSibling;
  $vychoziRadek = $vychozi->childNodes;
  $vychoziStanice = trim($vychoziRadek->item(0)->nodeValue);
  $vychoziCas = intval(floatval($vychoziRadek->item(3)->nodeValue) * 100);
  
  
  $radky = $titulek->parentNode->childNodes;
  $cilova = $radky->item($radky->length-1);
  $cilovaRadek = $cilova->childNodes;
  $cilovaStanice = trim($cilovaRadek->item(0)->nodeValue);
  $cilovaCas = intval(floatval($cilovaRadek->item(2)->nodeValue) * 100);
  
  $vychoziStanice = substr($vychoziStanice, 4);
  $cilovaStanice = substr($cilovaStanice, 4);
  
  
  $casRV = '/(\d{1,2})(\d{2})/';
  $asNumber = '$1:$2';
  $zeStCas = preg_replace($casRV, $asNumber, $vychoziCas);
  $doStCas = preg_replace($casRV, $asNumber, $cilovaCas);
  
  $trasyTS[$ts][] = "\$trasa['".$cisloVlaku."'] = array('$vychoziStanice;$zeStCas', '$cilovaStanice;$doStCas');";
  
  return;
  /*
  $radky = $razeni->childNodes;
    var_dump($razeni);
  // */
  
  
  //var_dump($table);
    //var_dump();
  die;
  
  $elem = $data->get(0);
  if (!$elem) { 
//    echo $cisloVlaku;
    return;
  }
  $trasa = $elem->nodeValue;
  
  //$trasa = implode("",explode("\n", $trasa));
  $trasa = trim(str_replace(array("\n", ";&#10;"), array("", ""), $trasa));
  $trasa = preg_replace( '/^((?=^)(\s*))|((\s*)(?>$))/si', '', $trasa);
  ?><?php
  
  $contentRV = '/Trasa:(.*)Detail.*/';
  $exp = '$1';
  $data = trim(preg_replace($contentRV, $exp, $trasa));
  
  $stanice = explode(",", $data);
  array_walk($stanice,"awt");
  
  $prStanice = $stanice[0];
  $revSt = array_reverse($stanice);
  $poStanice = $revSt[0];
  
  $e = strrpos($prStanice, " ");
  $zeStanice = substr($prStanice, 0, $e);
  $startCas = substr($prStanice, $e + 1);
  $zeStCas = intval(str_replace(array("."), array(""), $startCas));
  
  $e = strrpos($poStanice, " ");
  $doStanice = substr($poStanice, 0, $e);
  $konecCas = substr($poStanice, $e + 1);
  $doStCas = intval(str_replace(array("."), array(""), $konecCas));
  
  
  $casRV = '/(\d{1,2})(\d{2})/';
  $asNumber = '$1:$2';
  $zeStCas = preg_replace($casRV, $asNumber, $zeStCas);
  $doStCas = preg_replace($casRV, $asNumber, $doStCas);
  
  $trasyTS[$ts][] = "\$trasa['".$cisloVlaku."'] = array('$zeStanice;$zeStCas', '$doStanice;$doStCas');";
  /*
  $lastRow = pq("tr");
  
  if (count($lastRow) >= 2) {
  @$first = pq($lastRow->elements[2]);
  @$last = pq($lastRow->elements[count($lastRow->elements) -1]);
  
  //var_dump($first);
  //var_dump($last);
  
  if ($first AND $last) {
  
    $zeStanice = trim(strip_tags(pq($first->find("td:first"))));
    $zeStCas = trim(strip_tags(pq($first->find("td")->elements[2])));
    $doStanice = trim(strip_tags(pq($last->find("td:first"))));
    $doStCas = trim(strip_tags(pq($last->find("td")->elements[1])));
    
    
  }
  }
  */
  //var_dump($trasyTS);
  //echo "<br>";
}
function awt(&$a) {
  $a = trim($a);
}
?>
