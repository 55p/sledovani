<?php

$skupiny[] = $ts770 = new TS ('TS 770');
$skupiny[] = $ts771 = new TS ('TS 771');
$skupiny[] = $ts772 = new TS ('TS 772');

for ($i = 1220; $i < 1234; $i++) {
  $typ[$i] = 'R';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
