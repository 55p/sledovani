<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('71_1', '370_1');
$obeh[2] = array('75_1', '75_2', '1275_1', '756_1');
$obeh[3] = array('557_1', '78_1', '581_1');
$obeh[4] = array('580_1', '73_1', '73_2', '1273_1', '372_1');

$omezeni['1273_1'] = '5';
$omezeni['1275_1'] = '5';
$omezeni['580_1'] = 'X6';
$omezeni['581_1'] = 'XT';
$omezeni['73_1'] = '1,2,3,4,6,7';
$omezeni['73_2'] = '5';
$omezeni['75_1'] = '1,2,3,4,6,7';
$omezeni['75_2'] = '5';

$trasa['1273_1'] = array('Wien Hbf;12:58','Graz Hbf;15:33');
$trasa['1275_1'] = array('Wien Hbf;14:58','Graz Hbf;17:33');
$trasa['557_1'] = array('Wien Hbf;8:58','Graz Hbf;11:33');
$trasa['756_1'] = array('Graz Hbf;18:25','Wien Hbf;21:02');

$poznamkaObehu['370_1'] = array('pk', 'postrk');
$poznamkaObehu['756_1'] = array('pk', 'postrk');
$poznamkaObehu['78_1'] = array('pk', 'postrk');
$poznamkaObehu['372_1'] = array('pk', 'postrk');

$trasa['370_1'] = array('Graz Hbf;14:25', 'Praha hl.n.;21:08');
$trasa['372_1'] = array('Graz Hbf;16:25', 'Praha hl.n.;23:08');
$trasa['580_1'] = array('Brno hl.n.;4:31', 'Praha hl.n.;7:08');
$trasa['581_1'] = array('Praha hl.n.;19:49', 'Brno hl.n.;22:22');
$trasa['71_1'] = array('Praha hl.n.;6:49', 'Graz Hbf;13:33');
$trasa['73_1'] = array('Praha hl.n.;8:49', 'Graz Hbf;15:33');
$trasa['73_2'] = array('Praha hl.n.;8:49', 'Wien Hbf;12:51');
$trasa['75_1'] = array('Praha hl.n.;10:49', 'Graz Hbf;17:33');
$trasa['75_2'] = array('Praha hl.n.;10:49', 'Wien Hbf;14:51');
$trasa['78_1'] = array('Graz Hbf;12:25', 'Praha hl.n.;19:08');



@$ts321 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>