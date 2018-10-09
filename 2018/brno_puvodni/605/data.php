<?php
// sem patri definice skupin. 
$skupiny[] = $ts605 = new TS ('TS 605', '640');
$skupiny[] = $ts606 = new TS ('TS 606', '640');
$skupiny[] = $ts607 = new TS ('TS 607', '650');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
