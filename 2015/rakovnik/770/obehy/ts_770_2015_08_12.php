<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';
$obeh[1] = array('1221_1', '1232_1', '1225_1', '1228_1', '1229_1', '1224_1', '1233_1', '1220_1');

$omezeni['1220_1'] = 'T';
$omezeni['1221_1'] = 'X,6';
$omezeni['1232_1'] = 'X,6';
$omezeni['1233_1'] = 'T';

$typ[-1] = 'R';

$trasa['1220_1'] = array('Praha Masarykovo nádraží;21:02', 'Rakovník;22:32');
$trasa['1221_1'] = array('Rakovník;5:16', 'Praha Masarykovo nádraží;6:46');
$trasa['1224_1'] = array('Praha Masarykovo nádraží;17:02', 'Rakovník;18:32');
$trasa['1225_1'] = array('Rakovník;9:22', 'Praha Masarykovo nádraží;10:52');
$trasa['1228_1'] = array('Praha Masarykovo nádraží;13:02', 'Rakovník;14:32');
$trasa['1229_1'] = array('Rakovník;15:22', 'Praha Masarykovo nádraží;16:52');
$trasa['1232_1'] = array('Praha Masarykovo nádraží;7:02', 'Rakovník;8:32');
$trasa['1233_1'] = array('Rakovník;19:22', 'Praha Masarykovo nádraží;20:52');


@$ts770 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>