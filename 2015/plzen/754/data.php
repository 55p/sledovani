<?php
 
$ob1 [1] = array(7403, 7412);
$ob1 [2] = array(7407, 7414);

$ob2 [1] = array(7502, 775, 1962, 1965, 1967);
$ob2 [2] = array(778, 777, 1964, 7503);
$ob2 [3] = array(1960, 7547, 776, 779);
$ob2 [4] = array(7504, 7501);


$obeh[1] = array('8105_1', '8100_1', '8109_1', '8102_1', '8104_1', '8117_1', '8114_1', '8125_1', '8122_1');
$obeh[2] = array('8113_1', '8110_1', '8121_1', '8118_1', '8129_1', '8126_1');

$ob3 ['-'] = array(1,2,3);

$zjOmez[] = array('X', 7403, 7412, 7407, 7414, 1965);
$zjOmez[] = array(25, 1967, 1960, 7547);
$zjOmez[] = array('81_plz_2015', 7504, 7501);

/*
$TS['TS 701'] = $ob1;
$TS['TS 718'] = $ob2;
$TS['TS 755'] = $obeh;

$TS['mimořádný oběh'] = $ob3;
*/

//$omezeni['8100_1'] = 'kv_cer';
$omezeni['8102_1'] = 'X';
$omezeni['8104_1'] = '25';
/*$omezeni['8105_1'] = 'kv_cer';
$omezeni['8109_1'] = 'kv_cer';
$omezeni['8110_1'] = 'kv_cer';
$omezeni['8113_1'] = 'kv_cer';
$omezeni['8114_1'] = 'kv_cer';
$omezeni['8117_1'] = 'kv_cer';
$omezeni['8118_1'] = 'kv_cer';
$omezeni['8121_1'] = 'kv_cer';
$omezeni['8122_1'] = 'kv_cer';
$omezeni['8125_1'] = 'kv_cer';
$omezeni['8126_1'] = 'kv_cer';
$omezeni['8129_1'] = 'kv_cer';
*/
$typ[-1] = 'Os';

$typ[1] = $typ[2] = $typ[3] = '';

$typ[775] = $typ[776] = $typ[777] = $typ[778] = $typ[779] = 'Rx';
$typ[1960] = $typ[1962] = $typ[1964] = $typ[1965] = $typ[1967] = 'Sp';

//$n = date('n');
//$j = date('j');
//if ($n < 3 OR ($n == 3 AND $j < 16) OR ($n == 6 AND $j > 15) OR $n > 6) {
  $trasaCela[775] = array('Železná Ruda-Alžbětín;8:45', 'Klatovy;9:55');
  $trasaCela[776] = array('Klatovy;14:02', 'Železná Ruda-Alžbětín;15:09');
  $trasaCela[777] = array('Železná Ruda-Alžbětín;12:45', 'Klatovy;13:55');
  $trasaCela[778] = array('Klatovy;10:02', 'Železná Ruda-Alžbětín;11:15');
  $trasaCela[779] = array('Železná Ruda-Alžbětín;16:45', 'Klatovy;17:55');
  
  $trasaCela[1960] = array('Klatovy;8:02', 'Železná Ruda-Alžbětín;9:15');
  $trasaCela[1962] = array('Klatovy;12:02', 'Železná Ruda-Alžbětín;13:15');
  $trasaCela[1964] = array('Klatovy;16:02', 'Železná Ruda-Alžbětín;17:14');
  $trasaCela[1965] = array('Železná Ruda-Alžbětín;14:39', 'Klatovy;15:56');
  $trasaCela[1967] = array('Železná Ruda-Alžbětín;14:39', 'Klatovy;15:56');
  
  $trasaCela[7501] = array('Železná Ruda-Alžbětín;15:29', 'Klatovy;16:39');
  $trasaCela[7502] = array('Klatovy;6:58', 'Železná Ruda-Alžbětín;8:08');
  $trasaCela[7503] = array('Železná Ruda-Alžbětín;17:29', 'Klatovy;18:41');
  $trasaCela[7504] = array('Klatovy;9:20', 'Železná Ruda-Alžbětín;10:37');
  $trasaCela[7547] = array('Železná Ruda-Alžbětín;10:45', 'Klatovy;11:55');
//} else {
  
  $trasaVyluka[1960] = array('Klatovy;8:02', 'Nýrsko;8:18');
  $trasaVyluka[778] = array('Klatovy;10:02', 'Nýrsko;10:18');
  $trasaVyluka[1962] = array('Klatovy;12:02', 'Nýrsko;12:18');
  $trasaVyluka[776] = array('Klatovy;14:02', 'Nýrsko;14:18');
  $trasaVyluka[1964] = array('Klatovy;16:02', 'Nýrsko;16:18');
  
  $trasaVyluka[775] = array('Nýrsko;9:38', 'Klatovy;9:55');
  $trasaVyluka[777] = array('Nýrsko;13:38', 'Klatovy;13:55');
  $trasaVyluka[779] = array('Nýrsko;17:38', 'Klatovy;17:55');
  $trasaVyluka[1965] = array('Nýrsko;15:38', 'Klatovy;15:56');
  $trasaVyluka[1967] = array('Nýrsko;15:38', 'Klatovy;15:56');
  
  
  $trasaVyluka[7501] = array('Nýrsko;16:23', 'Klatovy;16:39');
  $trasaVyluka[7503] = array('Nýrsko;18:23', 'Klatovy;18:41');
  $trasaVyluka[7547] = array('Nýrsko;11:38', 'Klatovy;11:55');
  $trasaVyluka[7504] = array('Klatovy;9:20', 'Nýrsko;9:37');
  $trasaVyluka[7502] = array('Klatovy;6:58', 'Nýrsko;7:16');


//if ($n <= 6) {
  $trasaVylukaVolary['8100_1'] = array('Boršov nad Vltavou;6:41', 'České Budějovice;6:51');
  $trasaVylukaVolary['8102_1'] = array('Boršov nad Vltavou;9:16', 'České Budějovice;9:26');
  $trasaVylukaVolary['8104_1'] = array('Boršov nad Vltavou;9:35', 'České Budějovice;9:45');
  $trasaVylukaVolary['8105_1'] = array('České Budějovice;5:57', 'Boršov nad Vltavou;6:05');
  $trasaVylukaVolary['8109_1'] = array('České Budějovice;8:07', 'Boršov nad Vltavou;8:15');
  $trasaVylukaVolary['8110_1'] = array('Boršov nad Vltavou;11:35', 'České Budějovice;11:45');
  $trasaVylukaVolary['8113_1'] = array('České Budějovice;10:07', 'Boršov nad Vltavou;10:15');
  $trasaVylukaVolary['8114_1'] = array('Boršov nad Vltavou;13:38', 'České Budějovice;13:48');
  $trasaVylukaVolary['8117_1'] = array('České Budějovice;12:07', 'Boršov nad Vltavou;12:12');
  $trasaVylukaVolary['8118_1'] = array('Boršov nad Vltavou;15:38', 'České Budějovice;15:48');
  $trasaVylukaVolary['8121_1'] = array('České Budějovice;14:07', 'Boršov nad Vltavou;14:15');
  $trasaVylukaVolary['8122_1'] = array('Boršov nad Vltavou;17:38', 'České Budějovice;17:48');
  $trasaVylukaVolary['8125_1'] = array('České Budějovice;16:07', 'Boršov nad Vltavou;16:15');
  $trasaVylukaVolary['8126_1'] = array('Boršov nad Vltavou;19:40', 'České Budějovice;19:50');
  $trasaVylukaVolary['8129_1'] = array('České Budějovice;18:12', 'Boršov nad Vltavou;18:20');


$trasa[7403] = array('Domažlice město;4:28', 'Plzeň hl.n.;5:47');
$trasa[7407] = array('Domažlice;6:05', 'Plzeň hl.n.;7:33');
$trasa[7412] = array('Plzeň hl.n.;14:10', 'Domažlice;15:30');
$trasa[7414] = array('Plzeň hl.n.;15:06', 'Domažlice;16:22');

@include 'spolecne/laky_vse.php';

foreach ($zjOmez as $array) {
  foreach ($array as $key => $vlak) {
    if ($key == 0) continue;
    $omezeni[$vlak] = $array[0];
  }
}


$skupiny[] = $t701 = new TS('TS 701');
$skupiny[] = $t718 = new TS('TS 718');
$skupiny[] = $t755 = new TS('TS 755');
$skupiny[] = $mimo = new TS('mimořádný oběh');

$t701->obeh(new Obeh($ob1, $trasa, $omezeni, $typ, $poznamkaObehu));
$t718->obeh(new Obeh($ob2, $trasaCela, $omezeni, $typ, $poznamkaObehu, NULL, '15.3.2015 23:59:59'))
     ->obeh(new Obeh($ob2, $trasaVyluka, $omezeni, $typ, $poznamkaObehu, '16.3.2015', '15.6.2015 23:59:59'));
     //->obeh(new Obeh($ob2, $trasaCela, $omezeni, $typ, $poznamkaObehu, '16.6.2015'));
$t755->obeh(new Obeh($obeh, $trasaVylukaVolary, $omezeni, $typ, $poznamkaObehu, '30.4.2015', '28.6.2015 23:59:59'));
$mimo->obeh(new Obeh($ob3, $trasa, $omezeni, $typ, array()));

unset($ob1);
unset($ob2);
unset($obeh);
unset($ob3);

$ts718 = $t718;
$trasa = $trasaCela;

include 'ts_718_2015_06_16.php';
include 'ts_718_2015_10_30.php';

unset($trasa);

$ts755 = $t755;

include 'ts_755_2015_06_30.php';
include 'ts_755_2015_09_15.php';


?>
