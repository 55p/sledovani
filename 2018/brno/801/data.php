<?php
// sem patri definice skupin. 
$skupiny[] = $ts801 = new TS ('TS 801', '814.2');
$skupiny[] = $ts802 = new TS ('TS 802', '814.2');
$skupiny[] = $ts803 = new TS ('TS 803', '814');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
