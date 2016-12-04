<?php
// sem patri definice skupin. 
$skupiny[] = $ts311 = new TS ('TS 311', '350');
$skupiny[] = $ts312 = new TS ('TS 312', '350');
$skupiny[] = $ts313 = new TS ('TS 313', '361.1');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
