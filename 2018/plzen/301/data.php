<?php
// sem patri definice skupin. 
$skupiny[] = $ts301 = new TS ('TS 301', '362 WTB');
$skupiny[] = $ts302 = new TS ('TS 302', '362');
$skupiny[] = $ts304 = new TS ('TS 304', '362');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
