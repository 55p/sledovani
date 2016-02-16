<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('70_1', '77_1', '77_2', '1277_1', '758_1');
$obeh[2] = array('553_1', '76_1', '373_1');

$omezeni['1277_1'] = '6,7';
$omezeni['77_1'] = '1,2,3,4,5';
$omezeni['77_2'] = '6,7';

$trasa['553_1'] = array('Wien Hbf;6:58','Graz Hbf;9:33');
$trasa['1277_1'] = array('Wien Hbf;16:58','Graz Hbf;19:33');
$trasa['758_1'] = array('Graz Hbf;20:25','Wien Hbf;23:02');

$poznamkaObehu['70_1'] = array('pk', 'postrk');
$poznamkaObehu['758_1'] = array('pk', 'postrk');
$poznamkaObehu['76_1'] = array('pk', 'postrk');


$trasa['373_1'] = array('Praha hl.n.;18:49', 'Wien Hbf;22:51');
$trasa['70_1'] = array('Wien Hbf;7:09', 'Praha hl.n.;11:08');
$trasa['76_1'] = array('Graz Hbf;10:25', 'Praha hl.n.;17:08');
$trasa['77_1'] = array('Praha hl.n.;12:49', 'Graz Hbf;19:33');
$trasa['77_2'] = array('Praha hl.n.;12:49', 'Wien Hbf;16:51');



@$ts323 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>