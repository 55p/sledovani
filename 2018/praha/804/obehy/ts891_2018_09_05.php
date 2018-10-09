<?php 
$zacatekPlatnosti = '5.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['7759_1', '7750_1', '7751_1', '7752_1', '7753_1', '7756_1', '7757_1', '7758_1'];

$omezeni['7750_1'] = '25';
$omezeni['7751_1'] = '25';
$omezeni['7752_1'] = '25';
$omezeni['7753_1'] = '25';
$omezeni['7756_1'] = '25';
$omezeni['7757_1'] = '25';
$omezeni['7758_1'] = '25';
$omezeni['7759_1'] = '25';

$trasa['7750_1'] = ['Praha hl.n.;8:54','Rudná u Prahy;9:19;9:20','Praha-Zličín;9:44'];
$trasa['7751_1'] = ['Praha-Zličín;10:38','Rudná u Prahy;10:59;11:10','Praha hl.n.;11:35'];
$trasa['7752_1'] = ['Praha hl.n.;11:50','Rudná u Prahy;12:32;12:47','Praha-Zličín;13:06'];
$trasa['7753_1'] = ['Praha-Zličín;13:47','Rudná u Prahy;14:08;14:09','Praha hl.n.;14:35'];
$trasa['7756_1'] = ['Praha hl.n.;14:54','Rudná u Prahy;15:19;15:20','Praha-Zličín;15:44'];
$trasa['7757_1'] = ['Praha-Zličín;15:50','Rudná u Prahy;16:10;16:15','Praha hl.n.;16:45'];
$trasa['7758_1'] = ['Praha hl.n.;17:17','Praha-Čakovice;17:42'];
$trasa['7759_1'] = ['Praha-Čakovice;8:20','Praha hl.n.;8:43'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts891 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


