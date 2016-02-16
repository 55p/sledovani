<?php 
$zacatekPlatnosti = '18.11.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9031_1', '9231_1', '9236_1', '9207_1', '9206_1', '9209_1', '9208_1', '9020_1', '9021_1', '9020_2', '2041_1');

$omezeni['2041_1'] = '1012';
$omezeni['9020_1'] = 'X,-1012,-1112';
$omezeni['9020_2'] = '1012';
$omezeni['9021_1'] = 'X,-1012,-1112';
$omezeni['9031_1'] = '1112';
$omezeni['9206_1'] = '6,T';
$omezeni['9207_1'] = '6,T';
$omezeni['9208_1'] = 'X';
$omezeni['9209_1'] = 'X';
$omezeni['9231_1'] = 'X';
$omezeni['9236_1'] = 'X';

$trasa['2041_1'] = array('Praha hl.n.;22:41','Vrané nad Vltavou;23:27');
$trasa['9020_1'] = array('Čerčany;20:06','Vrané nad Vltavou;21:26');
$trasa['9020_2'] = array('Čerčany;20:06','Praha hl.n.;22:30');
$trasa['9021_1'] = array('Vrané nad Vltavou;21:28','Čerčany;22:57');
$trasa['9031_1'] = array('Vrané nad Vltavou;0:51','Čerčany;1:51');
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