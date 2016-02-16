<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9801_1', '1650_1');
$obeh[2] = array('1651_1', '1894_1', '9877_1');
$obeh[3] = array('19860_1', '19861_1', '1883_1', '9011_1', '9016_1', '9850_1', '1906_1');
$obeh[4] = array('19886_1', '1879_1', '1888_1', '1895_1', '1896_1', '19893_1');
$obeh[5] = array('19890_1', '1881_1', '1890_1');

$omezeni['1650_1'] = 'X';
$omezeni['1651_1'] = 'X';
$omezeni['1879_1'] = 'X';
$omezeni['1881_1'] = 'X';
$omezeni['1883_1'] = 'X';
$omezeni['1888_1'] = 'X';
$omezeni['1890_1'] = 'X';
$omezeni['1894_1'] = 'X';
$omezeni['1895_1'] = 'X';
$omezeni['1896_1'] = 'X';
$omezeni['1906_1'] = '23';
$omezeni['19860_1'] = 'X';
$omezeni['19861_1'] = 'X';
$omezeni['19886_1'] = 'X';
$omezeni['19890_1'] = 'X';
$omezeni['19893_1'] = 'X';
$omezeni['9011_1'] = 'X';
$omezeni['9016_1'] = 'X';
$omezeni['9801_1'] = 'X';
$omezeni['9850_1'] = '3112';
$omezeni['9877_1'] = 'X';

$trasa['1650_1'] = array('Praha Masarykovo nádraží;16:23','Louny;18:25');
$trasa['1651_1'] = array('Louny;5:29','Praha Masarykovo nádraží;7:32');
$trasa['1879_1'] = array('Kladno-Dubí;5:16','Praha Masarykovo nádraží;6:20');
$trasa['1881_1'] = array('Kladno-Dubí;6:20','Praha Masarykovo nádraží;7:22');
$trasa['1883_1'] = array('Kladno;7:15','Praha Masarykovo nádraží;7:52');
$trasa['1888_1'] = array('Praha Masarykovo nádraží;16:02','Kladno-Ostrovec;16:49');
$trasa['1890_1'] = array('Praha Masarykovo nádraží;16:18','Rakovník;18:04');
$trasa['1894_1'] = array('Praha Masarykovo nádraží;18:02','Kladno-Ostrovec;18:49');
$trasa['1895_1'] = array('Kladno-Ostrovec;17:03','Praha Masarykovo nádraží;17:52');
$trasa['1896_1'] = array('Praha Masarykovo nádraží;18:18','Kladno-Ostrovec;19:16');
$trasa['1906_1'] = array('Praha Masarykovo nádraží;21:02','Kladno;21:42');
$trasa['19860_1'] = array('Kladno;6:21','Kladno-Dubí;6:35');
$trasa['19861_1'] = array('Kladno-Dubí;6:55','Kladno;7:08');
$trasa['19886_1'] = array('Kladno;4:39','Kladno-Dubí;4:48');
$trasa['19890_1'] = array('Kladno;5:49','Kladno-Dubí;6:02');
$trasa['19893_1'] = array('Kladno-Ostrovec;19:36','Kladno;19:41');
$trasa['9011_1'] = array('Praha hl.n.;14:25','Čerčany;16:52');
$trasa['9016_1'] = array('Čerčany;17:06','Praha hl.n.;19:21');
$trasa['9801_1'] = array('Rakovník;5:41','Praha Masarykovo nádraží;7:35');
$trasa['9850_1'] = array('Praha Masarykovo nádraží;20:30','Kladno;21:22');
$trasa['9877_1'] = array('Kladno-Ostrovec;19:21','Kladno;19:27');

$poznamkaObehu['19860_1'] = array('pk', 'postrk');




@$ts772 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>