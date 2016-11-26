<?php
$skupiny[] = $ts854 = new TS ('TS 854', 'Olbramovice - Sedlčany');
$skupiny[] = $ts855 = new TS ('TS 855', 'Benešov - Vlašim - Trhový Štěpánov');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>