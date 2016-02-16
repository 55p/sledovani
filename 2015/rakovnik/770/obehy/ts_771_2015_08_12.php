<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';
$obeh[1] = array('1223_1', '1230_1', '1227_1', '1226_1', '1231_1', '1222_1');

$typ[-1] = 'R';

$trasa['1222_1'] = array('Praha Masarykovo nádraží;19:02', 'Rakovník;20:32');
$trasa['1223_1'] = array('Rakovník;7:22', 'Praha Masarykovo nádraží;8:52');
$trasa['1226_1'] = array('Praha Masarykovo nádraží;15:02', 'Rakovník;16:32');
$trasa['1227_1'] = array('Rakovník;13:22', 'Praha Masarykovo nádraží;14:52');
$trasa['1230_1'] = array('Praha Masarykovo nádraží;9:02', 'Rakovník;10:32');
$trasa['1231_1'] = array('Rakovník;17:22', 'Praha Masarykovo nádraží;18:52');


@$ts771 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>