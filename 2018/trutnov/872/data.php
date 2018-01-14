<?php 
// sem patri definice skupin. 
$skupiny[] = $ts872 = new TS ('TS 872', '854 + 954.2');
$skupiny[] = $ts873 = new TS ('TS 873', '854');
$skupiny[] = $ts878 = new TS ('TS 878', '854');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
