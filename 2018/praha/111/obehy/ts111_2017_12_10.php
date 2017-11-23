<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['8804_1', '8809_1', '8812_1', '8817_1', '8820_1', '8825_1'];
$obeh[2] = ['8808_1', '8813_1', '8816_1', '8821_1'];
$obeh[3] = ['29099_1', '99999_1', '29098_1'];

$omezeni['29098_1'] = 'X';
$omezeni['29099_1'] = 'X';
$omezeni['8804_1'] = 'X';
$omezeni['8808_1'] = 'X';
$omezeni['8809_1'] = 'X';
$omezeni['8812_1'] = 'X';
$omezeni['8813_1'] = 'X';
$omezeni['8816_1'] = 'X';
$omezeni['8817_1'] = 'X';
$omezeni['8820_1'] = 'X';
$omezeni['8821_1'] = 'X';
$omezeni['8825_1'] = 'X';
$omezeni['99999_1'] = 'X';

$trasa['29098_1'] = ['Praha-Vysočany;20:00','Praha-Libeň;20:04'];
$trasa['29099_1'] = ['Praha-Libeň;5:01','Praha-Vysočany;5:05'];
$trasa['99999_1'] = ['záloha Praha-Vysočany;5:05;20:00'];

$poznamkaObehu['8809_1'] = ['pk', 'postrk'];
$poznamkaObehu['8817_1'] = ['pk', 'postrk'];
$poznamkaObehu['8825_1'] = ['pk', 'postrk'];
$poznamkaObehu['8813_1'] = ['pk', 'postrk'];
$poznamkaObehu['8821_1'] = ['pk', 'postrk'];


$typ['29099_1'] = 'Sv';
$typ['29098_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts111 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


