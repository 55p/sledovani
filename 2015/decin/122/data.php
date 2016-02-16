<?php
//do pole obeh se pisi cisla vlaku
$obeh0[1] = array(6850, 6963, 783, 792, 789, 786, 795, 780);
$obeh0[2] = array(781, 794, 787, 788, 793, 782);
$obeh0[3] = array(1692, 1693, 785, 790, 791, 784, 29784, '6962_2');


$obeh1[1] = array('6451_1', 6490, '6451_2', 6452, 6453, 6454, '6411_1', '6412_1', '6415_1', '6416_1', 6959);
$obeh1[2] = array(6940, 6941, 6946, '6411_2', '6412_2', '6415_2', '6416_2', '6413_1', '6414_1', 6419);
$obeh1[3] = array('6402_1', 6407, 6400, 6405, 6408, 6455, 6456, 6457, 6458, '6413_2', '6414_2', 6417, '6418_2', '6418_1', '6959_2');
$obeh1[4] = array('6940_2', 6430, 6403, 6406, 6409, 6410, 6960, '6960a', 6967);

$obeh2[1] = array(6823, 6810, 6813, '6967_2', '106967', '6962_1', 71263);
$obeh2[2] = array(6401, 6404, 1687, 1688, 6431);
$obeh2[3] = array(6443, '6402_2', 1696);
/*
$TS['TS 122'] = $obeh0;
$TS['TS 124'] = $obeh1;
$TS['TS 123'] = $obeh2;
*/
include 'trasy.php';

$skupiny[] = $ts122 = new TS('TS 122');
$skupiny[] = $ts124 = new TS('TS 124');
$skupiny[] = $ts123 = new TS('TS 123');


$ts122->obeh(new Obeh($obeh0, $trasa, $omezeni, $typ, $poznamkaObehu, null, '13.6.2015 23:59:59'));
$ts123->obeh(new Obeh($obeh2, $trasa, $omezeni, $typ, $poznamkaObehu, null, '31.8.2015 23:59:59'));
$ts124->obeh(new Obeh($obeh1, $trasa, $omezeni, $typ, $poznamkaObehu));

$trasa [1692] = array('Ústí nad Labem hl.n.;4:42','Kadaň–Prunéřov;6:04');
$trasa [1693] = array('Kadaň–Prunéřov;6:12','Ústí nad Labem hl.n.;7:33');

$ts122->obeh(new Obeh($obeh0, $trasa, $omezeni, $typ, $poznamkaObehu, '14.6.2015'));

unset($obeh0);
unset($obeh1);
unset($obeh2);

include ('ts_123_2015_08_28.php');

$lak['najbrt1'] = array(163073, 163100, 163249, 163260, 162012, 162037, 162038, 162046);
$lak['najbrt1bila'] = array(163257, 162013, 162039);
$lak['najbrt2'] = array(162014, 162018, 162019, 162036, 162040, 163077, 163079);
$lak['seda_lok'] = array(162011, 163094);
$lak['zelena_svetla'] = array(162020);
$lak['zelena'] = array(163215, 163216, 163259);

@include 'spolecne/laky_vse.php';
?>
