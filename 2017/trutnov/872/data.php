<?php
// sem patri definice skupin. 
$skupiny[] = $ts872 = new TS ('TS 872');
$skupiny[] = $ts873 = new TS ('TS 873');
$skupiny[] = $ts877 = new TS ('TS 877');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
