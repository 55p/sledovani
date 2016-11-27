<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('70_1', '77_1', '758_1');
$obeh[2] = array('553_1', '76_1', '373_1');

$trasa['373_1'] = array('Praha hl.n.;18:52', 'Wien Hbf;22:49');
$trasa['70_1'] = array('Wien Hbf;7:10', 'Praha hl.n.;11:06');
$trasa['76_1'] = array('Graz Hbf;10:26', 'Praha hl.n.;17:06');
$trasa['77_1'] = array('Praha hl.n.;12:52', 'Graz Hbf;19:33');
$trasa['553_1'] = ['Wien Hbf;6:58','Graz Hbf;9:33'];
$trasa['758_1'] = ['Graz Hbf;20:25','Wien Hbf;23:02'];

$poznamkaObehu['70_1'] = array('pk', 'postrk');
$poznamkaObehu['758_1'] = array('pk', 'postrk');
$poznamkaObehu['76_1'] = array('pk', 'postrk');


@$ts323 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>