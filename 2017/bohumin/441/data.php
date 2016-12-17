<?php
// sem patri definice skupin. 
$skupiny[] = $ts441 = new TS ('TS 441', '471');
$skupiny[] = $ts442 = new TS ('TS 442', '471 ROP');
$skupiny[] = $ts443 = new TS ('TS 443', '471 ROP');
$skupiny[] = $ts641 = new TS ('TS 641', '650');


if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

unset($lak['elefant_2_cerveny']);

$lak['slon_ova_24'] = array(471024);
$lak['slon_ova_25'] = array(471025);
$lak['slon_ova_35'] = array(471035);
$lak['slon_ova_54'] = array(471054);
$lak['slon_ova_55'] = array(471055);
$lak['slon_ova_56'] = array(471056);
$lak['slon_ova_57'] = array(471057);
$lak['slon_ova_58'] = array(471058);
