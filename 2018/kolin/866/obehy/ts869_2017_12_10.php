<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['18573_1', '18572_1', '8511_1', '8512_1', '108512_1', '18575_1', '18574_1', '18577_1', '18576_1', '18556_1', '8527_1', '8560_1'];

$omezeni['108512_1'] = 'X';
$omezeni['18556_1'] = 'X';
$omezeni['18572_1'] = 'X';
$omezeni['18573_1'] = 'X';
$omezeni['18574_1'] = 'X';
$omezeni['18575_1'] = 'X';
$omezeni['18576_1'] = 'X';
$omezeni['18577_1'] = 'X';
$omezeni['8511_1'] = 'X';
$omezeni['8512_1'] = 'X';
$omezeni['8527_1'] = 'X';
$omezeni['8560_1'] = 'X';

$trasa['108512_1'] = ['Mladá Boleslav hl.n.;10:39','Mladá Boleslav město;10:45'];
$trasa['8512_1'] = ['Mšeno;9:48','Mladá Boleslav hl.n.;10:32'];
$trasa['18556_1'] = ['Mladá Boleslav hl.n.;16:40', 'Mladá Boleslav město;16:46'];
$trasa['18572_1'] = ['Dolní Bousov;7:55', 'Mladá Boleslav hl.n.;8:28'];
$trasa['18573_1'] = ['Mladá Boleslav hl.n.;6:51', 'Dolní Bousov;7:36'];
$trasa['18574_1'] = ['Dolní Bousov;13:20', 'Bakov nad Jizerou;13:43'];
$trasa['18575_1'] = ['Mladá Boleslav město;12:28', 'Dolní Bousov;13:18'];
$trasa['18576_1'] = ['Dolní Bousov;15:19', 'Mladá Boleslav hl.n.;15:58'];
$trasa['18577_1'] = ['Bakov nad Jizerou;14:20', 'Dolní Bousov;14:43'];
$trasa['8511_1'] = ['Mladá Boleslav hl.n.;8:43', 'Mšeno;9:25'];
$trasa['8527_1'] = ['Mladá Boleslav město;17:13', 'Mělník;18:48'];
$trasa['8560_1'] = ['Mělník;19:24', 'Řepov;21:31'];

$poznamkaObehu['108512_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts869 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


