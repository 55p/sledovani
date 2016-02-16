<?php
$typ[-1] = 'RJ';

$skupiny[] = $ts101 = new TS ('TS 1');
$skupiny[] = $ts102 = new TS ('TS 2');
$skupiny[] = $ts103 = new TS ('TS 3');
$skupiny[] = $ts104 = new TS ('TS 4');
$skupiny[] = $ts301 = new TS ('TS 5');

require __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@require __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
