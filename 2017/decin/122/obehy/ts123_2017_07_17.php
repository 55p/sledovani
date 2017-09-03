<?php 
$zacatekPlatnosti = '17.7.2017';
$konecPlatnosti = '1.9.2017 23:59:59';

$obeh[1] = array('6823_1', '6802_1', '6805_1', '71261_1', '1657_1', '1656_1', '6431_1');
$obeh[2] = array('6443_1', '5904_1', '5879_1', '5874_1', '1310_1', '1311_1');
$obeh[3] = array('6402_1', '6968_1', '6969_1');
$obeh[4] = array('6401_1', '5872_1');
$obeh[5] = array('6404_1', '1655_1', '1654_1', '1696_1');

$omezeni['1310_1'] = 'X1,X5';
$omezeni['1311_1'] = 'X1,X5';
$omezeni['1654_1'] = 'X';
$omezeni['1655_1'] = 'X';
$omezeni['1657_1'] = 'X';
$omezeni['1656_1'] = 'X';
$omezeni['1696_1'] = 'X';
$omezeni['5872_1'] = 'X';
$omezeni['5874_1'] = 'X';
$omezeni['5879_1'] = 'X';
$omezeni['5904_1'] = 'X';
$omezeni['6401_1'] = 'X';
$omezeni['6402_1'] = 'X';
$omezeni['6404_1'] = 'X';
$omezeni['6431_1'] = 'X';
$omezeni['6443_1'] = 'X';
$omezeni['6802_1'] = 'X';
$omezeni['6805_1'] = 'X';
$omezeni['6823_1'] = 'X';
$omezeni['6968_1'] = 'X5,2709,1611';
$omezeni['6969_1'] = 'T,-2809,-2810,-1711';
$omezeni['71261_1'] = 'X';

$trasa['1310_1'] = array('Nymburk hl.n.;18:34','Praha odstavné nádraží;19:35');
$trasa['1311_1'] = array('Praha odstavné nádraží;20:29','Nymburk hl.n.;21:38');
$trasa['5904_1'] = array('Kolín;7:29','Nymburk hl.n.;7:56');
$trasa['71261_1'] = array('Děčín hl.n.;12:44','Ústí nad Labem hl.n.;13:04');

$poznamkaObehu['5904_1'] = array('pk', 'postrk');


$typ['1310_1'] = 'Sv';
$typ['1311_1'] = 'Sv';

$trasa['1654_1'] = array('Roudnice nad Labem;14:26', 'Ústí nad Labem hl.n.;14:56');
$trasa['1655_1'] = array('Ústí nad Labem hl.n.;12:41', 'Roudnice nad Labem;13:11');
$trasa['1657_1'] = array('Ústí nad Labem hl.n.;14:41', 'Lovosice;14:56');
$trasa['1656_1'] = array('Lovosice;15:17', 'Ústí nad Labem západ;15:33');
$trasa['1696_1'] = array('Ústí nad Labem hl.n.;15:46', 'Chomutov;16:49');
$trasa['5872_1'] = array('Kolín;8:29', 'Nymburk hl.n.;8:56');
$trasa['5874_1'] = array('Kolín;9:29', 'Nymburk hl.n.;9:56');
$trasa['5879_1'] = array('Nymburk hl.n.;8:01', 'Kolín;8:28');
$trasa['6401_1'] = array('Ústí nad Labem západ;5:03', 'Kolín;7:58');
$trasa['6402_1'] = array('Nymburk hl.n.;5:31', 'Ústí nad Labem západ;7:51');
$trasa['6404_1'] = array('Nymburk hl.n.;6:31', 'Ústí nad Labem západ;8:51');
$trasa['6431_1'] = array('Ústí nad Labem západ;17:03', 'Mělník;18:03');
$trasa['6443_1'] = array('Mělník;5:02', 'Kolín;6:58');
$trasa['6802_1'] = array('Děčín hl.n.;7:30', 'Kadaň-Prunéřov;9:29');
$trasa['6805_1'] = array('Kadaň-Prunéřov;10:29', 'Děčín hl.n.;12:24');
$trasa['6823_1'] = array('Chomutov;4:39', 'Děčín hl.n.;6:24');
$trasa['6968_1'] = array('Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55');
$trasa['6969_1'] = array('Děčín hl.n.;21:24', 'Ústí nad Labem hl.n.;21:47');


@$ts123 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);
