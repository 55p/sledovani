<?php
// sem patri definice skupin. 
$skupiny[] = $ts845 = new TS ('TS 845', '842');
$skupiny[] = $ts846 = new TS ('TS 846', '842');
$skupiny[] = $ts847 = new TS ('TS 847', '842');
$skupiny[] = $ts847a = new TS ('TS 847a', '842');
$skupiny[] = $ts848 = new TS ('TS 848', '842');
$skupiny[] = $ts731 = new TS ('TS 731', '714');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
