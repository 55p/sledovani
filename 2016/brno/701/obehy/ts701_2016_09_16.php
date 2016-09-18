<?php 
$zacatekPlatnosti = '16.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('621_1', '668_1', '661_1', '664_1', '665_1', '660_1', '669_1', '620_1');
$obeh[2] = array('623_1', '666_1', '663_1', '662_1', '667_1', '622_1');
$obeh[3] = ['4801_1', '4816_1', '4847_1', '4850_1', '4856_1'];

$omezeni['620_1'] = 'XT';
$omezeni['621_1'] = 'X6';
$omezeni['666_1'] = 'X5, 25';
$omezeni['663_1'] = 'X5, 25';
$omezeni['4801_1'] = 'X';
$omezeni['4816_1'] = 'X';
$omezeni['4847_1'] = 'X';
$omezeni['4850_1'] = 'X1234';
$omezeni['4856_1'] = 'T';

$trasa['620_1'] = array('Okříšky;20:47','Jihlava;21:18');
$trasa['621_1'] = array('Jihlava;6:40','Okříšky;7:06');
$trasa['622_1'] = array('Okříšky;18:47','Jihlava;19:18');
$trasa['623_1'] = array('Jihlava;8:40','Okříšky;9:06');
$trasa['660_1'] = array('Okříšky;15:47','Jihlava;16:18');
$trasa['661_1'] = array('Jihlava;10:40','Okříšky;11:06');
$trasa['662_1'] = array('Okříšky;14:47','Jihlava;15:18');
$trasa['663_1'] = array('Jihlava;12:40','Okříšky;13:06');
$trasa['664_1'] = array('Okříšky;12:47','Jihlava;13:18');
$trasa['665_1'] = array('Jihlava;14:40','Okříšky;15:06');
$trasa['666_1'] = array('Okříšky;10:47','Jihlava;11:18');
$trasa['667_1'] = array('Jihlava;16:40','Okříšky;17:06');
$trasa['668_1'] = array('Okříšky;8:47','Jihlava;9:18');
$trasa['669_1'] = array('Jihlava;18:40','Okříšky;19:06');


$trasa['4801_1'] = ['Náměšť nad Oslavou;6:13', 'Brno hl.n.;7:10'];
$trasa['4847_1'] = ['Náměšť nad Oslavou;18:13', 'Brno hl.n.;19:12'];

$trasa['4816_1'] = ['Brno hl.n.;15:39', 'Náměšť nad Oslavou;16:44'];
$trasa['4850_1'] = ['Brno hl.n.;19:39', 'Náměšť nad Oslavou;20:44'];
$trasa['4856_1'] = ['Brno hl.n.;22:41', 'Náměšť nad Oslavou;23:40'];


@$ts701 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>