<?php
$typ[-1] = 'R';
$typ['6960_2'] = 'Sv';
$typ[29784] = $typ['6490'] = 'Sv';

$skupiny[] = $ts122 = new TS ('TS 122');
$skupiny[] = $ts124 = new TS ('TS 124');
$skupiny[] = $ts123 = new TS ('TS 123');

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>