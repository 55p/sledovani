<?php
$skupiny[] = $ts101 = new TS('TS 101');
$skupiny[] = $ts107 = new TS('TS 107');

include 'ts_101_2015_03_17.php';

include 'ts_101_2015_06_23.php';
include 'ts_107_2015_06_23.php';

include 'ts_101_2015_10_01.php';

@include 'spolecne/laky_vse.php';

unset($lak['zelena']);

?>
