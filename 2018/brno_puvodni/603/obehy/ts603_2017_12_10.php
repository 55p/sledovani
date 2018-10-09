<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['870_1', '869_1', '860_1', '860_2', '877_1', '872_1', '867_1', '862_1'];
$obeh[2] = ['876_1', '863_1', '866_1', '873_1'];
$obeh[3] = ['874_1', '874_2', '874_3', '865_1', '864_1', '864_2', '875_1'];
$obeh[4] = ['1971_1', '872_2', '867_2', '862_2', '877_2', '870_2', '869_2', '860_3', '862_3'];
$obeh[5] = ['861_1', '861_2', '861_3', '868_1', '871_1'];

$omezeni['1971_1'] = 'X';
$omezeni['860_1'] = 'X';
$omezeni['860_2'] = 'T';
$omezeni['860_3'] = '6';
$omezeni['861_1'] = 'X1';
$omezeni['861_2'] = 'X2345,6';
$omezeni['861_3'] = 'T';
$omezeni['862_1'] = '6';
$omezeni['862_2'] = 'X';
$omezeni['862_3'] = 'T';
$omezeni['864_1'] = 'X1234,6';
$omezeni['864_2'] = 'X5,T';
$omezeni['867_1'] = '6';
$omezeni['867_2'] = 'XT';
$omezeni['869_1'] = 'XT';
$omezeni['869_2'] = '6';
$omezeni['870_1'] = 'XT';
$omezeni['870_2'] = '6';
$omezeni['872_1'] = '6';
$omezeni['872_2'] = 'XT';
$omezeni['874_1'] = 'X';
$omezeni['874_2'] = 'X';
$omezeni['874_3'] = '25';
$omezeni['876_1'] = 'X6';
$omezeni['877_1'] = 'T';
$omezeni['877_2'] = 'X';

$trasa['874_1'] = ['Brno hl.n.;5:00','Česká Třebová;6:11'];
$trasa['874_2'] = ['Česká Třebová;6:14','Praha-Smíchov;8:27'];
$trasa['1971_1'] = ['Česká Třebová;4:43', 'Brno hl.n.;6:13'];
$trasa['860_1'] = ['Brno hl.n.;18:56', 'Pardubice hl.n.;20:56'];
$trasa['860_2'] = ['Brno hl.n.;18:56', 'Praha-Smíchov;22:18'];
$trasa['860_3'] = ['Brno hl.n.;18:56', 'Česká Třebová;20:13'];
$trasa['861_1'] = ['Praha hl.n.;5:58', 'Brno hl.n.;9:02'];
$trasa['861_2'] = ['Pardubice hl.n.;7:07', 'Brno hl.n.;9:02'];
$trasa['861_3'] = ['Česká Třebová;7:51', 'Brno hl.n.;9:02'];
$trasa['862_1'] = ['Brno hl.n.;16:55', 'Praha hl.n.;20:04'];
$trasa['862_2'] = ['Brno hl.n.;16:55', 'Praha-Smíchov;20:18'];
$trasa['862_3'] = ['Brno hl.n.;16:55', 'Praha hl.n.;20:04'];
$trasa['863_1'] = ['Praha hl.n.;7:58', 'Brno hl.n.;11:02'];
$trasa['864_1'] = ['Brno hl.n.;14:55', 'Praha-Smíchov;18:27'];
$trasa['864_2'] = ['Brno hl.n.;14:55', 'Praha-Smíchov;18:27'];
$trasa['865_1'] = ['Praha-Smíchov;9:42', 'Brno hl.n.;13:02'];
$trasa['866_1'] = ['Brno hl.n.;12:56', 'Praha-Smíchov;16:27'];
$trasa['867_1'] = ['Praha hl.n.;11:58', 'Brno hl.n.;15:02'];
$trasa['867_2'] = ['Praha hl.n.;11:58', 'Brno hl.n.;15:02'];
$trasa['868_1'] = ['Brno hl.n.;10:56', 'Praha-Smíchov;14:27'];
$trasa['869_1'] = ['Praha-Smíchov;13:42', 'Brno hl.n.;17:03'];
$trasa['869_2'] = ['Praha-Smíchov;13:42', 'Brno hl.n.;17:03'];
$trasa['870_1'] = ['Brno hl.n.;8:56', 'Praha-Smíchov;12:22'];
$trasa['870_2'] = ['Brno hl.n.;8:56', 'Praha-Smíchov;12:22'];
$trasa['871_1'] = ['Praha-Smíchov;15:42', 'Brno hl.n.;19:02'];
$trasa['872_1'] = ['Brno hl.n.;6:56', 'Praha hl.n.;10:04'];
$trasa['872_2'] = ['Brno hl.n.;6:56', 'Praha hl.n.;10:04'];
$trasa['873_1'] = ['Praha-Smíchov;17:42', 'Brno hl.n.;21:03'];
$trasa['874_3'] = ['Česká Třebová;6:14', 'Praha-Smíchov;8:27'];
$trasa['875_1'] = ['Praha-Smíchov;19:42', 'Česká Třebová;21:59'];
$trasa['876_1'] = ['Pardubice hl.n.;5:35', 'Praha hl.n.;6:36'];
$trasa['877_1'] = ['Praha-Smíchov;22:54', 'Pardubice hl.n.;0:16'];
$trasa['877_2'] = ['Praha-Smíchov;22:54', 'Pardubice hl.n.;0:16'];

$poznamkaObehu['874_2'] = ['pk', 'postrk'];
$poznamkaObehu['864_2'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts603 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


