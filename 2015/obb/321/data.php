<?php  
$obeh[1] = array('71_1', '370_1');
$obeh[2] = array('75_1', '756_1');
$obeh[3] = array('557_1', '78_1', '575_1');
$obeh[4] = array('574_1', '73_1', '372_1');

$TS['TS 321'] = $obeh;
unset($obeh);

$obeh[1] = array('72_1', '79_1');
$obeh[2] = array('74_1', '371_1');

$TS['TS 322'] = $obeh;
unset($obeh);

$obeh[1] = array('70_1', '77_1', '758_1');
$obeh[2] = array('553_1', '76_1', '373_1');

$TS['TS 323'] = $obeh;
unset($obeh);

$omezeni['574_1'] = '73_ph_2015';
$omezeni['575_1'] = '72_ph_2015';

$typ[-1] = 'railjet';

$trasa[70] = array('Wien Hbf;7:07', 'Praha hl.n.;11:18');
$trasa[71] = array('Praha hl.n.;6:42', 'Graz Hbf;13:33');
$trasa[72] = array('Graz Hbf;6:25', 'Praha hl.n.;13:18');
$trasa[73] = array('Praha hl.n.;8:42', 'Graz Hbf;15:33');
$trasa[74] = array('Graz Hbf;8:25', 'Praha hl.n.;15:18');
$trasa[75] = array('Praha hl.n.;10:42', 'Graz Hbf;17:33');
$trasa[76] = array('Graz Hbf;10:25', 'Praha hl.n.;17:18');
$trasa[77] = array('Praha hl.n.;12:42', 'Graz Hbf;19:33');
$trasa[78] = array('Graz Hbf;12:25', 'Praha hl.n.;19:18');
$trasa[79] = array('Praha hl.n.;14:42', 'Graz Hbf;21:33');
$trasa[370] = array('Graz Hbf;14:25', 'Praha hl.n.;21:18');
$trasa[371] = array('Praha hl.n.;16:42', 'Graz Hbf;23:33');
$trasa[372] = array('Graz Hbf;16:25', 'Praha hl.n.;23:18');
$trasa[373] = array('Praha hl.n.;18:42', 'Wien Hbf;22:52');
$trasa[553] = array('Wien Hbf;6:56', 'Graz Hbf;9:33');
$trasa[557] = array('Wien Hbf;8:56', 'Graz Hbf;11:33');
$trasa[574] = array('Brno hl.n.;4:31', 'Praha hl.n.;7:18');
$trasa[575] = array('Praha hl.n.;19:42', 'Brno hl.n.;22:19');
$trasa[756] = array('Graz Hbf;18:25', 'Wien Hbf;21:03');
$trasa[758] = array('Graz Hbf;20:25', 'Wien Hbf;23:03');

$poznamkaObehu['370_1'] = array('', 'Joseph Haydn');
$poznamkaObehu['371_1'] = array('', 'Joseph Haydn');
$poznamkaObehu['372_1'] = array('', 'W. A. Mozart');
$poznamkaObehu['373_1'] = array('', 'W. A. Mozart');
$poznamkaObehu['574_1'] = array('', 'Leoš Janáček');
$poznamkaObehu['575_1'] = array('', 'Leoš Janáček');
$poznamkaObehu['70_1'] = array('', 'Gustav Mahler');
$poznamkaObehu['71_1'] = array('', 'Gustav Mahler');
$poznamkaObehu['72_1'] = array('', 'Bedřich Smetana');
$poznamkaObehu['73_1'] = array('', 'Bedřich Smetana');
$poznamkaObehu['74_1'] = array('', 'Franz Schubert');
$poznamkaObehu['75_1'] = array('', 'Franz Schubert');
$poznamkaObehu['76_1'] = array('', 'Antonín Dvořák');
$poznamkaObehu['77_1'] = array('', 'Antonín Dvořák');
$poznamkaObehu['78_1'] = array('', 'Johann Strauss');
$poznamkaObehu['79_1'] = array('', 'Johann Strauss');

@include 'spolecne/laky_vse.php';

/*
foreach ($zjOmez as $array) {
  foreach ($array as $key => $vlak) {
    if ($key == 0) continue;
    $omezeni[$vlak] = $array[0];
  }
}
*/

$skupiny[] = $ts321 = new TS ('TS 321');
$skupiny[] = $ts322 = new TS ('TS 322');
$skupiny[] = $ts323 = new TS ('TS 323');
$ts321 -> obeh (new Obeh($TS['TS 321'], $trasa, $omezeni, $typ, $poznamkaObehu));
$ts322 -> obeh (new Obeh($TS['TS 322'], $trasa, $omezeni, $typ, $poznamkaObehu));
$ts323 -> obeh (new Obeh($TS['TS 323'], $trasa, $omezeni, $typ, $poznamkaObehu, null, '1.12.2015 23:59:59'));

unset($TS);

include 'ts321_2015_12_02.php';

?>
