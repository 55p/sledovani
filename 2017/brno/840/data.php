<?php
// sem patri definice skupin. 
$skupiny[] = $ts840 = new TS ('TS 840', '854 + Bdtn + 954');
$skupiny[] = $ts844 = new TS ('TS 844', '854');
$skupiny[] = $ts845 = new TS ('TS 845', '854');
$skupiny[] = $ts731 = new TS ('TS 731', '714 PJ Znojmo');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
