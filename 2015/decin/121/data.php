<?php
//$debug = 1;

//do pole obeh se pisi cisla vlaku
$obeh0[1] = array(675, 690, 683, 684, 689, 674, 6955);
$obeh0[2] = array(6930, 6965, 679, 688, 685, 682, 1698);
$obeh0[3] = array(601, 71260, 677, 680, 691, 670);
$obeh0[4] = array(1900, 1901);
$obeh0[5] = array(1902, 1903);
$obeh0[6] = array(671, 692, 681, 686, 687, 678, 676);

$obeh[1] = array('671_1', '692_1', '681_1', '686_1', '687_1', '676_1', '6967_1', '6955_1');
$obeh[2] = array('6930_1', '6965_1', '679_1', '688_1', '685_1', '1903_1', '10435');
$obeh[3] = array('21811_1', '1900_1', '1901_1', '1904', '10434', '10433', '21814');
$obeh[4] = array('5891', '10430', '1902_1', '690_1', '683_1', '684_1', '689_1', '674_1', '6955_2', '6962_1');
$obeh[5] = array('675_1', '682_1', '1698_1', '680_1', '691_1');
$obeh[6] = array('601_1', '71260_1', '677_1', '680_2', '691_2', '682_2', '1698_2', '71201_1', '9206_1', '670_1');

include 'trasy.php';

$sk = $skupiny[] = new TS('TS 121');

$sk
->obeh(new Obeh($obeh0, $trasa, $omezeni, $typ, $poznamkaObehu, NULL, '1.2.2015 23:59:59'))
->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '2.2.2015', '13.6.2015 23:59:59'));

unset($obeh);
unset($obeh0);

$obeh[1] = array('671_1', '692_1', '681_1', '686_1', '687_1', '676_1', '6967_1', '6955_1');
$obeh[2] = array('6930_1', '6965_1', '679_1', '688_1', '685_1', '1903_1', '10435');
$obeh[3] = array('21811_1', '1900_1', '1901_1', '1904', '10434', '10433', '21814');
$obeh[4] = array('5891', '10430', '1902_1', '690_1', '683_1', '684_1', '689_1', '674_1', '6955_2', '6962_1');
$obeh[5] = array('675_1', '682_1', '1698_1', '680_1', '691_1');
$obeh[6] = array('601_1', '71260_1', '677_1', '680_2', '691_2', '682_2', '1698_2', '71201_1', '9206_1', '670_1');

$trasa['601_1'] = array('Kadaň-Prunéřov;4:42','Ústí nad Labem hl.n.;6:07');

$sk
->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '14.6.2015', '30.6.2015 23:59:59'));

@include 'spolecne/laky_vse.php';

unset($obeh);
unset($obeh0);

unset($omezeni);

$ts121 = $sk;

$typ[35810] = $typ[35801] = "Sv";
$poznamkaObehu[35810] = array('', 'Sv 105810');
$poznamkaObehu[35801] = array('', 'Sv 105801');

$trasa[35801] = array('Odstavné nádraží Praha-jih;3:53','Kolín;4:48');
$trasa[35810] = array('Kolín;18:45', 'Odstavné nádraží Praha-jih;19:41');

$trasa[10431] = array('Praha Masarykovo nádraží;16:21', 'Kolín;17:24');
$trasa[10431] = array('Praha Masarykovo nádraží;17:18', 'Kolín;18:13');
$trasa[10432] = array('Kolín;6:24', 'Praha Masarykovo nádraží;7:26');

$typ[10431] = $typ[10432] = "Sp";

include 'ts_121_2015_07_01.php';

include 'ts_121_2015_09_01.php';

include 'ts_121_2015_09_29.php';

?>