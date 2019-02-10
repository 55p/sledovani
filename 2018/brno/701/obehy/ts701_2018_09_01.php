<?php 
$zacatekPlatnosti = '1.9.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['668_1', '661_1', '662_1', '667_1', '650_1'];
$obeh[2] = ['653_1', '664_1', '665_1', '652_1'];
$obeh[3] = ['4801_1', '11487_1', '11492_1', '4816_1'];
$obeh[4] = ['651_1', '666_1', '663_1', '660_1', '669_1'];

$omezeni['650_1'] = 'XT';
$omezeni['651_1'] = 'X6';
$omezeni['4801_1'] = 'X';
$omezeni['4816_1'] = 'X';
$omezeni['11487_1'] = 'X';
$omezeni['11492_1'] = 'X';

$trasa['650_1'] = ['Brno hl.n.;19:27','Jihlava;21:17'];
$trasa['651_1'] = ['Jihlava;6:40','Brno hl.n.;8:30'];
$trasa['652_1'] = ['Brno hl.n.;17:27','Jihlava;19:18'];
$trasa['653_1'] = ['Jihlava;8:40','Brno hl.n.;10:30'];
$trasa['660_1'] = ['Brno hl.n.;15:27','Jihlava;17:18'];
$trasa['661_1'] = ['Jihlava;10:40','Brno hl.n.;12:30'];
$trasa['662_1'] = ['Brno hl.n.;13:27','Jihlava;15:18'];
$trasa['663_1'] = ['Jihlava;12:40','Brno hl.n.;14:30'];
$trasa['664_1'] = ['Brno hl.n.;11:27','Jihlava;13:18'];
$trasa['665_1'] = ['Jihlava;14:40','Brno hl.n.;16:30'];
$trasa['666_1'] = ['Brno hl.n.;9:27','Jihlava;11:18'];
$trasa['667_1'] = ['Jihlava;16:40','Brno hl.n.;18:30'];
$trasa['668_1'] = ['Brno hl.n.;7:27','Jihlava;9:18'];
$trasa['669_1'] = ['Jihlava;18:40','Brno hl.n.;20:30'];
$trasa['4801_1'] = ['Jihlava;4:41','Zastávka u Brna;6:39'];
$trasa['4816_1'] = ['Zastávka u Brna;16:19','Jihlava;18:22'];
$trasa['11487_1'] = ['Zastávka u Brna;6:50','Brno-Horní Heršpice;7:12'];
$trasa['11492_1'] = ['Brno-Horní Heršpice;15:15','Zastávka u Brna;15:34'];
//sem patri stazene trasy




$typ['11487_1'] = 'Sv';
$typ['11492_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts701 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


