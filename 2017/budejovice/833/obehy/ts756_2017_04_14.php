<?php 
$zacatekPlatnosti = '14.4.2017';
$konecPlatnosti = '1.10.2017 23:59:59';

$obeh[1] = ['8101_1', '18076_1', '18076_2', '8106_1', '8107_1', '8112_1', '8113_1'];
$obeh[2] = ['8100_1', '8103_1', '8108_1', '8109_1', '8114_1'];

$omezeni['18076_1'] = 'X';
$omezeni['18076_2'] = '25';
$omezeni['8100_1'] = 'X';
$omezeni['8101_1'] = 'X';

$trasa['18076_1'] = ['Černý Kříž;8:32', 'Nové Údolí;8:45'];
$trasa['18076_2'] = ['Volary;8:21', 'Nové Údolí;8:45'];
$trasa['8100_1'] = ['Volary;4:35', 'České Budějovice;6:56'];
$trasa['8101_1'] = ['České Budějovice;6:07', 'Černý Kříž;8:27'];
$trasa['8103_1'] = ['České Budějovice;8:09', 'Nové Údolí;10:42'];
$trasa['8106_1'] = ['Nové Údolí;9:19', 'České Budějovice;11:37'];
$trasa['8107_1'] = ['České Budějovice;12:11', 'Nové Údolí;14:42'];
$trasa['8108_1'] = ['Nové Údolí;11:15', 'České Budějovice;13:45'];
$trasa['8109_1'] = ['České Budějovice;14:22', 'Nové Údolí;16:42'];
$trasa['8112_1'] = ['Nové Údolí;15:19', 'České Budějovice;17:41'];
$trasa['8113_1'] = ['České Budějovice;18:22', 'Volary;20:47'];
$trasa['8114_1'] = ['Nové Údolí;17:19', 'České Budějovice;19:36'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts756 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


