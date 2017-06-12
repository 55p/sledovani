<?php
// sem patri definice skupin. 
$skupiny[] = $ts201 = new TS ('TS 201', '263');
$skupiny[] = $ts203 = new TS ('TS 203', '242');
$skupiny[] = $ts204 = new TS ('TS 204', '242 WTB + 961');
$skupiny[] = $ts205 = new TS ('TS 205', '242');
$skupiny[] = $ts206 = new TS ('TS 206', '210');
/*
if (defined('ID_TABULKY')) {
  $sql = 'SELECT * FROM skupiny WHERE tabulka_id = '.ID_TABULKY;
} else {
  $sql = 'SELECT * FROM skupiny WHERE tabulka_id = '.$ID_TABULKY;
}

$rows = $db->query($sql);
foreach ($rows as $oneRow) {
  $promenna = $oneRow['promenna'];
  $nazevSkupiny = $oneRow['skupina'];
  $popisSkupiny = $oneRow['popis'];
  $skupiny[] = $$promenna = new TS($nazevSkupiny, $popisSkupiny);
}
*/

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
