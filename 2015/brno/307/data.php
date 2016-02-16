<?php 
$skupiny[] = $t7 = new TS('TS 307');
$skupiny[] = $ts308 = $t8 = new TS('TS 308');
$skupiny[] = $t9 = new TS('TS 309');

$ob0 [1] = array(572, 573);
 
$ob1 [1] = array(5940, 5903, 5906, 5907, 5912, '5913_2', 5918, '5941_2', '5909_1', '5916_1', '5963_1');
$ob1 [2] = array(5931, 5902, 5953, 5952, 5905, 5910, 5911, 5916, '5963_2', '5913_1', '5918_1', '5941_1');
$ob1 ['1a'] = array(5904, 5909, 5914, '5905_1', '5910_1', 5959, 5958, 5915);

$ob2 [1] = array(409, 199999, 408);
$ob2 ['1a'] = array(299999);
$ob2 ['1b'] = array(399999);

$zjOmez[] = array('X', 572, 573);
$zjOmez[] = array('X', 5907, 5912, '5913_2', 5918, '5941_2', 5931, 5902, 5953, 5952, 5905, 5910, 5911, 5916, 5909, 5914);
$zjOmez[] = array(25, '5909_1', '5916_1', '5913_1', '5918_1', '5941_1', '5905_1', '5910_1', 5959, 5958);
$zjOmez[] = array('T', '5963_1');
$zjOmez[] = array('X1, X2, X3, X4', '5963_2');

foreach ($zjOmez as $array) {
  foreach ($array as $key => $vlak) {
    if ($key == 0) continue;
    $omezeni[$vlak] = $array[0];
  }
}

$omezeni[409] = 5;
$omezeni[408] = 7;

/*
$TS['TS 307'] = $ob0;//array (1 => array(572, 573));
$TS['TS 308'] = $ob1;
$TS['TS 309'] = $ob2;//array (1 => array(409, 199999, 408), '1a' => array(299999), '1b' => array(399999));
*/

$typ[-1] = 'Os';
$typ[572] = $typ[573] = 'IC';
$typ[408] = $typ[409] = 'R';
$typ[822] = $typ[824] = $typ[825] = $typ[837] = $typ[838] = $typ[839] = 'R';
$typ[99999] = '';

$trasa[199999] = array('záloha Břeclav;8:20;19:30');
$trasa[299999] = array('záloha Praha;8:15;19:45');
$trasa[399999] = array('záloha Česká Třebová;4:45;21:05');

$trasa[408] = array('Břeclav;18:13', 'Bohumín;20:05');
$trasa[409] = array('Bohumín;9:02', 'Břeclav;10:47');

$trasa[572] = array('Brno hl.n.;6:08', 'Praha hl.n.;8:47');
$trasa[573] = array('Praha hl.n.;17:05', 'Brno hl.n.;19:38');

$trasa[5940] = array('Světlá nad Sázavou;4:20', 'Kolín;5:23');
$trasa[5903] = array('Kolín;6:05', 'Havlíčkův Brod;7:30');
$trasa[5906] = array('Havlíčkův Brod;8:54', 'Kolín;10:19');
$trasa[5907] = array('Kolín;11:42', 'Havlíčkův Brod;13:07');
$trasa[5912] = array('Havlíčkův Brod;14:33', 'Kolín;15:55');

$trasa[5913] = array('Kolín;16:21', 'Havlíčkův Brod;17:45');
$trasa[5918] = array('Havlíčkův Brod;19:23', 'Kolín;20:50');
$trasa[5941] = array('Kolín;21:49', 'Havlíčkův Brod;22:55');
$trasa[5963] = array('Kolín;19:38', 'Čáslav;19:59');
$trasa[5931] = array('Čáslav;3:37', 'Havlíčkův Brod;4:38');

$trasa[5902] = array('Havlíčkův Brod;5:01', 'Kolín;6:23');
$trasa[5953] = array('Kolín;7:05', 'Čáslav;7:26');
$trasa[5952] = array('Čáslav;8:10', 'Kolín;8:31');
$trasa[5905] = array('Kolín;10:05', 'Havlíčkův Brod;11:32');

$trasa[5910] = array('Havlíčkův Brod;13:16', 'Kolín;14:38');
$trasa[5911] = array('Kolín;15:08', 'Havlíčkův Brod;16:35');
$trasa[5916] = array('Havlíčkův Brod;17:15', 'Kolín;18:38');
$trasa[5904] = array('Žďár nad Sázavou;5:17', 'Kolín;7:23');
$trasa[5909] = array('Kolín;13:42', 'Havlíčkův Brod;15:06');

$trasa[5914] = array('Havlíčkův Brod;15:20', 'Kolín;16:42');
$trasa[5915] = array('Kolín;18:21', 'Žďár nad Sázavou;20:47');
$trasa[5959] = array('Kolín;15:15', 'Čáslav;15:37');
$trasa[5958] = array('Čáslav;15:58', 'Kolín;16:19');

$poznamkaObehu['572'] = $poznamkaObehu['573'] = array('', 'Brněnský drak');
$poznamkaObehu['824_1'] = $poznamkaObehu['825_1'] = array('', 'Radegast');

// ----------------------------------------

$t7->obeh(new Obeh($ob0, $trasa, $omezeni, $typ, $poznamkaObehu, null, '14.6.2015 23:59:59'));
$t8->obeh(new Obeh($ob1, $trasa, $omezeni, $typ, $poznamkaObehu, null, '31.8.2015 23:59:59'));
$t9->obeh(new Obeh($ob2, $trasa, $omezeni, $typ, $poznamkaObehu));

unset($ob0);
unset($ob1);
unset($ob2);
unset($omezeni);
unset($trasa);
//unset($typ);
//unset($poznamkaObehu);

// -------------------------------------

$obeh[1] = array('4021_1', '4004_1', '572_1', '573_1', '825_1', '838_1', '837_1', '824_1', '839_1', '822_1');

$trasa['4004_1'] = array('Křenovice horní n.;4:23', 'Brno hl.n.;4:55');
$trasa['4021_1'] = array('Brno hl.n.;3:06', 'Křenovice horní n.;3:33');
$trasa['572_1'] = array('Brno hl.n.;6:08', 'Praha hl.n.;8:52');
$trasa['573_1'] = array('Praha hl.n.;17:05', 'Brno hl.n.;19:38');
$trasa['822_1'] = array('Bohumín;19:35', 'Brno hl.n.;21:56');
$trasa['824_1'] = array('Bohumín;18:35', 'Brno hl.n.;20:57');
$trasa['825_1'] = array('Brno hl.n.;7:02', 'Bohumín;9:39');
$trasa['837_1'] = array('Brno hl.n.;15:02', 'Bohumín;17:34');
$trasa['838_1'] = array('Bohumín;10:35', 'Brno hl.n.;12:57');
$trasa['839_1'] = array('Brno hl.n.;16:02', 'Bohumín;18:34');

$omezeni['4004_1'] = 'X';
$omezeni['4021_1'] = 'X';
$omezeni['572_1'] = 'X';
$omezeni['573_1'] = 'X';
$omezeni['822_1'] = 'T';
$omezeni['824_1'] = '6';
$omezeni['825_1'] = '6';
$omezeni['837_1'] = '6';
$omezeni['838_1'] = '6';
$omezeni['839_1'] = 'T';

$t7->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '15.6.2015', '30.6.2015 23:59:59'));

$obeh[1] = array('825_1', '838_1', '837_1', '824_1', '839_1', '822_1');

$t7->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '1.7.2015', '31.8.2015 23:59:59'));

$obeh[1] = array('4021_1', '4004_1', '572_1', '573_1', '839_1', '822_1');

$t7->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '1.9.2015'));

unset($obeh);
unset($omezeni);
unset($trasa);

// ---------------------------------------

include 'ts_308_2015_09_01.php';
include 'ts_308_2015_11_01.php';

@include 'spolecne/laky_vse.php';

?>
