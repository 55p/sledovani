<?php
// sem patri definice skupin. 
$skupiny[] = $ts851 = new TS ('TS 851', '810');
$skupiny[] = $ts854 = new TS ('TS 854', '810');
$skupiny[] = $ts855 = new TS ('TS 855', '810');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
