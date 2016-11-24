<?php
$skupiny[] = $ts111 = new TS ('TS 111', '163 + 961');
$skupiny[] = $ts111a = new TS ('TS 111 A', '163 + 961');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>