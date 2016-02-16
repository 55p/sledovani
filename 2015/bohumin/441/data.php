<?php
$debug = 1;

$typ[-1] = 'Os';
for ($i = 1600; $i <= 1619; $i++) {
  $typ[$i] = 'Sp';
}
$sv = '2992 28910 28905 28909 28919 28912 2999 2990 28900 29913 28902 28919 28902 28913 28908 28906 2993 2994 2991';
$sv = explode(' ', $sv);
foreach ($sv as $i) {
  $typ[$i] = 'Sv';
}

$poznamkaObehu = array();

$skupiny[] = $ts443 = new TS ('TS 443');
$skupiny[] = $ts444 = new TS ('TS 444');

$skupiny[] = $ts441 = new TS ('TS 441');
$skupiny[] = $ts441a = new TS ('TS 441a');
$skupiny[] = $ts442 = new TS ('TS 442');

include 'ts_441_2015_06_15.php';
include 'ts_441a_2015_06_15.php';
include 'ts_441a_2015_07_01.php';
include 'ts_442_2015_06_15.php';
include 'ts_443_2015_06_15.php';
include 'ts_443_2015_07_01.php';
include 'ts_444_2015_06_15.php';
include 'ts_444_2015_07_01.php';

@include 'spolecne/laky_vse.php';

?>