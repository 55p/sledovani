<?php 
$zacatekPlatnosti = '17.5.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5018_1', '6281_1', '6288_1', '6288_2', '6288_3', '7187_1');
$obeh[2] = array('100934_1', '100935_1', '199999_1');

$omezeni['100934_1'] = '6';
$omezeni['100935_1'] = '6';
$omezeni['199999_1'] = 'XT';
$omezeni['5018_1'] = 'X6';
$omezeni['6288_1'] = 'X6,-2606';
$omezeni['6288_2'] = 'T';
$omezeni['6288_3'] = '2606';
$omezeni['7187_1'] = 'X';

$trasa['100934_1'] = array('Letohrad;5:34','Hradec Králové hl.n.;6:53');
$trasa['100935_1'] = array('Hradec Králové hl.n.;17:05','Letohrad;18:31');
$trasa['199999_1'] = array('záloha Letohrad;0:00;23:59');
$trasa['5018_1'] = array('Lichkov;5:42','Letohrad;6:08');
$trasa['6281_1'] = array('Letohrad;7:14','Wroclaw Glowny;10:03');
$trasa['6288_1'] = array('Wroclaw Glowny;16:36','Lichkov;19:14');
$trasa['6288_2'] = array('Wroclaw Glowny;16:36','Letohrad;19:47');
$trasa['6288_3'] = array('Wroclaw Glowny;16:36','Pardubice hl.n.;21:18');
$trasa['7187_1'] = array('Letohrad;20:34','Lichkov;21:01');

$poznamkaObehu['100934_1'] = array('pk', 'postrk');
$poznamkaObehu['100935_1'] = array('pk', 'postrk');




@$ts102 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>