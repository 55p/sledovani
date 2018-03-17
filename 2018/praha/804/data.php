<?php
// sem patri definice skupin. 
$skupiny[] = $ts804 = new TS ('TS 804', '810');
$skupiny[] = $ts812 = new TS ('TS 812', '812 + 912 PJ P.-Libeň');
$skupiny[] = $ts891 = new TS ('TS 891', 'M 262 KŽC');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
