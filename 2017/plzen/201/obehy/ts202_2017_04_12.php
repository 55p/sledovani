<?php 
$zacatekPlatnosti = '12.4.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['7511_1', '7512_1', '1961_1', '7514_1', '107511_1', '7502_1', '7517_1', '778_1', '1963_1', '7518_1', '17518_1', '1965_1', '7522_1'];
$obeh[2] = ['7513_1', '1960_1', '7519_1', '21961_1', '1962_1', '7521_1', '1964_1', '7501_1', '7524_1'];
$obeh[3] = ['7515_1', '773_1', '7504_1', '775_1', '7516_1', '777_1', '17520_1', '7520_1', '779_1', '772_1'];
$obeh[4] = ['107511_2', '7502_2', '7517_2', '778_2'];
$obeh[5] = ['7511_2', '1960_2', '7519_2', '773_2', '27519_1', '776_1', '7523_1', '774_1', '7503_1', '100772_1'];

$omezeni['107511_1'] = '25';
$omezeni['107511_2'] = 'X';
$omezeni['17518_1'] = '25';
$omezeni['17520_1'] = '6';
$omezeni['1960_1'] = 'X';
$omezeni['1960_2'] = '25';
$omezeni['1961_1'] = 'X';
$omezeni['21961_1'] = 'T';
$omezeni['27519_1'] = 'X';
$omezeni['7502_1'] = '25';
$omezeni['7502_2'] = 'X';
$omezeni['7511_1'] = 'X';
$omezeni['7511_2'] = '25';
$omezeni['7512_1'] = 'X';
$omezeni['7513_1'] = 'X6';
$omezeni['7514_1'] = 'X';
$omezeni['7515_1'] = 'X';
$omezeni['7517_1'] = '25';
$omezeni['7517_2'] = 'X';
$omezeni['7518_1'] = 'X';
$omezeni['7519_1'] = 'X';
$omezeni['7519_2'] = '25';
$omezeni['7520_1'] = 'XT';
$omezeni['773_1'] = '25';
$omezeni['773_2'] = 'X';
$omezeni['778_1'] = '25';
$omezeni['778_2'] = 'X';

$trasa['100772_1'] = ['Plzeň zastávka;21:05','Klatovy;21:52'];
$trasa['107511_1'] = ['Klatovy;4:00','Plzeň zastávka;4:55'];
$trasa['107511_2'] = ['Klatovy;4:00','Plzeň zastávka;4:55'];
$trasa['17518_1'] = ['Plzeň zastávka;14:00','Klatovy;15:10'];
$trasa['17520_1'] = ['Plzeň zastávka;16:00','Klatovy;17:10'];
$trasa['1960_1'] = ['Plzeň zastávka;7:05','Klatovy;7:52'];
$trasa['1960_2'] = ['Plzeň zastávka;7:05','Klatovy;7:52'];
$trasa['1961_1'] = ['Klatovy;8:06','Plzeň zastávka;8:52'];
$trasa['1962_1'] = ['Plzeň zastávka;11:05','Klatovy;11:52'];
$trasa['1963_1'] = ['Klatovy;12:06','Plzeň zastávka;12:52'];
$trasa['1964_1'] = ['Plzeň zastávka;15:05','Klatovy;15:53'];
$trasa['1965_1'] = ['Klatovy;16:06','Plzeň zastávka;16:52'];
$trasa['21961_1'] = ['Klatovy;7:55','Plzeň zastávka;8:45'];
$trasa['27519_1'] = ['Dobřany;11:30','Plzeň zastávka;11:48'];
$trasa['7501_1'] = ['Klatovy;16:46','Plzeň zastávka;17:42'];
$trasa['7502_1'] = ['Plzeň zastávka;5:27','Klatovy;6:27'];
$trasa['7502_2'] = ['Plzeň zastávka;5:27','Klatovy;6:27'];
$trasa['7503_1'] = ['Klatovy;18:46','Plzeň zastávka;19:42'];
$trasa['7504_1'] = ['Plzeň zastávka;8:14','Klatovy;9:11'];
$trasa['7511_1'] = ['Klatovy;4:00','Plzeň zastávka;4:55'];
$trasa['7511_2'] = ['Klatovy;4:00','Plzeň zastávka;4:55'];
$trasa['7512_1'] = ['Plzeň zastávka;6:10','Klatovy;7:11'];
$trasa['7513_1'] = ['Klatovy;4:46','Plzeň zastávka;5:42'];
$trasa['7514_1'] = ['Plzeň zastávka;10:14','Klatovy;11:11'];
$trasa['7515_1'] = ['Klatovy;5:30','Plzeň zastávka;6:26'];
$trasa['7516_1'] = ['Klatovy;12:14','Plzeň zastávka;13:11'];
$trasa['7517_1'] = ['Klatovy;6:46','Plzeň zastávka;7:42'];
$trasa['7517_2'] = ['Klatovy;6:46','Plzeň zastávka;7:42'];
$trasa['7518_1'] = ['Plzeň zastávka;14:14','Klatovy;15:11'];
$trasa['7519_1'] = ['Klatovy;8:46','Plzeň zastávka;9:42'];
$trasa['7519_2'] = ['Klatovy;8:46','Plzeň zastávka;9:42'];
$trasa['7520_1'] = ['Plzeň zastávka;16:14','Klatovy;17:11'];
$trasa['7521_1'] = ['Klatovy;12:45','Plzeň zastávka;13:42'];
$trasa['7522_1'] = ['Plzeň zastávka;18:14','Klatovy;19:11'];
$trasa['7523_1'] = ['Klatovy;14:46','Plzeň zastávka;15:42'];
$trasa['7524_1'] = ['Plzeň zastávka;19:14','Klatovy;20:11'];
$trasa['772_1'] = ['Plzeň zastávka;21:05','Klatovy;21:52'];
$trasa['773_1'] = ['Klatovy;6:05','Plzeň zastávka;6:52'];
$trasa['773_2'] = ['Klatovy;6:06','Dobřany;6:39'];
$trasa['774_1'] = ['Plzeň zastávka;17:05','Klatovy;17:52'];
$trasa['775_1'] = ['Klatovy;10:06','Plzeň zastávka;10:52'];
$trasa['776_1'] = ['Plzeň zastávka;13:05','Klatovy;13:52'];
$trasa['777_1'] = ['Klatovy;14:06','Plzeň zastávka;14:52'];
$trasa['778_1'] = ['Plzeň zastávka;9:05','Klatovy;9:52'];
$trasa['778_2'] = ['Plzeň zastávka;9:05','Klatovy;9:52'];
$trasa['779_1'] = ['Klatovy;18:06','Plzeň zastávka;18:52'];

$poznamkaObehu['107511_1'] = ['pk', 'postrk'];
$poznamkaObehu['107511_2'] = ['pk', 'postrk'];
$poznamkaObehu['100772_1'] = ['pk', 'postrk'];


$typ['17518_1'] = 'Sv';
$typ['21961_1'] = 'Sv';
$typ['17520_1'] = 'Sv';
$typ['27519_1'] = 'Sv';

$poznamkaObehu['17518_1'] = ['','Sv 107518'];
$poznamkaObehu['17520_1'] = ['','Sv 107520'];
$poznamkaObehu['21961_1'] = ['','Sv 201961'];
$poznamkaObehu['27519_1'] = ['','Sv 207519'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts202 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


