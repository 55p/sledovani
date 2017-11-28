<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['9031_1', '9231_1', '9234_1', '9243_1', '9246_1', '9209_1', '11364_1', '9213_1', '9208_1', '9217_1', '19238_1', '9240_1', '9240_2', '9251_1', '9207_1', '111362_1', '11362_1', '9211_1', '11366_1'];
$obeh[2] = ['9242_1', '9241_1', '9244_1', '9232_1', '9234_2', '9221_1', '11360_1', '9211_2', '109211_1', '9220_1', '11366_2', '9235_1', '9217_2', '9238_1', '9237_1', '9239_1'];
$obeh[3] = ['9230_1', '9230_2', '9203_1', '9236_1', '9207_2', '9233_1', '11362_2', '109211_2', '9245_1', '9220_2', '9247_1', '9248_1', '9249_1', '109250_1', '9250_1', '9022_1', '2043_1', '9235_2', '9217_3', '9238_2', '9237_2', '9240_3', '209238_1', '9251_2'];

$omezeni['109211_1'] = 'T';
$omezeni['109211_2'] = '6';
$omezeni['109250_1'] = 'X1234';
$omezeni['111362_1'] = '6';
$omezeni['11362_1'] = 'T';
$omezeni['11362_2'] = 'X6';
$omezeni['11364_1'] = 'X';
$omezeni['11366_1'] = '25';
$omezeni['11366_2'] = 'X';
$omezeni['19238_1'] = 'X1234';
$omezeni['2043_1'] = 'X';
$omezeni['209238_1'] = 'T';
$omezeni['9022_1'] = 'X';
$omezeni['9031_1'] = 'vX';
$omezeni['9207_1'] = '25';
$omezeni['9207_2'] = 'X';
$omezeni['9208_1'] = 'X';
$omezeni['9209_1'] = 'X';
$omezeni['9211_1'] = '25';
$omezeni['9211_2'] = 'X';
$omezeni['9213_1'] = 'X';
$omezeni['9217_1'] = 'X';
$omezeni['9217_2'] = '6';
$omezeni['9217_3'] = 'T';
$omezeni['9220_1'] = 'T';
$omezeni['9220_2'] = 'X6';
$omezeni['9230_1'] = 'X';
$omezeni['9230_2'] = '25';
$omezeni['9231_1'] = 'X';
$omezeni['9232_1'] = 'T';
$omezeni['9233_1'] = '6';
$omezeni['9234_1'] = 'X';
$omezeni['9234_2'] = '6';
$omezeni['9235_1'] = 'XT';
$omezeni['9235_2'] = '6';
$omezeni['9237_1'] = '7';
$omezeni['9237_2'] = '6';
$omezeni['9238_1'] = 'XT';
$omezeni['9238_2'] = '6';
$omezeni['9239_1'] = 'X';
$omezeni['9240_1'] = 'X1234';
$omezeni['9240_2'] = 'X5';
$omezeni['9240_3'] = '6';
$omezeni['9241_1'] = 'X';
$omezeni['9242_1'] = 'X';
$omezeni['9243_1'] = 'X';
$omezeni['9244_1'] = 'X';
$omezeni['9245_1'] = 'X';
$omezeni['9246_1'] = 'X';
$omezeni['9247_1'] = 'X';
$omezeni['9248_1'] = 'X';
$omezeni['9249_1'] = 'X';
$omezeni['9250_1'] = 'z25';
$omezeni['9251_1'] = 'X';
$omezeni['9251_2'] = '25';

$trasa['109211_1'] = ['Čerčany;13:03','Ledečko;14:00'];
$trasa['109211_2'] = ['Čerčany;13:03','Ledečko;14:00'];
$trasa['109250_1'] = ['Sázava;19:08','Čerčany;19:38'];
$trasa['111362_1'] = ['Kácov;11:30','Čerčany;12:53'];
$trasa['11360_1'] = ['Kácov;9:30','Čerčany;10:53'];
$trasa['11362_1'] = ['Kácov;11:30','Čerčany;12:53'];
$trasa['11362_2'] = ['Kácov;11:30','Čerčany;12:53'];
$trasa['11364_1'] = ['Kácov;13:00','Čerčany;14:25'];
$trasa['11366_1'] = ['Kácov;15:10','Čerčany;16:46'];
$trasa['11366_2'] = ['Kácov;15:10','Čerčany;16:46'];
$trasa['19238_1'] = ['Kácov;20:35','Sázava;21:05'];
$trasa['209238_1'] = ['Kácov;20:45','Čerčany;21:45'];
$trasa['9203_1'] = ['Čerčany;5:03','Kácov;6:31'];
$trasa['9207_1'] = ['Čerčany;9:09','Kácov;10:39'];
$trasa['9207_2'] = ['Čerčany;9:09','Kácov;10:39'];
$trasa['9208_1'] = ['Kácov;17:19','Čerčany;18:46'];
$trasa['9209_1'] = ['Čerčany;11:14','Kácov;12:41'];
$trasa['9211_1'] = ['Čerčany;13:03','Kácov;14:29'];
$trasa['9211_2'] = ['Čerčany;13:03','Kácov;14:29'];
$trasa['9213_1'] = ['Čerčany;15:03','Kácov;16:24'];
$trasa['9217_1'] = ['Čerčany;19:03','Kácov;20:29'];
$trasa['9217_2'] = ['Čerčany;19:03','Kácov;20:29'];
$trasa['9217_3'] = ['Čerčany;19:03','Kácov;20:29'];
$trasa['9220_1'] = ['Ledečko;15:04','Čerčany;15:48'];
$trasa['9220_2'] = ['Ledečko;15:04','Čerčany;15:47'];
$trasa['9221_1'] = ['Čerčany;7:09','Kácov;8:21'];
$trasa['9230_1'] = ['Kácov;3:48','Čerčany;4:55'];
$trasa['9230_2'] = ['Ledečko;4:15','Čerčany;4:55'];
$trasa['9231_1'] = ['Čerčany;3:32','Kácov;4:41'];
$trasa['9232_1'] = ['Kácov;4:39','Čerčany;5:46'];
$trasa['9233_1'] = ['Čerčany;10:14','Kácov;11:27'];
$trasa['9234_1'] = ['Kácov;4:59','Čerčany;6:14'];
$trasa['9234_2'] = ['Kácov;4:59','Čerčany;6:14'];
$trasa['9235_1'] = ['Čerčany;17:03','Kácov;18:30'];
$trasa['9235_2'] = ['Čerčany;17:03','Kácov;18:30'];
$trasa['9236_1'] = ['Kácov;6:35','Čerčany;7:50'];
$trasa['9237_1'] = ['Čerčany;21:03','Kácov;22:08'];
$trasa['9237_2'] = ['Čerčany;21:03','Sázava;21:33'];
$trasa['9238_1'] = ['Kácov;19:33','Čerčany;20:47'];
$trasa['9238_2'] = ['Kácov;19:33','Čerčany;20:47'];
$trasa['9239_1'] = ['Čerčany;21:03','Kácov;22:52'];
$trasa['9240_1'] = ['Sázava;22:18','Čerčany;22:49'];
$trasa['9240_2'] = ['Kácov;21:41','Čerčany;22:49'];
$trasa['9240_3'] = ['Sázava;22:18','Čerčany;22:49'];
$trasa['9245_1'] = ['Čerčany;14:03','Ledečko;14:48'];
$trasa['9251_1'] = ['Čerčany;23:03','Ledečko;23:42'];

$trasa['2043_1'] = ['Praha hl.n.;22:55', 'Vrané nad Vltavou;23:27'];
$trasa['9022_1'] = ['Čerčany;20:05', 'Praha hl.n.;22:05'];
$trasa['9031_1'] = ['Vrané nad Vltavou;0:52', 'Čerčany;1:45'];
$trasa['9241_1'] = ['Čerčany;5:33', 'Sázava;6:04'];
$trasa['9242_1'] = ['Ledečko;4:44', 'Čerčany;5:26'];
$trasa['9243_1'] = ['Čerčany;6:33', 'Sázava;7:07'];
$trasa['9244_1'] = ['Sázava;6:21', 'Čerčany;6:56'];
$trasa['9246_1'] = ['Sázava;8:24', 'Čerčany;8:55'];
$trasa['9247_1'] = ['Čerčany;16:03', 'Sázava;16:38'];
$trasa['9248_1'] = ['Sázava;17:09', 'Čerčany;17:47'];
$trasa['9249_1'] = ['Čerčany;18:03', 'Sázava;18:38'];
$trasa['9250_1'] = ['Sázava;19:09', 'Čerčany;19:47'];
$trasa['9251_2'] = ['Čerčany;23:03', 'Ledečko;23:42'];


$poznamkaObehu['111362_1'] = ['pk', 'postrk'];
$poznamkaObehu['109211_1'] = ['pk', 'postrk'];
$poznamkaObehu['109211_2'] = ['pk', 'postrk'];


$typ['19238_1'] = 'Sv';
$typ['109250_1'] = 'Sv';
$typ['209238_1'] = 'Sv';

$poznamkaObehu['19238_1'] = ['','Sv 109238'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts851 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


