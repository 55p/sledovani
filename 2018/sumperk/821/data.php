<?php
// sem patri definice skupin. 
$skupiny[] = $ts821 = new TS ('TS 821', '810');
$skupiny[] = $ts822 = new TS ('TS 822', '810');
$skupiny[] = $ts823 = new TS ('TS 823', '810');
$skupiny[] = $ts824 = new TS ('TS 824', '814');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
