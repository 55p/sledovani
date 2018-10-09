<?php
// sem patri definice skupin. 
$skupiny[] = $ts849 = new TS ('TS 849', '854');
$skupiny[] = $ts849a = new TS ('TS 849a', '854');
$skupiny[] = $ts850 = new TS ('TS 850', '854');
$skupiny[] = $ts731 = new TS ('TS 731', '714');
$skupiny[] = $ts831 = new TS ('TS 831', '810');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
