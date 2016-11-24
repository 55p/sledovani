<?php
$skupiny[] = $ts141 = new TS ('TS 141', '151');
$skupiny[] = $ts142 = new TS ('TS 142', '151');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>