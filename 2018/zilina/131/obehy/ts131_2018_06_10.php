<?php 
$zacatekPlatnosti = '10.8.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3990_1', '3994_1', '103953_1', '3996_1', '103955_1', '4470_1', '4473_1', '3955_1', '3908_1', '3917_1', '1751_1', '3428_1', '3930_1'];

$omezeni['1751_1'] = 'X';
$omezeni['3428_1'] = 'X';
$omezeni['3908_1'] = 'X';
$omezeni['3917_1'] = 'X';
$omezeni['3930_1'] = 'X7,0204,0105,0805,0507,2908,0111,-0104';
$omezeni['3955_1'] = '6,3003,0105,0805,0507,2908,0111,3103';
$omezeni['3990_1'] = 'X';
$omezeni['3994_1'] = 'X';
$omezeni['3996_1'] = 'X';
$omezeni['4470_1'] = 'X';
$omezeni['4473_1'] = 'X';
$omezeni['103953_1'] = 'X';
$omezeni['103955_1'] = 'X';

$trasa['1751_1'] = ['Žilina;14:10','Liptovský Mikuláš;15:29'];
$trasa['3428_1'] = ['Liptovský Mikuláš;16:41','Žilina;18:17'];
$trasa['3908_1'] = ['Žilina;8:48','Čadca;9:26'];
$trasa['3917_1'] = ['Čadca;10:35','Žilina;11:13'];
$trasa['3930_1'] = ['Žilina;18:48','Čadca;19:26'];
$trasa['3955_1'] = ['Čadca;6:35','Žilina;7:16'];
$trasa['3990_1'] = ['Čadca;3:11','Skalité;3:42'];
$trasa['3994_1'] = ['Skalité;4:41','Skalité-Serafínov;4:49'];
$trasa['3996_1'] = ['Skalité;5:30','Skalité-Serafínov;5:37'];
$trasa['4470_1'] = ['Skalité;6:05','Zwardoń;6:17'];
$trasa['4473_1'] = ['Zwardoń;6:42','Žilina;8:13'];
$trasa['103953_1'] = ['Skalité-Serafínov;4:55','Skalité;5:06'];
$trasa['103955_1'] = ['Skalité-Serafínov;5:43','Skalité;5:54'];
//sem patri stazene trasy


$poznamkaObehu['103953_1'] = ['pk', 'postrk'];
$poznamkaObehu['103955_1'] = ['pk', 'postrk'];


$typ['3990_1'] = 'Sv';
$typ['3994_1'] = 'Sv';
$typ['3996_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts131 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


