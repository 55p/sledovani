<?php
$typ[-1] = 'RJ';

$skupiny[] = $ts101 = new TS ('TS 101');
$skupiny[] = $ts105 = new TS ('TS 102');
$skupiny[] = $ts103 = new TS ('TS 103');
$skupiny[] = $ts104 = new TS ('TS 104');
$skupiny[] = $ts102 = new TS ('TS 301');
$skupiny[] = $ts301 = new TS ('TS 302');

require __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@require __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';
