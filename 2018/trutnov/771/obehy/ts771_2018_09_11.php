<?php 
$zacatekPlatnosti = '11.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['932_1', '923_1', '926_1', '929_1', '920_1'];
$obeh[2] = ['1780_1', '930_1', '925_1', '924_1', '935_1'];
$obeh[3] = ['934_1', '921_1', '928_1', '927_1', '922_1', '949_1', '101876_1'];
$obeh[4] = ['1781_1', '950_1', '931_1'];

$omezeni['934_1'] = '11';
$omezeni['935_1'] = '10';
$omezeni['949_1'] = 'XT,-2809,-1711';
$omezeni['950_1'] = 'X6,2809,-2909';
$omezeni['1781_1'] = 'X6,2809,-2909';
$omezeni['101876_1'] = 'XT,-2809,-1711';

$trasa['920_1'] = ['Trutnov hl.n.;18:43','Hradec Králové hl.n.;19:55'];
$trasa['921_1'] = ['Hradec Králové hl.n.;8:04','Trutnov hl.n.;9:20'];
$trasa['922_1'] = ['Trutnov hl.n.;16:43','Hradec Králové hl.n.;17:55'];
$trasa['923_1'] = ['Hradec Králové hl.n.;10:04','Trutnov hl.n.;11:20'];
$trasa['924_1'] = ['Trutnov hl.n.;14:43','Hradec Králové hl.n.;15:55'];
$trasa['925_1'] = ['Hradec Králové hl.n.;12:04','Trutnov hl.n.;13:20'];
$trasa['926_1'] = ['Trutnov hl.n.;12:43','Hradec Králové hl.n.;13:55'];
$trasa['927_1'] = ['Hradec Králové hl.n.;14:04','Trutnov hl.n.;15:20'];
$trasa['928_1'] = ['Trutnov hl.n.;10:43','Hradec Králové hl.n.;11:55'];
$trasa['929_1'] = ['Hradec Králové hl.n.;16:04','Trutnov hl.n.;17:20'];
$trasa['930_1'] = ['Trutnov hl.n.;8:43','Hradec Králové hl.n.;9:55'];
$trasa['931_1'] = ['Hradec Králové hl.n.;18:04','Trutnov hl.n.;19:20'];
$trasa['932_1'] = ['Trutnov hl.n.;6:43','Hradec Králové hl.n.;7:55'];
$trasa['934_1'] = ['Letohrad;5:33','Hradec Králové hl.n.;6:53'];
$trasa['935_1'] = ['Hradec Králové hl.n.;17:05','Letohrad;18:30'];
$trasa['949_1'] = ['Hradec Králové hl.n.;19:03','Starkoč;19:36'];
$trasa['950_1'] = ['Starkoč;5:20','Hradec Králové hl.n.;5:55'];
$trasa['1780_1'] = ['Hradec Králové hl.n.;6:00','Trutnov hl.n.;7:20'];
$trasa['1781_1'] = ['Trutnov hl.n.;4:40','Starkoč;5:17'];
$trasa['101876_1'] = ['Starkoč;19:41','Trutnov hl.n.;20:21'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts771 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


