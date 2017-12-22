<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1661_1', '1660_1', '1660_2', '1663_1', '1662_1', '1665_1', '1664_1', '1667_1', '1666_1', '101133_1', '3473_1'];

$omezeni['101133_1'] = 'T';
$omezeni['1660_1'] = 'X6';
$omezeni['1660_2'] = 'T';
$omezeni['1661_1'] = 'T';
$omezeni['1666_1'] = '6';
$omezeni['3473_1'] = 'X';

$trasa['101133_1'] = ['Krnov;19:06','Opava východ;19:33'];
$trasa['1660_2'] = ['Krnov;7:04','Jeseník;8:37'];


$poznamkaObehu['101133_1'] = ['př', 'přípřež'];

$trasa['1660_1'] = ['Opava východ;6:14', 'Jeseník;8:37'];
$trasa['1661_1'] = ['Lipová Lázně;5:16', 'Krnov;6:58'];
$trasa['1662_1'] = ['Krnov;11:04', 'Jeseník;12:37'];
$trasa['1663_1'] = ['Jeseník;9:30', 'Krnov;10:58'];
$trasa['1664_1'] = ['Krnov;15:04', 'Jeseník;16:37'];
$trasa['1665_1'] = ['Jeseník;13:25', 'Krnov;14:58'];
$trasa['1666_1'] = ['Krnov;19:04', 'Lipová Lázně;20:52'];
$trasa['1667_1'] = ['Jeseník;17:25', 'Krnov;18:58'];
$trasa['3473_1'] = ['Krnov;21:01', 'Opava východ;21:38'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts853 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


