<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('71_1', '370_1');
$obeh[2] = array('75_1', '756_1');
$obeh[3] = array('557_1', '78_1', '579_1');
$obeh[4] = array('580_1', '73_1', '372_1');

$omezeni['579_1'] = '10';
$omezeni['580_1'] = '11';

$trasa['1275_1'] = ['Wien Hbf;14:58','Graz Hbf;17:33'];
$trasa['557_1'] = ['Wien Hbf;8:58','Graz Hbf;11:33'];
$trasa['756_1'] = ['Graz Hbf;18:25','Wien Hbf;21:02'];

$poznamkaObehu['370_1'] = array('pk', 'postrk');
$poznamkaObehu['756_1'] = array('pk', 'postrk');
$poznamkaObehu['78_1'] = array('pk', 'postrk');
$poznamkaObehu['372_1'] = array('pk', 'postrk');

$trasa['370_1'] = array('Graz Hbf;14:26', 'Praha hl.n.;21:06');
$trasa['372_1'] = array('Graz Hbf;16:26', 'Praha hl.n.;23:13');
$trasa['579_1'] = array('Praha hl.n.;19:47', 'Brno hl.n.;22:20');
$trasa['580_1'] = array('Brno hl.n.;4:31', 'Praha hl.n.;7:06');
$trasa['71_1'] = array('Praha hl.n.;6:50', 'Graz Hbf;13:33');
$trasa['73_1'] = array('Praha hl.n.;8:52', 'Graz Hbf;15:33');
$trasa['75_1'] = array('Praha hl.n.;10:52', 'Graz Hbf;17:33');
$trasa['78_1'] = array('Graz Hbf;12:26', 'Praha hl.n.;19:06');


@$ts321 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>