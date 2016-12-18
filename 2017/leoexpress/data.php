<?php
// sem patri definice skupin. 
$skupiny[] = $ts401 = new TS ('TS 401');
// $skupiny[] = $ts402 = new TS ('TS 402');
// $skupiny[] = $ts403 = new TS ('TS 403');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
