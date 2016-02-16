<?php 
$zacatekPlatnosti = '31.10.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9231_1', '9236_1', '9207_1', '9206_1', '9209_1', '9208_1');

$omezeni['9206_1'] = '6,T';
$omezeni['9207_1'] = '6,T';
$omezeni['9208_1'] = 'X';
$omezeni['9209_1'] = 'X';
$omezeni['9231_1'] = 'X';
$omezeni['9236_1'] = 'X';

$trasa['9206_1'] = array('Světlá nad Sázavou;13:46','Čerčany;16:49');
$trasa['9207_1'] = array('Čerčany;9:12','Světlá nad Sázavou;12:46');
$trasa['9208_1'] = array('Světlá nad Sázavou;15:46','Čerčany;18:49');
$trasa['9209_1'] = array('Čerčany;11:12','Světlá nad Sázavou;14:44');
$trasa['9231_1'] = array('Čerčany;3:35','Zruč nad Sázavou;5:17');
$trasa['9236_1'] = array('Zruč nad Sázavou;6:01','Čerčany;7:54');





@$ts852 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>