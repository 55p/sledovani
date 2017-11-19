<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['668_1', '661_1', '662_1', '667_1', '650_1'];
$obeh[2] = ['653_1', '664_1', '665_1', '652_1'];
$obeh[3] = ['4801_1', '4816_1'];
$obeh[4] = ['651_1', '666_1', '663_1', '660_1', '669_1'];

$omezeni['4801_1'] = 'X';
$omezeni['4816_1'] = 'X';
$omezeni['650_1'] = 'XT';
$omezeni['651_1'] = 'X6';

$trasa['4801_1'] = ['Jihlava;4:41','Brno hl.n.;7:10'];
$trasa['4816_1'] = ['Brno hl.n.;15:45','Jihlava;18:22'];
$trasa['650_1'] = ['Jihlava;19:27','Jihlava;21:17'];
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

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts701 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


