<?php
$skupiny[] = $ts302 = new TS ('TS 302', '380');
$skupiny[] = $ts303 = new TS ('TS 303', '380');
$skupiny[] = $ts304 = new TS ('TS 304', '380');
$skupiny[] = $ts305 = new TS ('TS 305', '380');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>