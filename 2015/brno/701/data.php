<?php

$obeh[1] = array(668, 661, 662, 667, 620);
$obeh[2] = array(623, 664, 665, 622);
$obeh[3] = array(4801, 4816);
$obeh[4] = array(621, 666, 663, 660, 669);

$obeh1[1] = array('1722b', '881a', '890a', '885c', '886c', '889c', '882c', '550c', '70240c', '101722b', '1731b', '561c', '1733b');
$obeh1[2] = array('560a', '883a', '888a', '887a', '884a', 1732, '891c', '880c', '70241c', '551c', '550a', '70240a', '885a', '886a', '889a', '882a', '561a');
$obeh1[3] = array(1636, 1637, 1729, '891a', '880a', '70241a', '551a');

$obeh2[1] = array('550b', '70240b', '101722a', '1731a', '1722a', '881b', '890b', '885b', '886b', '889b', '882b', 4343, '561b',
'560b', '883b', '888b', '887b', '884b', '891b', '880b', '70241b', '551b');
$obeh2[2] = array(1720, 4145, 4150, '1733a');

$obeh3[1] = array(4827, 4834, 70101, 1643, 3170, 3177, 1646, 70100);

$obeh4[1] = array(99999);

$obeh5[1] = array(1727, 4382, 1736);

$obeh6[1] = array(1829, 1828);

$obeh7 ['-'] = array(1,2,3);

include 'trasy.php';

$skupiny[] = $ts701 = new TS('TS 701');
$skupiny[] = $ts702 = new TS('TS 702');
$skupiny[] = $ts703 = new TS('TS 703');
$skupiny[] = $ts704 = new TS('TS 704');
$skupiny[] = $ts705 = new TS('TS 705');
$skupiny[] = $ts706 = new TS('TS 706');
$skupiny[] = $ts707 = new TS('TS 707');
$skupiny[] = $ts715 = new TS('TS 715');
$skupiny[] = $mimor = new TS('mimořádný oběh');

$ts701->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu));
$ts702->obeh(new Obeh($obeh1, $trasa, $omezeni, $typ, $poznamkaObehu, null, '14.6.2015 23:59:59'));
  //->obeh(new Obeh($obeh1, $trasa, $omezeni, $typ, $poznamkaObehu, '1.9.2015'));
$ts703->obeh(new Obeh($obeh2, $trasa, $omezeni, $typ, $poznamkaObehu, null, '31.7.2015 23:59:59'));
$ts704->obeh(new Obeh($obeh3, $trasa, $omezeni, $typ, $poznamkaObehu));
$ts705->obeh(new Obeh($obeh4, $trasa, $omezeni, $typ, $poznamkaObehu));
$ts706->obeh(new Obeh($obeh5, $trasa, $omezeni, $typ, $poznamkaObehu));
$ts707->obeh(new Obeh($obeh6, $trasa, $omezeni, $typ, $poznamkaObehu));
$mimor->obeh(new Obeh($obeh7, $trasa, $omezeni, $typ, $poznamkaObehu));


$obeh1[3] = array(1729, '891a', '880a', '70241a', '551a');
$ts702->obeh(new Obeh($obeh1, $trasa, $omezeni, $typ, $poznamkaObehu, '15.6.2015', '31.7.2015 23:59:59'));


@include 'spolecne/laky_vse.php';

unset($obeh);
unset($obeh1);
unset($obeh2);
unset($obeh3);
unset($obeh4);
unset($obeh5);
unset($obeh6);
unset($obeh7);

unset($omezeni);

include 'ts_702_2015_08_05.php';

unset($trasy);

include 'ts_715_2015_09_02.php';


?>
