<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('22200_1', '22203_1', '22202_1', '22205_1', '22208_1', '22209_1', '22222_1', '122211_1', '22212_1', '22213_1', '5963_1', '5962_1');

$omezeni['122211_1'] = 'X';
$omezeni['22200_1'] = 'X';
$omezeni['22202_1'] = '6,T';
$omezeni['22203_1'] = 'X';
$omezeni['22205_1'] = '6,T';
$omezeni['22212_1'] = '6,T';
$omezeni['22213_1'] = '6,T';
$omezeni['22222_1'] = 'X';
$omezeni['5962_1'] = '5';
$omezeni['5963_1'] = '5';

$trasa['122211_1'] = array('Uhlířské Janovice;16:37','Kolín;17:19');

$poznamkaObehu['122211_1'] = array('pk', 'postrk');

$trasa['22200_1'] = array('Kolín;4:11', 'Ledečko;5:23');
$trasa['22202_1'] = array('Kolín;6:32', 'Sázava-Černé Budy;7:47');
$trasa['22203_1'] = array('Ledečko;6:16', 'Kolín;7:25');
$trasa['22205_1'] = array('Sázava-Černé Budy;8:03', 'Kolín;9:20');
$trasa['22208_1'] = array('Kolín;12:25', 'Ledečko;13:33');
$trasa['22209_1'] = array('Ledečko;14:05', 'Kolín;15:14');
$trasa['22212_1'] = array('Kolín;16:50', 'Ledečko;17:56');
$trasa['22213_1'] = array('Ledečko;18:05', 'Kolín;19:14');
$trasa['22222_1'] = array('Kolín;15:45', 'Uhlířské Janovice;16:25');
$trasa['5962_1'] = array('Čáslav;20:01', 'Kolín;20:22');
$trasa['5963_1'] = array('Kolín;19:37', 'Čáslav;19:58');


@$ts862 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>