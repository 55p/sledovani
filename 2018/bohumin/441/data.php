<?php
// sem patri definice skupin. 
$skupiny[] = $ts441 = new TS ('TS 441', '471');
$skupiny[] = $ts442 = new TS ('TS 442', '471');
$skupiny[] = $ts443 = new TS ('TS 443', '471');
$skupiny[] = $ts444 = new TS ('TS 444', '471');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
