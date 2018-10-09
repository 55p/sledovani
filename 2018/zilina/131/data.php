<?php
$skupiny[] = $ts131 = new TS ('TS 131', '162');
$skupiny[] = $ts132 = new TS ('TS 132', '162');
$skupiny[] = $ts133 = new TS ('TS 133', '162');
$skupiny[] = $ts134 = new TS ('TS 134', '162');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
