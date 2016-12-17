<?php
// sem patri definice skupin. 
$skupiny[] = $ts101 = new TS ('TS 101', '162');
$skupiny[] = $ts102 = new TS ('TS 102', '162');
$skupiny[] = $ts103 = new TS ('TS 103', '162');
//$skupiny[] = $ts104 = new TS ('TS 104', '162');
$skupiny[] = $ts301 = new TS ('TS 301', '193');
$skupiny[] = $ts302 = new TS ('TS 302', '193');
$skupiny[] = $ts303 = new TS ('TS 303', '193');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
