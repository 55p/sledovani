<?php
// sem patri definice skupin. 
$skupiny[] = $ts202 = new TS ('TS 202', '242');
$skupiny[] = $ts203 = new TS ('TS 203', '242');
$skupiny[] = $ts204 = new TS ('TS 204', '242');
$skupiny[] = $ts205 = new TS ('TS 205', '242');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
