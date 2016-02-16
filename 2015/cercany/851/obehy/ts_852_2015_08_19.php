<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = '31.8.2015 23:59:59';

$obeh[1] = array('9031_1', '9231_1', '9236_1', '9209_1', '9208_1', '9020_1', '2041_1', '9022_1', '2001_1', '2050_1');

$omezeni['2001_1'] = '6';
$omezeni['2041_1'] = 'X1,X2,X3,X4';
$omezeni['2050_1'] = '6';
//$omezeni['29800_1'] = '6';
$omezeni['9020_1'] = 'X1,X2,X3,X4';
$omezeni['9022_1'] = 'X5';
$omezeni['9031_1'] = 'X2,X3,X4,X5';
$omezeni['9208_1'] = 'X';
$omezeni['9209_1'] = 'X';
$omezeni['9231_1'] = 'X';
$omezeni['9236_1'] = 'X';

$trasa['2001_1'] = array('Praha hl.n.;0:16', 'Dobříš;1:39');
$trasa['2041_1'] = array('Praha hl.n.;22:55', 'Vrané nad Vltavou;23:27');
$trasa['2050_1'] = array('Dobříš;3:35', 'Praha hl.n.;5:05');
$trasa['9020_1'] = array('Čerčany;20:06', 'Praha hl.n.;22:05');
$trasa['9022_1'] = array('Čerčany;22:06', 'Praha hl.n.;0:05');
$trasa['9031_1'] = array('Vrané nad Vltavou;0:51', 'Čerčany;1:51');
$trasa['9208_1'] = array('Světlá nad Sázavou;15:46', 'Čerčany;18:49');
$trasa['9209_1'] = array('Čerčany;11:16', 'Světlá nad Sázavou;14:44');
$trasa['9231_1'] = array('Čerčany;3:35', 'Zruč nad Sázavou;5:17');
$trasa['9236_1'] = array('Zruč nad Sázavou;6:01', 'Čerčany;7:54');


@$ts852 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>