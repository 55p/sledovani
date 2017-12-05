<?php
// sem patri definice skupin. 
$skupiny[] = $ts140 = new TS ('TS 140', '113');
$skupiny[] = $ts141 = new TS ('TS 141', 'E 422.0 (100)');
$skupiny[] = $ts440 = new TS ('TS 440', 'EM 400.0');
$skupiny[] = $ts842 = new TS ('TS 842', '814');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
