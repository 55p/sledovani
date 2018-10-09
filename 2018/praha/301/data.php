<?php
// sem patri definice skupin. 
$skupiny[] = $ts301 = new TS ('TS 301', '193');
$skupiny[] = $ts301a = new TS ('TS 301a', '193');
$skupiny[] = $ts302 = new TS ('TS 302', '193');
$skupiny[] = $ts393 = new TS ('TS 303 DKV Plzeň', '193');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
