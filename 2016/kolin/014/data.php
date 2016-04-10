<?php
$skupiny[] = $ts014 = new TS ('ČD Cargo na 014');

$typ[-1] = 'Mn';

for ($i = 199997; $i < 200000; $i++) {
  $typ[$i] = '';
}

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

