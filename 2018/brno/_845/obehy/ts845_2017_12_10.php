<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4303_1', '4306_1', '1726_1', '104448_1', '4448_1', '14423_1', '14422_1', '4451_1', '1925_1', '4412_1', '14430_1', '14431_1', '14432_1', '14433_1', '4437_1', '4102_1', '4109_1', '1721_1', '4339_1', '14304_1', '14305_1', '14330_1', '14331_1', '14310_1', '14309_1', '14312_1', '14311_1', '14314_1', '14313_1', '14316_1', '14315_1', '14332_1', '14333_1', '14322_1', '14323_1', '4322_1', '4320_1', '4342_1', '4342_2', '4317_1', '4368_1', '1734_1', '4127_1', '4127_2'];

$omezeni['104448_1'] = 'X';
$omezeni['14304_1'] = 'T';
$omezeni['14305_1'] = 'T';
$omezeni['14309_1'] = '25';
$omezeni['14310_1'] = 'T';
$omezeni['14311_1'] = '25';
$omezeni['14312_1'] = '25';
$omezeni['14313_1'] = '25';
$omezeni['14314_1'] = '25';
$omezeni['14315_1'] = '6';
$omezeni['14316_1'] = '25';
$omezeni['14322_1'] = '6';
$omezeni['14323_1'] = '6';
$omezeni['14330_1'] = 'T';
$omezeni['14331_1'] = 'T';
$omezeni['14332_1'] = '6';
$omezeni['14333_1'] = '6';
$omezeni['14422_1'] = 'X';
$omezeni['14423_1'] = 'X';
$omezeni['14430_1'] = 'X';
$omezeni['14431_1'] = 'X5';
$omezeni['14432_1'] = 'X5';
$omezeni['14433_1'] = 'X';
$omezeni['1721_1'] = '6';
$omezeni['1726_1'] = 'X';
$omezeni['1734_1'] = 'T';
$omezeni['1925_1'] = 'X';
$omezeni['4102_1'] = '6';
$omezeni['4109_1'] = '6';
$omezeni['4127_1'] = 'zX';
$omezeni['4127_2'] = 'X5';
$omezeni['4303_1'] = 'X';
$omezeni['4306_1'] = 'X';
$omezeni['4317_1'] = 'T';
$omezeni['4320_1'] = '6';
$omezeni['4322_1'] = '6';
$omezeni['4339_1'] = '6';
$omezeni['4342_1'] = 'T';
$omezeni['4342_2'] = 'T';
$omezeni['4368_1'] = 'T';
$omezeni['4412_1'] = 'X';
$omezeni['4437_1'] = 'X';
$omezeni['4448_1'] = 'X';
$omezeni['4451_1'] = 'X';

$trasa['104448_1'] = ['Brno hl.n.;13:54','Moravské Bránice;14:26'];
$trasa['1721_1'] = ['Veselí nad Moravou;9:03','Staré Město u Uherského Hradiště;9:28'];
$trasa['1925_1'] = ['Moravské Bránice;16:00','Brno hl.n.;16:23'];
$trasa['4127_1'] = ['Brno hl.n.;22:25','ky;23:39'];
$trasa['4317_1'] = ['Staré Město u Uherského Hradiště;17:36','Uherské Hradiště;17:42'];
$trasa['4320_1'] = ['Újezdec u Luhačovic;21:48','Luhačovice;22:02'];
$trasa['4322_1'] = ['Luhačovice;21:24','Újezdec u Luhačovic;21:38'];
$trasa['4339_1'] = ['Staré Město u Uherského Hradiště;9:36','Újezdec u Luhačovic;10:11'];
$trasa['4342_1'] = ['Újezdec u Luhačovic;15:50','Uherské Hradiště;16:17'];
$trasa['4342_2'] = ['Uherské Hradiště;16:18','Staré Město u Uherského Hradiště;16:24'];
$trasa['4368_1'] = ['Uherské Hradiště;17:44','Staré Město u Uherského Hradiště;17:50'];
$trasa['4412_1'] = ['Brno hl.n.;16:54','Moravské Bránice;17:26'];
$trasa['4437_1'] = ['Moravské Bránice;18:31','Brno hl.n.;19:04'];
$trasa['4448_1'] = ['Moravské Bránice;14:31','Ivančice;14:41'];
$trasa['4451_1'] = ['Ivančice;15:16','Moravské Bránice;15:26'];

$trasa['14304_1'] = ['Luhačovice;5:44', 'Újezdec u Luhačovic;5:58'];
$trasa['14305_1'] = ['Újezdec u Luhačovic;6:14', 'Luhačovice;6:28'];
$trasa['14309_1'] = ['Újezdec u Luhačovic;10:14', 'Luhačovice;10:28'];
$trasa['14310_1'] = ['Luhačovice;9:22', 'Újezdec u Luhačovic;9:36'];
$trasa['14311_1'] = ['Újezdec u Luhačovic;12:14', 'Luhačovice;12:28'];
$trasa['14312_1'] = ['Luhačovice;11:22', 'Újezdec u Luhačovic;11:36'];
$trasa['14313_1'] = ['Újezdec u Luhačovic;14:16', 'Luhačovice;14:30'];
$trasa['14314_1'] = ['Luhačovice;13:32', 'Újezdec u Luhačovic;13:46'];
$trasa['14315_1'] = ['Újezdec u Luhačovic;16:16', 'Luhačovice;16:30'];
$trasa['14316_1'] = ['Luhačovice;15:32', 'Újezdec u Luhačovic;15:46'];
$trasa['14322_1'] = ['Luhačovice;19:28', 'Uherský Brod;19:49'];
$trasa['14323_1'] = ['Uherský Brod;20:00', 'Luhačovice;20:18'];
$trasa['14330_1'] = ['Luhačovice;6:49', 'Újezdec u Luhačovic;7:03'];
$trasa['14331_1'] = ['Újezdec u Luhačovic;7:09', 'Luhačovice;7:23'];
$trasa['14332_1'] = ['Luhačovice;17:39', 'Újezdec u Luhačovic;17:53'];
$trasa['14333_1'] = ['Újezdec u Luhačovic;17:58', 'Luhačovice;18:12'];
$trasa['14422_1'] = ['Moravské Bránice;15:01', 'Ivančice;15:11'];
$trasa['14423_1'] = ['Ivančice;14:46', 'Moravské Bránice;14:56'];
$trasa['14430_1'] = ['Moravské Bránice;17:31', 'Ivančice;17:41'];
$trasa['14431_1'] = ['Ivančice;17:46', 'Moravské Bránice;17:56'];
$trasa['14432_1'] = ['Moravské Bránice;18:01', 'Ivančice;18:11'];
$trasa['14433_1'] = ['Ivančice;18:16', 'Moravské Bránice;18:26'];
$trasa['1726_1'] = ['Staré Město u Uherského Hradiště;10:33', 'Brno hl.n.;12:33'];
$trasa['1734_1'] = ['Lienz in Osttirol;5:24', 'Villach Hbf;6:56'];
$trasa['4102_1'] = ['Veselí nad Moravou;3:57', 'Brno hl.n.;5:50'];
$trasa['4109_1'] = ['Brno hl.n.;6:21', 'Veselí nad Moravou;8:05'];
$trasa['4127_2'] = ['Brno hl.n.;22:25', 'Veselí nad Moravou;0:05'];
$trasa['4303_1'] = ['Kyjov;4:38', 'Bylnice;7:13'];
$trasa['4306_1'] = ['Bylnice;7:55', 'Staré Město u Uherského Hradiště;9:50'];


$poznamkaObehu['104448_1'] = ['pk', 'postrk'];
$poznamkaObehu['4412_1'] = ['pk', 'postrk'];
$poznamkaObehu['4339_1'] = ['pk', 'postrk'];
$poznamkaObehu['4317_1'] = ['pk', 'postrk'];
$poznamkaObehu['1734_1'] = ['pk', 'postrk'];

$poznamkaObehu['1721_1'] = ['vlož', 'vložená'];
$poznamkaObehu['4342_2'] = ['vlož', 'vložená'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts845 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


