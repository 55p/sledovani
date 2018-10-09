<?php 
$zacatekPlatnosti = '30.8.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['114903_1', '14932_1', '14905_1', '14947_1', '14910_1', '14933_1', '14934_1', '14935_1', '14936_1', '114905_1', '14902_1', '11441_1', '14907_1', '11443_1', '4994_1', '14916_1'];

$omezeni['4994_1'] = 'T';
$omezeni['11441_1'] = '6';
$omezeni['11443_1'] = '6';
$omezeni['14902_1'] = '6';
$omezeni['14905_1'] = 'X';
$omezeni['14907_1'] = '6';
$omezeni['14910_1'] = 'X';
$omezeni['14916_1'] = 'T';
$omezeni['14932_1'] = 'X';
$omezeni['14933_1'] = 'X';
$omezeni['14934_1'] = 'X';
$omezeni['14935_1'] = 'X';
$omezeni['14936_1'] = 'X';
$omezeni['14947_1'] = 'X';
$omezeni['114903_1'] = 'X';
$omezeni['114905_1'] = '6';

$trasa['4994_1'] = ['Brno-Maloměřice;14:47','Tišnov;15:10'];
$trasa['11441_1'] = ['Nové Město na Moravě;7:02','Nedvědice;7:53'];
$trasa['11443_1'] = ['Tišnov;8:40','Brno-Maloměřice;9:05'];
$trasa['14902_1'] = ['Bystřice nad Pernštejnem;6:33','Nové Město na Moravě;6:57'];
$trasa['14916_1'] = ['Tišnov;15:34','Nové Město na Moravě;16:57'];
$trasa['114903_1'] = ['Nové Město na Moravě;5:02','Bystřice nad Pernštejnem;5:25'];
$trasa['114905_1'] = ['Nové Město na Moravě;6:02','Bystřice nad Pernštejnem;6:25'];
$trasa['14905_1'] = ['Nové Město na Moravě;6:02', 'Nedvědice;6:57'];
$trasa['14907_1'] = ['Nedvědice;8:01', 'Tišnov;8:25'];
$trasa['14910_1'] = ['Tišnov;12:34', 'Nové Město na Moravě;13:57'];
$trasa['14932_1'] = ['Bystřice nad Pernštejnem;5:33', 'Nové Město na Moravě;5:57'];
$trasa['14933_1'] = ['Nové Město na Moravě;14:02', 'Nedvědice;14:54'];
$trasa['14934_1'] = ['Nedvědice;14:59', 'Nové Město na Moravě;15:57'];
$trasa['14935_1'] = ['Nové Město na Moravě;16:02', 'Nedvědice;16:54'];
$trasa['14936_1'] = ['Nedvědice;16:59', 'Nové Město na Moravě;17:57'];
$trasa['14947_1'] = ['Nedvědice;9:01', 'Tišnov;9:25'];
//sem patri stazene trasy




$typ['11441_1'] = 'Sv';
$typ['11443_1'] = 'Sv';
$typ['4994_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts880 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


