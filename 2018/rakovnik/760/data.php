<?php
// sem patri definice skupin. 
$skupiny[] = $ts760 = new TS ('TS 760', '750.7');
$skupiny[] = $ts761 = new TS ('TS 761', '750.7');
$skupiny[] = $ts762 = new TS ('TS 762', '714');
$skupiny[] = $ts712 = new TS ('TS 712', '714 PJ Ph-Libeň');
$skupiny[] = $ts703 = new TS ('TS 703', '714 PJ Ph-Vršovice');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
