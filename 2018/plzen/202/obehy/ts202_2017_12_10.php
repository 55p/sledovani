<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1961_1', '7500_1', '7515_1', '7516_1', '7519_1', '7520_1', '71711_1', '1966_1', '7511_1', '1960_1', '7517_1', '7518_1', '7521_1', '7522_1', '7503_1'];
$obeh[2] = ['71710_1', '7513_1', '1990_1', '7384_1', '1988_1', '565_1', '550_1', '7502_1', '7515_2', '7520_2', '7501_1', '7524_1'];
$obeh[3] = ['1981_1', '7518_2', '1965_1', '1964_1', '7501_2', '1968_1'];
$obeh[4] = ['7511_2', '7510_1', '1963_1', '7514_1', '7517_2', '1962_1', '7521_2', '7522_2'];

$omezeni['1960_1'] = '25';
$omezeni['1961_1'] = 'X';
$omezeni['1962_1'] = 'X';
$omezeni['1963_1'] = 'X';
$omezeni['1964_1'] = 'X';
$omezeni['1965_1'] = 'X';
$omezeni['1966_1'] = 'X';
$omezeni['1968_1'] = 'X';
$omezeni['1981_1'] = 'X';
$omezeni['1988_1'] = 'X5';
$omezeni['1990_1'] = 'X1234';
$omezeni['550_1'] = 'X';
$omezeni['565_1'] = 'X';
$omezeni['71710_1'] = 'X';
$omezeni['71711_1'] = 'X';
$omezeni['7384_1'] = 'X1234';
$omezeni['7500_1'] = 'X';
$omezeni['7501_1'] = '25';
$omezeni['7501_2'] = 'X';
$omezeni['7502_1'] = '25';
$omezeni['7510_1'] = 'X';
$omezeni['7511_1'] = '25';
$omezeni['7511_2'] = 'X';
$omezeni['7513_1'] = 'X';
$omezeni['7514_1'] = 'X';
$omezeni['7515_1'] = 'X';
$omezeni['7515_2'] = '25';
$omezeni['7516_1'] = 'X';
$omezeni['7517_1'] = '25';
$omezeni['7517_2'] = 'X';
$omezeni['7518_1'] = '25';
$omezeni['7518_2'] = 'X';
$omezeni['7519_1'] = 'X';
$omezeni['7520_1'] = 'X';
$omezeni['7520_2'] = '25';
$omezeni['7521_1'] = '25';
$omezeni['7521_2'] = 'X';
$omezeni['7522_1'] = '25';
$omezeni['7522_2'] = 'X';
$omezeni['7524_1'] = '25';

$trasa['1960_1'] = ['Plzeň hl.n.;5:37','Klatovy;6:29'];
$trasa['1962_1'] = ['Plzeň hl.n.;13:10','Klatovy;14:03'];
$trasa['1963_1'] = ['Klatovy;6:47','Plzeň hl.n.;7:41'];
$trasa['1964_1'] = ['Plzeň hl.n.;15:10','Klatovy;16:03'];
$trasa['1965_1'] = ['Klatovy;13:44','Plzeň hl.n.;14:47'];
$trasa['1966_1'] = ['Plzeň hl.n.;17:10','Klatovy;18:03'];
$trasa['1968_1'] = ['Plzeň hl.n.;19:10','Klatovy;20:03'];
$trasa['71710_1'] = ['Plzeň hl.n.;4:15','Klatovy;5:08'];
$trasa['71711_1'] = ['Klatovy;15:40','Plzeň hl.n.;16:44'];
$trasa['7500_1'] = ['Plzeň hl.n.;6:11','Klatovy;7:09'];
$trasa['7501_1'] = ['Klatovy;16:45','Plzeň hl.n.;17:45'];
$trasa['7501_2'] = ['Klatovy;16:45','Plzeň hl.n.;17:45'];
$trasa['7502_1'] = ['Plzeň hl.n.;6:40','Klatovy;7:38'];
$trasa['7503_1'] = ['Klatovy;18:45','Plzeň hl.n.;19:45'];

$trasa['1961_1'] = ['Klatovy;4:48', 'Plzeň hl.n.;5:42'];
$trasa['1981_1'] = ['Cheb;5:04', 'Plzeň hl.n.;6:51'];
$trasa['1988_1'] = ['Plzeň hl.n.;15:05', 'Cheb;17:00'];
$trasa['1990_1'] = ['Plzeň hl.n.;17:05', 'Mariánské Lázně;18:17'];
$trasa['550_1'] = ['Plzeň hl.n.;22:05', 'Cheb;23:27'];
$trasa['565_1'] = ['Cheb;19:35', 'Plzeň hl.n.;20:55'];
$trasa['7384_1'] = ['Mariánské Lázně;18:38', 'Cheb;19:09'];
$trasa['7510_1'] = ['Plzeň hl.n.;5:20', 'Klatovy;6:21'];
$trasa['7511_1'] = ['Klatovy;4:00', 'Plzeň hl.n.;5:00'];
$trasa['7511_2'] = ['Klatovy;4:00', 'Plzeň hl.n.;5:00'];
$trasa['7513_1'] = ['Klatovy;5:56', 'Plzeň hl.n.;6:58'];
$trasa['7514_1'] = ['Plzeň hl.n.;8:11', 'Klatovy;9:10'];
$trasa['7515_1'] = ['Klatovy;8:45', 'Plzeň hl.n.;9:45'];
$trasa['7515_2'] = ['Klatovy;8:45', 'Plzeň hl.n.;9:45'];
$trasa['7516_1'] = ['Plzeň hl.n.;10:11', 'Klatovy;11:09'];
$trasa['7517_1'] = ['Klatovy;10:45', 'Plzeň hl.n.;11:45'];
$trasa['7517_2'] = ['Klatovy;10:45', 'Plzeň hl.n.;11:45'];
$trasa['7518_1'] = ['Plzeň hl.n.;12:11', 'Klatovy;13:09'];
$trasa['7518_2'] = ['Plzeň hl.n.;12:11', 'Klatovy;13:09'];
$trasa['7519_1'] = ['Klatovy;12:45', 'Plzeň hl.n.;13:45'];
$trasa['7520_1'] = ['Plzeň hl.n.;14:11', 'Klatovy;15:10'];
$trasa['7520_2'] = ['Plzeň hl.n.;14:11', 'Klatovy;15:10'];
$trasa['7521_1'] = ['Klatovy;14:45', 'Plzeň hl.n.;15:45'];
$trasa['7521_2'] = ['Klatovy;14:45', 'Plzeň hl.n.;15:45'];
$trasa['7522_1'] = ['Plzeň hl.n.;16:11', 'Klatovy;17:09'];
$trasa['7522_2'] = ['Plzeň hl.n.;16:11', 'Klatovy;17:09'];
$trasa['7524_1'] = ['Plzeň hl.n.;18:11', 'Klatovy;19:09'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts202 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


