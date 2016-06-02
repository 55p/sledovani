<?php 
$zacatekPlatnosti = '11.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9031_1', '2001_1', '209231_1', '2000_1', '2029800_1', '9231_1', '9236_1', '9209_1', '9208_1', '9020_1', '9022_1', '2041_1');

$omezeni['2000_1'] = '6,0507';
$omezeni['2001_1'] = '6,0507';
$omezeni['2029800_1'] = '6,0507';
$omezeni['2041_1'] = 'X1234,-0407';
$omezeni['209231_1'] = 'X1,0707';
$omezeni['9020_1'] = 'X1234,-0407';
$omezeni['9022_1'] = 'X5,0407';
$omezeni['9031_1'] = 'X2345,0407';
$omezeni['9208_1'] = 'X';
$omezeni['9209_1'] = 'X';
$omezeni['9231_1'] = 'X';
$omezeni['9236_1'] = 'X';

$trasa['2000_1'] = array('Dobříš;3:35','Praha hl.n.;5:05');
$trasa['2001_1'] = array('Praha hl.n.;0:16','Dobříš;1:39');
$trasa['2029800_1'] = array('Praha hl.n.;5:17','Praha-Vršovice;5:47');
$trasa['2041_1'] = array('Praha hl.n.;22:55','Vrané nad Vltavou;23:27');
$trasa['209231_1'] = array('Praha-Vršovice;2:48','Čerčany;3:22');
$trasa['9020_1'] = array('Čerčany;20:06','Praha hl.n.;22:05');
$trasa['9022_1'] = array('Čerčany;22:06','Praha hl.n.;0:05');
$trasa['9031_1'] = array('Vrané nad Vltavou;0:51','Čerčany;1:51');
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