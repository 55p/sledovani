<?php
$skupiny[] = $ts301 = new TS ('TS 301', '380');
$skupiny[] = $ts301a = new TS ('TS 301a', '380');
$skupiny[] = $ts301b = new TS ('TS 301b', '380');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>