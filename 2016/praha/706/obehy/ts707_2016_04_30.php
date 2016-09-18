<?php 
$zacatekPlatnosti = '30.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9061_1', '9060_1', '9065_1', '9207_1', '9206_1', '101832_1');
$obeh[2] = array('109207_2', '1832_2');

$omezeni['101832_1'] = 'T';
$omezeni['1832_2'] = 'T';
$omezeni['9060_1'] = '6';
$omezeni['9061_1'] = '6';
$omezeni['9065_1'] = '6';
$omezeni['9206_1'] = 'T';
$omezeni['9207_1'] = 'T';
$omezeni['109207_2'] = '6';

$trasa['101832_1'] = array('Čerčany;17:56','Praha hl.n.;18:37');

$trasa['1832_2'] = array('Zruč nad Sázavou;16:00', 'Čerčany;17:51');
$trasa['9060_1'] = array('Čerčany;14:06', 'Praha hl.n.;16:05');
$trasa['9061_1'] = array('Praha hl.n.;10:55', 'Čerčany;12:39');
$trasa['9065_1'] = array('Praha hl.n.;16:25', 'Čerčany;18:07');
$trasa['9206_1'] = array('Světlá nad Sázavou;13:46', 'Čerčany;16:49');
$trasa['9207_1'] = array('Čerčany;9:12', 'Světlá nad Sázavou;12:45');
$trasa['109207_2'] = array('Čerčany;9:12', 'Zruč nad Sázavou;11:01');


@$ts707 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>