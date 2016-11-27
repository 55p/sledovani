<?php
$skupiny[] = $ts143 = new TS ('TS 143', '150.2');
$skupiny[] = $ts101 = new TS ('TS 101 ZSSK', '162 ZSSK');
$skupiny[] = $ts145 = new TS ('TS 145', '150.2');
$skupiny[] = $ts146 = new TS ('TS 146', '150.2');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
