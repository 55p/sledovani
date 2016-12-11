<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['651_1', '668_1', '661_1', '664_1', '665_1', '660_1', '669_1', '650_1'];
$obeh[2] = ['653_1', '666_1', '663_1', '662_1', '667_1', '652_1'];
$obeh[3] = ['4801_1', '4816_1', '4847_1', '4850_1', '4856_1'];

$omezeni['4801_1'] = 'X';
$omezeni['4816_1'] = 'X';
$omezeni['4847_1'] = 'X';
$omezeni['4850_1'] = 'X1234';
$omezeni['4856_1'] = 'T';
$omezeni['650_1'] = 'XT';
$omezeni['651_1'] = 'X6';
$omezeni['663_1'] = 'X5,25';
$omezeni['666_1'] = 'X5,25';

$trasa['4801_1'] = ['Náměšť nad Oslavou;6:13', 'Brno hl.n.;7:10'];
$trasa['4816_1'] = ['Brno hl.n.;15:39', 'Náměšť nad Oslavou;16:44'];
$trasa['652_1'] = ['Okříšky;18:47', 'Jihlava;19:18'];
$trasa['653_1'] = ['Jihlava;8:40', 'Okříšky;9:06'];
$trasa['650_1'] = ['Okříšky;20:47', 'Jihlava;21:18'];
$trasa['651_1'] = ['Jihlava;6:40', 'Okříšky;7:06'];
$trasa['660_1'] = ['Okříšky;15:47', 'Jihlava;16:18'];
$trasa['661_1'] = ['Jihlava;10:40', 'Okříšky;11:06'];
$trasa['662_1'] = ['Okříšky;14:47', 'Jihlava;15:18'];
$trasa['663_1'] = ['Jihlava;12:40', 'Okříšky;13:06'];
$trasa['664_1'] = ['Okříšky;12:47', 'Jihlava;13:18'];
$trasa['665_1'] = ['Jihlava;14:40', 'Okříšky;15:06'];
$trasa['666_1'] = ['Okříšky;10:47', 'Jihlava;11:18'];
$trasa['667_1'] = ['Jihlava;16:40', 'Okříšky;17:06'];
$trasa['668_1'] = ['Okříšky;8:47', 'Jihlava;9:18'];
$trasa['669_1'] = ['Jihlava;18:40', 'Okříšky;19:06'];
$trasa['4847_1'] = ['Náměšť nad Oslavou;18:13', 'Brno hl.n.;19:12'];
$trasa['4850_1'] = ['Brno hl.n.;19:39', 'Náměšť nad Oslavou;20:44'];
$trasa['4856_1'] = ['Brno hl.n.;22:41', 'Náměšť nad Oslavou;23:40'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts701 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


