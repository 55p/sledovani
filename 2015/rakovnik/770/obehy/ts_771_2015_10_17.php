<?php 
$zacatekPlatnosti = '17.10.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1223_1', '1230_1', '19709_1', '19706_1', '1227_1', '1226_1', '1231_1', '1222_1');


$trasa['1222_1'] = array('Praha Masarykovo nádraží;19:02','Lužná u Rakovníka;20:21');
$trasa['1223_1'] = array('Lužná u Rakovníka;7:36','Praha Masarykovo nádraží;8:52');
$trasa['1226_1'] = array('Praha Masarykovo nádraží;15:02','Lužná u Rakovníka;16:21');
$trasa['1227_1'] = array('Lužná u Rakovníka;13:36','Praha Masarykovo nádraží;14:56');
$trasa['1230_1'] = array('Praha Masarykovo nádraží;9:02','Lužná u Rakovníka;10:21');
$trasa['1231_1'] = array('Lužná u Rakovníka;17:36','Praha Masarykovo nádraží;17:56');
$trasa['19706_1'] = array('Kladno;12:46','Lužná u Rakovníka;13:36');
$trasa['19709_1'] = array('Lužná u Rakovníka;10:21','Kladno;11:03');

$typ[19706] = $typ[19709] = 'Os';



@$ts771 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>