<?php 
$zacatekPlatnosti = '17.10.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1221_1', '1232_1', '1225_1', '1228_1', '1229_1', '1224_1', '1233_1', '1220_1');

$omezeni['1220_1'] = '7';
$omezeni['1221_1'] = 'X6';
$omezeni['1232_1'] = 'X6';
$omezeni['1233_1'] = '7';

$trasa['1220_1'] = array('Praha Masarykovo nádraží;21:02','Lužná u Rakovníka;22:21');
$trasa['1221_1'] = array('Lužná u Rakovníka;5:28','Praha Masarykovo nádraží;6:46');
$trasa['1224_1'] = array('Praha Masarykovo nádraží;17:02','Lužná u Rakovníka;18:21');
$trasa['1225_1'] = array('Lužná u Rakovníka;9:36','Praha Masarykovo nádraží;10:56');
$trasa['1228_1'] = array('Praha Masarykovo nádraží;13:02','Lužná u Rakovníka;14:21');
$trasa['1229_1'] = array('Lužná u Rakovníka;15:36','Praha Masarykovo nádraží;16:56');
$trasa['1232_1'] = array('Praha Masarykovo nádraží;7:02','Lužná u Rakovníka;8:21');
$trasa['1233_1'] = array('Lužná u Rakovníka;19:36','Praha Masarykovo nádraží;20:56');





@$ts770 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>