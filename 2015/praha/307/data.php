<?php
include 'spolecne/laky_vse.php';

$skupiny[] = $t307 = new TS('TS 307');
$skupiny[] = $t308 = new TS('TS 308');
$skupiny[] = $t309 = new TS('TS 309');

$typ[476] = $typ[477] = 'EN';
$typ[457] = $typ[456] = 'EN';
$typ[458] = $typ[459] = 'EN';
$typ[-1] = 'EC';
$typ[601] = $typ[678] = 'R';
$typ[70998] = $typ[71230] = $typ[71261] = 'Lv';

//$trasa = array();
$poznamkaObehu['170']   = array('', 'Hungaria');
$poznamkaObehu['171_1'] = array('', 'Hungaria');
$poznamkaObehu['172_1'] = array('', 'Porta Bohemica');
$poznamkaObehu['173_1'] = array('', 'Porta Bohemica');
$poznamkaObehu['175_1'] = array('', 'Jan Jesenius');
$poznamkaObehu['176_1'] = array('', 'Johannes Brahms');
$poznamkaObehu['177_1'] = array('', 'Slovenská strela');
$poznamkaObehu['178_1'] = array('', 'Alois Negrelli');
$poznamkaObehu['179_1'] = array('', 'Alois Negrelli');
$poznamkaObehu['378_1'] = array('', 'Slovenská strela');
$poznamkaObehu['379_1'] = array('', 'Carl Maria von Weber');
$poznamkaObehu['456']   = array('', 'Phoenix');
$poznamkaObehu['457'] = array('', 'Phoenix');
$poznamkaObehu['476']   = array('', 'Metropol');
$poznamkaObehu['477_1'] = array('', 'Metropol');

$omezeni['458_2'] = 'X5, 6';
$omezeni['459_2'] = '25';
$omezeni['100601_1'] = 'X';
$omezeni['678_1'] = 'X';
$omezeni['678_2'] = 'X';
$omezeni['70998_1'] = '25';
$omezeni['70998_2'] = 'X';
$omezeni['70998_3'] = 'X5';
$omezeni['70998_4'] = '6';
$omezeni['71230_1'] = 'X1';
$omezeni['71261_1'] = 'X2, X3, X4, X5';


$obeh[1] = array('178_1', '173_1', '172_1', '179_1');
$obeh[2] = array('176_1', '175_1', '170_1', '477_1');
$obeh[3] = array('476_1', '171_1', '174_1', '379_1');

include 'tr_307.php';

$t307->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu));

unset($obeh);
unset($trasa);
//unset($omezeni);
//unset($poznamkaObehu);

/// ---------------------------------------

$poznamkaObehu=array();
$obeh[1] = array('457_1', '378_1', '177_1', '456_2');

include 'tr_308.php';

$t308->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu));

unset($obeh);
unset($trasa);
//unset($omezeni);
//unset($poznamkaObehu);

/// ---------------------------------------

$poznamkaObehu=array();
$obeh[1] = array('459_1', '70998_1', '678_1', '70998_2', '458_1');

include 'tr_309a.php';

$t309->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, NULL, '31.10.2015 23:59:59'));

unset($obeh);
unset($trasa);
//unset($omezeni);
//unset($poznamkaObehu);

/// ---------------------------------------

$poznamkaObehu=array();
$obeh[1] = array('71230_1', '71261_1', '100601_1', '678_2', '70998_3', '459_2', '70998_4', '458_2');

include 'tr_309b.php';
$t309->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '1.11.2015'));

unset($obeh);
unset($trasa);
//unset($omezeni);
//unset($poznamkaObehu);


?>