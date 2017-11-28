<?php
// sem patri definice skupin. 
$skupiny[] = $ts641 = new TS ('TS 641', '680');
$skupiny[] = $ts642 = new TS ('TS 642', '680');
$skupiny[] = $ts643 = new TS ('TS 643', '680');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
