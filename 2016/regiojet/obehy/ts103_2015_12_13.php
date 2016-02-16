<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1000_1', '1005_1', '1014_1', '1019_1');
$obeh[2] = array('1006_1', '1013_1');

$omezeni['1000_1'] = 'X6,-2812,-2912,-3012,-3112';
$omezeni['1006_1'] = '-2412,-2512,-2612,-2712,-2812,-2912,-3012,-3112,-0101,-2803,-0105,-0805,-0507,-0607,-2809,-2810,-1717';
$omezeni['1013_1'] = '-2312,-2412,-2512,-2612,-2712,-2812,-2912,-3012,-3112,-2703,-3004,-0705,-0407,-0507,-2709,-2710,-1611';
$omezeni['1019_1'] = '10';

$trasa['1000_1'] = array('Návsí;3:32', 'Praha hl.n.;7:58');
$trasa['1005_1'] = array('Praha hl.n.;9:46', 'Havířov;13:29');
$trasa['1006_1'] = array('Návsí;6:32', 'Praha hl.n.;10:58');
$trasa['1013_1'] = array('Praha hl.n.;15:46', 'Návsí;20:08');
$trasa['1014_1'] = array('Havířov;14:11', 'Praha hl.n.;17:58');
$trasa['1019_1'] = array('Praha hl.n.;19:46', 'Návsí;0:08');


@$ts103 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>