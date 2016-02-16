<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9031_1', '9231_1', '9236_1', '9207_1', '9206_1', '9209_1', '9208_1', '9020_1', '2041_1');

$omezeni['2041_1'] = 'X1234,-3112';
$omezeni['9020_1'] = 'X1234,-3112';
$omezeni['9031_1'] = 'X2345,-2903';
$omezeni['9206_1'] = '6,T';
$omezeni['9207_1'] = '6,T';
$omezeni['9208_1'] = 'X';
$omezeni['9209_1'] = 'X';
$omezeni['9231_1'] = 'X';
$omezeni['9236_1'] = 'X';

$trasa['2041_1'] = array('Praha hl.n.;22:55','Vrané nad Vltavou;23:27');
$trasa['9020_1'] = array('Čerčany;20:06','Praha hl.n.;22:05');
$trasa['9031_1'] = array('Vrané nad Vltavou;0:51','Čerčany;1:51');
$trasa['9206_1'] = array('Světlá nad Sázavou;13:46','Čerčany;16:49');
$trasa['9207_1'] = array('Čerčany;9:12','Světlá nad Sázavou;12:45');
$trasa['9208_1'] = array('Světlá nad Sázavou;15:46','Čerčany;18:49');
$trasa['9209_1'] = array('Čerčany;11:15','Světlá nad Sázavou;14:44');
$trasa['9231_1'] = array('Čerčany;3:34','Zruč nad Sázavou;5:15');
$trasa['9236_1'] = array('Zruč nad Sázavou;6:06','Čerčany;7:50');





@$ts852 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>