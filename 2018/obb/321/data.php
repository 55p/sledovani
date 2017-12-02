<?php
// sem patri definice skupin. 
$skupiny[] = $ts321 = new TS ('TS 321', '1216 + ČD railjet');
$skupiny[] = $ts322 = new TS ('TS 322', '1216 + ČD railjet');
$skupiny[] = $ts323 = new TS ('TS 323', '1216 + ÖBB railjet');

if (file_exists(__DIR__.'/typy.php')) {
  include __DIR__.'/typy.php';
}
if (file_exists(__DIR__.'/jmena_vlaku.php')) {
  include __DIR__.'/jmena_vlaku.php';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
