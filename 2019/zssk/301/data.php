<?php
// sem patri definice skupin.
$skupiny = [];

if (defined('ID_TABULKY')) {
  $sql = 'SELECT * FROM skupiny WHERE tabulka_id = '.ID_TABULKY.' ORDER BY rank ASC';
} else {
  $sql = 'SELECT * FROM skupiny WHERE tabulka_id = '.$ID_TABULKY;
}

$rows = $db->query($sql);
foreach ($rows as $oneRow) {
  $promenna = $oneRow['promenna'];
  $nazevSkupiny = $oneRow['skupina'];
  $popisSkupiny = $oneRow['popis'];
  $skupiny[$promenna] = new TS($nazevSkupiny, $popisSkupiny);
}

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2018_09_03.php';
include __DIR__.$includePath.'/spolecne/laky_vse.php';

if (!empty($odmitnoutPredpoklady)) {
  $predpokladySoubor = NULL;
} else {
  $predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2018_09_03.php';
}

$trasa = [];
$typ = [];
