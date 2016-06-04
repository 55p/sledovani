<?php 
$zacatekPlatnosti = '12.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('6401_1', '6404_1', '1685_1', '1686_1', '6431_1');
$obeh[2] = array('6443_1', '5805_1', '5870_1', '5879_1', '5874_1');
$obeh[3] = array('9460_1', '6402_1', '6964_1', '6967_1');

$omezeni['1685_1'] = 'X';
$omezeni['1686_1'] = 'X';
$omezeni['5805_1'] = 'X';
$omezeni['5870_1'] = 'X';
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


$poznamkaObehu['5870_1'] = array('pk', 'postrk');


$trasa['1685'] = array('Ústí nad Labem hl.n.;14:42', 'Lovosice;14:57');
$trasa['1686'] = array('Lovosice;15:20', 'Ústí nad Labem západ;15:36');
$trasa['5805'] = array('Lysá nad Labem;6:09', 'Kolín;6:58');
$trasa['5870'] = array('Kolín;7:29', 'Nymburk hl.n.;7:56');
$trasa['5874'] = array('Kolín;9:29', 'Nymburk hl.n.;9:56');
$trasa['5879'] = array('Nymburk hl.n.;8:01', 'Kolín;8:28');
$trasa['6401'] = array('Ústí nad Labem západ;5:03', 'Lysá nad Labem;6:38');
$trasa['6402'] = array('Lysá nad Labem;6:18', 'Ústí nad Labem západ;7:51');
$trasa['6404'] = array('Lysá nad Labem;6:57', 'Ústí nad Labem západ;8:51');
$trasa['6431'] = array('Ústí nad Labem západ;17:03', 'Mělník;18:03');
$trasa['6443'] = array('Mělník;5:04', 'Lysá nad Labem;5:38');
$trasa['6949'] = array('Ústí nad Labem hl.n.;12:42', 'Roudnice nad Labem;13:14');
$trasa['6950'] = array('Roudnice nad Labem;14:26', 'Ústí nad Labem hl.n.;14:56');
$trasa['6964'] = array('Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55');
$trasa['6967'] = array('Děčín hl.n.;21:20', 'Ústí nad Labem hl.n.;21:43');
$trasa['9460'] = array('Nymburk hl.n.;5:31', 'Lysá nad Labem;5:48');

@$ts123 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>