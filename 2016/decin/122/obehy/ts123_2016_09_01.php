<?php 
$zacatekPlatnosti = '1.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('6401_1', '5809_1', '5872_1');
$obeh[2] = array('15842_1', '15843_1', '9462_1', '6404_1', '1685_1', '1686_1', '6431_1');
$obeh[3] = array('6443_1', '5805_1', '5870_1', '5879_1', '5874_1');
$obeh[4] = array('9460_1', '6402_1', '6964_1', '6967_1');

$omezeni['15842_1'] = 'X';
$omezeni['15843_1'] = 'X';
$omezeni['1685_1'] = 'X';
$omezeni['1686_1'] = 'X';
$omezeni['5805_1'] = 'X';
$omezeni['5809_1'] = 'X';
$omezeni['5870_1'] = 'X';
$omezeni['5872_1'] = 'X';
$omezeni['5874_1'] = 'X';
$omezeni['5879_1'] = 'X';
$omezeni['6401_1'] = 'X';
$omezeni['6402_1'] = 'X';
$omezeni['6404_1'] = 'X';
$omezeni['6431_1'] = 'X';
$omezeni['6443_1'] = 'X';
$omezeni['6964_1'] = 'X5';
$omezeni['6967_1'] = 'T';
$omezeni['9460_1'] = 'X';
$omezeni['9462_1'] = 'X';


$poznamkaObehu['5870_1'] = array('pk', 'postrk');

$trasa['15842_1'] = array('Nymburk hl.n.;4:34', 'Poříčany;4:54');
$trasa['15843_1'] = array('Poříčany;5:30', 'Nymburk hl.n.;5:58');
$trasa['1685_1'] = array('Ústí nad Labem hl.n.;14:42', 'Lovosice;14:57');
$trasa['1686_1'] = array('Lovosice;15:20', 'Ústí nad Labem západ;15:36');
$trasa['5805_1'] = array('Lysá nad Labem;6:09', 'Kolín;6:58');
$trasa['5809_1'] = array('Lysá nad Labem;7:09', 'Kolín;7:58');
$trasa['5870_1'] = array('Kolín;7:29', 'Nymburk hl.n.;7:56');
$trasa['5872_1'] = array('Kolín;8:29', 'Nymburk hl.n.;8:56');
$trasa['5874_1'] = array('Kolín;9:29', 'Nymburk hl.n.;9:56');
$trasa['5879_1'] = array('Nymburk hl.n.;8:01', 'Kolín;8:28');
$trasa['6401_1'] = array('Ústí nad Labem západ;5:03', 'Lysá nad Labem;6:38');
$trasa['6402_1'] = array('Lysá nad Labem;6:18', 'Ústí nad Labem západ;7:51');
$trasa['6404_1'] = array('Lysá nad Labem;6:57', 'Ústí nad Labem západ;8:51');
$trasa['6431_1'] = array('Ústí nad Labem západ;17:03', 'Mělník;18:03');
$trasa['6443_1'] = array('Mělník;5:04', 'Lysá nad Labem;5:38');
$trasa['6964_1'] = array('Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55');
$trasa['6967_1'] = array('Děčín hl.n.;21:20', 'Ústí nad Labem hl.n.;21:43');
$trasa['9460_1'] = array('Nymburk hl.n.;5:31', 'Lysá nad Labem;5:48');
$trasa['9462_1'] = array('Nymburk hl.n.;6:31', 'Lysá nad Labem;6:48');


$poznamkaObehu['6402_1'] = array();
$poznamkaObehu['6404_1'] = array();
$poznamkaObehu['6967_1'] = array();

@$ts123 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>