<?php
// sem patri definice skupin. 
//$skupiny[] = $ts868 = new TS ('TS 868', 'Čáslav - Třemošnice');
$skupiny[] = $ts868 = new TS ('TS 868');
$skupiny[] = $ts869 = new TS ('TS 869');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
