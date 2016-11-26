<?php
$skupiny[] = $ts103 = new TS ('TS 103 + 903', '163 + 961');
$skupiny[] = $ts301 = new TS ('TS 301 + 901', '362 + 961');
$skupiny[] = $ts102 = new TS ('TS 102', '163');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>