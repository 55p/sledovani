<?php
//do pole obeh se pisi cisla vlaku
$obeh1[1] = array(100444, 614, 605, 610, 609, 606, 613, 602, 617);
$obeh1[2] = array(879, 878, 147, 146, 445);
$obeh1[3] = array(100445, 154, 153, 140);
$obeh1[4] = array(444, 141, 152, 155, '155a', '155b', 140);
$obeh1[5] = array(444, 150, 541, '541a');
$obeh1[6] = array(540, '540a', 151, 142, '142a');
$obeh1[7] = array(143, '143a', 100150, 149, 144);
$obeh1[8] = array(145, 148, 110, 543);
$obeh1[9] = array(542, 111);

$obeh2[1] = array(514, 513);
$obeh3[1] = array(243, 242);

foreach ($obeh1 as $den => $vlaky) {
  foreach ($vlaky as $jedenVlak) {
    $obehAuto[$den][] = $jedenVlak.'_'.$den;
  }
}

include 'trasy.php';

$skupiny[] = $t140 = new TS('TS 140');
$skupiny[] = $t141 = new TS('TS 141');
$skupiny[] = $t142 = new TS('TS 142');
$skupiny[] = $ts642 = new TS ('TS 642');

$t140->obeh(new Obeh($obehAuto, $trasa, $omezeni, $typ, $poznamkaObehu, NULL, '13.6.2015 23:59:59'));
$t141->obeh(new Obeh($obeh2, $trasa, $omezeni, $typ, $poznamkaObehu, NULL, '13.6.2015 23:59:59'));
$t142->obeh(new Obeh($obeh3, $trasa, $omezeni, $typ, $poznamkaObehu, NULL, NULL));

unset($obeh1);
unset($obeh2);
unset($obeh3);
unset($obehAuto);
unset($trasa);
unset($omezeni);
//unset($typ);
//unset($poznamkaObehu);

//$debug = 1;
include 'ts_140_2015_06_14.php';
include 'ts_642_2015_06_20.php';

@include 'spolecne/laky_vse.php';

?>
