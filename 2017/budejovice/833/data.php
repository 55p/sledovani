<?php
$skupiny[] = $ts833 = new TS ('TS 833');
$skupiny[] = $ts834 = new TS ('TS 834');
$skupiny[] = $ts755 = new TS ('TS 755');
$skupiny[] = $ts756 = new TS ('TS 756');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>