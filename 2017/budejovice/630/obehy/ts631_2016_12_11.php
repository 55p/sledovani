<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['8001_1', '8004_1', '8002_1', '8005_1', '8010_1', '8009_1', '8014_1', '8013_1'];

$omezeni['8001_1'] = 'N';
$omezeni['8002_1'] = 'X';
$omezeni['8004_1'] = 'N';
$omezeni['8005_1'] = 'X, N';
$omezeni['8009_1'] = 'X';
$omezeni['8010_1'] = 'X, N';
$omezeni['8013_1'] = 'X, N';
$omezeni['8014_1'] = 'X, 6';

$trasa['8001_1'] = ['Strakonice;5:49', 'České Budějovice;6:53'];
$trasa['8002_1'] = ['České Budějovice;6:14', 'Strakonice;7:22'];
$trasa['8004_1'] = ['České Budějovice;9:05', 'Strakonice;10:06'];
$trasa['8005_1'] = ['Strakonice;10:05', 'České Budějovice;11:35'];
$trasa['8009_1'] = ['Strakonice;14:05', 'České Budějovice;15:35'];
$trasa['8010_1'] = ['České Budějovice;12:28', 'Strakonice;13:50'];
$trasa['8013_1'] = ['Strakonice;18:23', 'České Budějovice;19:35'];
$trasa['8014_1'] = ['České Budějovice;17:06', 'Strakonice;18:08'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts631 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


