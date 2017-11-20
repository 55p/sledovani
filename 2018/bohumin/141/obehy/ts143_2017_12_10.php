<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['510_1', '509_1', '502_1', '511_1'];

$omezeni['502_1'] = '1,3,4,5,7,1212,0901,2301,0602,2002,0603,2003,0304,1704,1505,2905';
$omezeni['509_1'] = '1,3,4,5,7,1212,0901,2301,0602,2002,0603,2003,0304,1704,1505,2905';
$omezeni['510_1'] = '7,2012,0301,1701,3101,1402,2802,1403,2803,1404,2504,0905,2305,0606';
$omezeni['511_1'] = '6,1912,0201,1601,3001,1302,2702,1303,2703,1004,2404,0805,2205,0506';

$trasa['502_1'] = ['Ostrava hl.n.;17:17', 'Praha hl.n.;20:18'];
$trasa['509_1'] = ['Praha hl.n.;13:42', 'Ostrava hl.n.;16:43'];
$trasa['510_1'] = ['Bohumín;9:08', 'Praha hl.n.;12:18'];
$trasa['511_1'] = ['Praha hl.n.;15:42', 'Bohumín;18:52'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts143 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


