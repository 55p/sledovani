<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1600_1', '1661_1', '1660_1', '1663_1', '1662_1', '1665_1', '1664_1', '1667_1', '3473_1', '1666_1', '1665_2', '1665_3', '1664_2', '1664_3', '1667_2', '1667_3', '1133_1'];

$omezeni['1133_1'] = 'T';
$omezeni['1600_1'] = 'X6';
$omezeni['1660_1'] = '11';
$omezeni['1661_1'] = 'T';
$omezeni['1664_1'] = 'X6';
$omezeni['1664_2'] = 'T';
$omezeni['1664_3'] = 'T';
$omezeni['1665_1'] = 'X6';
$omezeni['1665_2'] = 'T';
$omezeni['1665_3'] = 'T';
$omezeni['1666_1'] = '6';
$omezeni['1667_1'] = 'X6';
$omezeni['1667_2'] = 'T';
$omezeni['1667_3'] = 'T';
$omezeni['3473_1'] = 'X';

$trasa['1133_1'] = ['Krnov;19:06','Opava východ;19:33'];
$trasa['1664_2'] = ['Krnov;15:04','Glucholazy;15:53'];
$trasa['1664_3'] = ['Glucholazy;16:00','Jeseník;16:37'];
$trasa['1665_2'] = ['Jeseník;13:25','Jindřichov ve Slezsku;14:25'];
$trasa['1665_3'] = ['Jindřichov ve Slezsku;14:32','Krnov;14:58'];
$trasa['1667_2'] = ['Jeseník;17:25','Glucholazy;17:59'];
$trasa['1667_3'] = ['Glucholazy;18:08','Krnov;18:58'];

$poznamkaObehu['1665_3'] = ['pk', 'postrk'];
$poznamkaObehu['1664_2'] = ['pk', 'postrk'];
$poznamkaObehu['1667_2'] = ['pk', 'postrk'];

$trasa['1600_1'] = ['Bohumín;4:05', 'Opava východ;4:53'];
$trasa['1660_1'] = ['Opava východ;6:14', 'Jeseník;8:37'];
$trasa['1661_1'] = ['Lipová Lázně;5:14', 'Krnov;6:58'];
$trasa['1662_1'] = ['Krnov;11:04', 'Jeseník;12:37'];
$trasa['1663_1'] = ['Jeseník;9:30', 'Krnov;10:58'];
$trasa['1664_1'] = ['Krnov;15:04', 'Jeseník;16:37'];
$trasa['1665_1'] = ['Jeseník;13:25', 'Krnov;14:58'];
$trasa['1666_1'] = ['Krnov;19:04', 'Lipová Lázně;20:54'];
$trasa['1667_1'] = ['Jeseník;17:25', 'Krnov;18:58'];
$trasa['3473_1'] = ['Krnov;21:01', 'Opava východ;21:43'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts853 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


