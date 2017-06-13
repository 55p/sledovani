<?php
// sem patri definice skupin. 
$skupiny[] = $ts302 = new TS ('TS 302');
$skupiny[] = $ts303 = new TS ('TS 303');
$skupiny[] = $ts303a = new TS ('TS 303a');
$skupiny[] = $ts304 = new TS ('TS 304');
//$skupiny[] = $ts306 = new TS ('TS 306');
$skupiny[] = $ts307 = new TS ('TS 307');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
