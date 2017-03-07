<?php 
$zacatekPlatnosti = '20.2.2017';
$konecPlatnosti = '28.2.2017 23:59:59';

$obeh[1] = ['19481_1', '5952_1', '5905_1', '5910_1', '5911_1', '5914_1'];

$omezeni['19481_1'] = 'X';
$omezeni['5905_1'] = 'X';
$omezeni['5910_1'] = 'X';
$omezeni['5911_1'] = 'X';
$omezeni['5914_1'] = 'X';
$omezeni['5952_1'] = 'X';

$trasa['19481_1'] = ['Kolín;8:00','Kutná Hora;8:10'];
$trasa['5905_1'] = ['Kolín;10:05','Kutná Hora;10:15'];
$trasa['5910_1'] = ['Kutná Hora;14:28','Kolín;14:38'];
$trasa['5911_1'] = ['Kolín;15:05','Kutná Hora;15:15'];
$trasa['5914_1'] = ['Kutná Hora;16:30','Kolín;16:40'];
$trasa['5952_1'] = ['Kutná Hora;8:21','Kolín;8:31'];



$typ['19481_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts450 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


