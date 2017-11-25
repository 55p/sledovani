<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['100443_1', '445_1', '444_1', '100442_1'];

$omezeni['100442_1'] = '2312,3012,0801,0404,1709,0511';
$omezeni['100443_1'] = '1512,2712,0201,2703,0106,2409';
$omezeni['444_1'] = '59_2018';
$omezeni['445_1'] = '55_2018';

$trasa['100442_1'] = ['Košice;22:07','Bohumín;3:06'];
$trasa['100443_1'] = ['Bohumín;3:05','Košice;8:25'];
$trasa['444_1'] = ['Košice;20:35','Bohumín;1:40'];
$trasa['445_1'] = ['Bohumín;4:16','Košice;9:08'];


$poznamkaObehu['100443_1'] = ['př', 'přípřež'];
$poznamkaObehu['100442_1'] = ['př', 'přípřež'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts171 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


