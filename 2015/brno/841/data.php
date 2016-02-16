<?php
$typ[-1] = 'Os';
//$poznamkaObehu = array();

for ($i = 1720; $i <= 1737; $i++) {
	$typ[$i] = 'Sp';
}

$skupiny[] = $ts841 = new TS ('TS 841');
$skupiny[] = $ts842 = new TS ('TS 842');
$skupiny[] = $ts843 = new TS ('TS 843');
$skupiny[] = $ts844 = new TS ('TS 844');
$skupiny[] = $ts848 = new TS ('TS 848');

/*
include 'ts_841_2015_06_14.php';
include 'ts_842_2015_06_14.php';
include 'ts_843_2015_06_14.php';
include 'ts_844_2015_06_14.php';
*/

include 'obehy.php';

@include 'spolecne/laky_vse.php';

?>