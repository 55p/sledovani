<?php
// sem patri definice skupin. 
$skupiny[] = $ts770 = new TS ('TS 770', '750.7 + 954.2');
$skupiny[] = $ts771 = new TS ('TS 771', '750.7 + 954.2');
$skupiny[] = $ts772 = new TS ('TS 772', '714');
$skupiny[] = $ts779 = new TS ('TS 779', '754 DKV Praha');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
