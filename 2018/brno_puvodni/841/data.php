<?php
// sem patri definice skupin. 
$skupiny[] = $ts841 = new TS ('TS 841', '842 + 954');
$skupiny[] = $ts842 = new TS ('TS 842', '842 + 954');
$skupiny[] = $ts843 = new TS ('TS 843', '842 + 954');
$skupiny[] = $ts844 = new TS ('TS 844', '842 + 954');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
