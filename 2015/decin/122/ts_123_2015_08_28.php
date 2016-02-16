<?php 
$zacatekPlatnosti = '1.9.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('6823_1', '6810_1', '6813_1', '106967_1', '6962_1', '6967_1', '71263_1');
$obeh[2] = array('6401_1', '6404_1', '1687_1', '1688_1', '6431_1');
$obeh[3] = array('6443_1', '5805_1', '105808_1', '9483_1', '5816_1');
$obeh[4] = array('9460_1', '6402_1', '1696_1');

$omezeni['105808_1'] = 'X';
$omezeni['106967_1'] = '5';
$omezeni['1687_1'] = 'X';
$omezeni['1688_1'] = 'X';
$omezeni['1696_1'] = 'X';
$omezeni['5805_1'] = 'X';
$omezeni['5816_1'] = 'X';
$omezeni['6401_1'] = 'X';
$omezeni['6402_1'] = 'X';
$omezeni['6404_1'] = 'X';
$omezeni['6431_1'] = 'X';
$omezeni['6443_1'] = 'X';
$omezeni['6810_1'] = 'X';
$omezeni['6813_1'] = 'X';
$omezeni['6823_1'] = 'X';
$omezeni['6962_1'] = '5';
$omezeni['6967_1'] = 'T';
$omezeni['71263_1'] = 'zX2,zX3,zX4,zX5';
$omezeni['9460_1'] = 'X';
$omezeni['9483_1'] = 'X';

$trasa['5805_1'] = array('Lysá nad Labem;6:08', 'Kolín;6:58');
$trasa['5816_1'] = array('Kolín;9:29', 'Nymburk hl.n.;9:56');
$trasa['9460_1'] = array('Nymburk hl.n.;5:31', 'Lysá nad Labem;5:49');
$trasa['9483_1'] = array('Nymburk hl.n.;8:01', 'Kolín;8:28');
$trasa['105808_1'] = array('Kolín;7:29', 'Nymburk hl.n.;7:56');

$poznamkaObehu['105808_1'] = array('pk', 'postrk');

@$ts123 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>