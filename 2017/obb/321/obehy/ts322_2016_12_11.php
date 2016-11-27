<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('72_1', '79_1');
$obeh[2] = array('74_1', '371_1');



$poznamkaObehu['72_1'] = array('pk', 'postrk');
$poznamkaObehu['74_1'] = array('pk', 'postrk');


$trasa['371_1'] = array('Praha hl.n.;16:52', 'Graz Hbf;23:33');
$trasa['72_1'] = array('Graz Hbf;6:26', 'Praha hl.n.;13:06');
$trasa['74_1'] = array('Graz Hbf;8:26', 'Praha hl.n.;15:06');
$trasa['79_1'] = array('Praha hl.n.;14:52', 'Graz Hbf;21:33');



@$ts322 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>