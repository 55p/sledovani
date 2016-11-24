<?php
$skupiny[] = $ts306 = new TS ('TS 306', '371');
$skupiny[] = $ts307 = new TS ('TS 307', '371');
$skupiny[] = $ts308 = new TS ('TS 308', '371');
$skupiny[] = $ts303 = new TS ('TS 303', '380');
$skupiny[] = $ts309 = new TS ('TS 309', '371');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>