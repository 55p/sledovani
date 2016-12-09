<?php
// sem patri definice skupin. 
$skupiny[] = $ts751 = new TS ('TS 751', '714');

$skupiny[] = $ts851 = new TS ('TS 851', '814');
$skupiny[] = $ts852 = new TS ('TS 852', '814');
$skupiny[] = $ts853 = new TS ('TS 853', '814');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
