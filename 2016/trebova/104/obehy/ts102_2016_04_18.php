<?php 
$zacatekPlatnosti = '18.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5018_1', '6281_1', '6280_1', '7145_1', '7165_1', '7170_1', '6282_1', '6285_1', '6286_1', '5019_1', '6289_1', '6288_1', '7187_1');
$obeh[2] = array('100934_1', '100935_1', '199999_1');

$omezeni['100934_1'] = '6';
$omezeni['100935_1'] = '6';
$omezeni['199999_1'] = 'XT';
$omezeni['5018_1'] = 'X6';
$omezeni['5019_1'] = 'X';
$omezeni['6282_1'] = '25';
$omezeni['6288_1'] = 'X';
$omezeni['6289_1'] = 'T';
$omezeni['7145_1'] = '25';
$omezeni['7165_1'] = 'X';
$omezeni['7170_1'] = 'X';
$omezeni['7187_1'] = 'X';

$trasa['100934_1'] = array('Letohrad;5:34','Hradec Králové hl.n.;6:53');
$trasa['100935_1'] = array('Hradec Králové hl.n.;17:05','Letohrad;18:31');
$trasa['199999_1'] = array('záloha Letohrad;0:00;23:59');

$poznamkaObehu['100934_1'] = array('pk', 'postrk');
$poznamkaObehu['100935_1'] = array('pk', 'postrk');

$trasa['5018_1'] = array('Lichkov;5:42', 'Letohrad;6:08');
$trasa['5019_1'] = array('Letohrad;17:06', 'Lichkov;17:35');
$trasa['6280_1'] = array('Miedzilesie;9:06', 'Letohrad;9:45');
$trasa['6281_1'] = array('Letohrad;7:14', 'Miedzilesie;7:41');
$trasa['6282_1'] = array('Lichkov;12:17', 'Letohrad;12:45');
$trasa['6285_1'] = array('Letohrad;13:07', 'Lichkov;13:33');
$trasa['6286_1'] = array('Lichkov;16:04', 'Letohrad;16:30');
$trasa['6288_1'] = array('Lichkov;19:19', 'Letohrad;19:47');
$trasa['6289_1'] = array('Letohrad;19:10', 'Lichkov;19:36');
$trasa['7145_1'] = array('Letohrad;10:08', 'Lichkov;10:36');
$trasa['7165_1'] = array('Letohrad;10:51', 'Jablonné nad Orlicí;11:01');
$trasa['7170_1'] = array('Jablonné nad Orlicí;11:19', 'Letohrad;11:30');
$trasa['7187_1'] = array('Letohrad;20:34', 'Lichkov;21:01');


@$ts102 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>