<?php
$poznamkaObehu = array();
$poznamkaObehu[1221] = array('pk', 'postrk');
$poznamkaObehu[1223] = array('pk', 'postrk');
$poznamkaObehu[1225] = array('pk', 'postrk');
$poznamkaObehu[1227] = array('pk', 'postrk');
$poznamkaObehu[1229] = array('pk', 'postrk');
$poznamkaObehu[1231] = array('pk', 'postrk');
$poznamkaObehu[1233] = array('pk', 'postrk');

$skupiny[] = $ts770 = new TS ('TS 770');
$skupiny[] = $ts771 = new TS ('TS 771');
$skupiny[] = $ts772 = new TS ('TS 772');
$skupiny[] = $mimor = new TS('mimořádný oběh');

$mimor->obeh(new Obeh(array('-' => array('4','5','6')), array(), array(), array('4' => '', '5' => '', '6' => ''), array()));

include 'obehy.php';

@include 'spolecne/laky_vse.php';

$typ[-1] = 'Os';

?>