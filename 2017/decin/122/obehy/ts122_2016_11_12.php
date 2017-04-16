<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('6850_1', '6961_1', '783_1', '792_1', '789_1', '786_1', '795_1', '780_1');
$obeh[2] = array('781_1', '794_1', '787_1', '788_1', '793_1', '782_1');
$obeh[3] = array('1688_1', '1689_1', '785_1', '790_1', '791_1', '784_1', '29784_1', '6968_1');

$omezeni['1688_1'] = 'X';
$omezeni['1689_1'] = 'X';
$omezeni['29784_1'] = 'X';
$omezeni['6850_1'] = '25';
$omezeni['6961_1'] = 'X';
$omezeni['6968_1'] = '25';
$omezeni['795_1'] = $omezeni['780_1'] = 'X,T,-2412,-2512,-1404,-1604,-3004,-0705,-0507,-2810,-1711';
$omezeni['794_1'] = $omezeni['781_1'] = 'X,6,1404, 0507,2809,1711,-1504,-1811';

$trasa['29784_1'] = array('Ústí nad Labem západ;19:43','Děčín hl.n.;19:59');

$poznamkaObehu['6850_1'] = array('pk', 'postrk');
$poznamkaObehu['6961_1'] = array('pk', 'postrk');
$poznamkaObehu['792_1'] = array('pk', 'postrk');
$poznamkaObehu['786_1'] = array('pk', 'postrk');
$poznamkaObehu['780_1'] = array('pk', 'postrk');
$poznamkaObehu['794_1'] = array('pk', 'postrk');
$poznamkaObehu['788_1'] = array('pk', 'postrk');
$poznamkaObehu['782_1'] = array('pk', 'postrk');
$poznamkaObehu['1688_1'] = array('pk', 'postrk');
$poznamkaObehu['790_1'] = array('pk', 'postrk');
$poznamkaObehu['784_1'] = array('pk', 'postrk');

$typ[29784] = 'Sv';
// $typ[-1] = 'R';


$trasa['1688_1'] = array('Ústí nad Labem hl.n.;4:41', 'Kadaň-Prunéřov;6:06');
$trasa['1689_1'] = array('Kadaň-Prunéřov;6:14', 'Ústí nad Labem hl.n.;7:34');
$trasa['6850_1'] = array('Děčín hl.n.;4:59', 'Ústí nad Labem západ;5:33');
$trasa['6961_1'] = array('Děčín hl.n.;6:00', 'Ústí nad Labem západ;6:33');
$trasa['6968_1'] = array('Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55');
$trasa['780_1'] = array('Kolín;21:15', 'Ústí nad Labem hl.n.;23:23');
$trasa['781_1'] = array('Ústí nad Labem západ;4:39', 'Kolín;6:38');
$trasa['782_1'] = array('Kolín;19:15', 'Ústí nad Labem západ;21:15');
$trasa['783_1'] = array('Ústí nad Labem západ;6:39', 'Kolín;8:38');
$trasa['784_1'] = array('Kolín;17:15', 'Ústí nad Labem západ;19:15');
$trasa['785_1'] = array('Ústí nad Labem západ;8:39', 'Kolín;10:38');
$trasa['786_1'] = array('Kolín;15:15', 'Ústí nad Labem západ;17:15');
$trasa['787_1'] = array('Ústí nad Labem západ;10:39', 'Kolín;12:38');
$trasa['788_1'] = array('Kolín;13:15', 'Ústí nad Labem západ;15:15');
$trasa['789_1'] = array('Ústí nad Labem západ;12:39', 'Kolín;14:38');
$trasa['790_1'] = array('Kolín;11:15', 'Ústí nad Labem západ;13:15');
$trasa['791_1'] = array('Ústí nad Labem západ;14:39', 'Kolín;16:38');
$trasa['792_1'] = array('Kolín;9:15', 'Ústí nad Labem západ;11:15');
$trasa['793_1'] = array('Ústí nad Labem západ;16:39', 'Kolín;18:38');
$trasa['794_1'] = array('Kolín;7:15', 'Ústí nad Labem západ;9:15');
$trasa['795_1'] = array('Ústí nad Labem západ;18:39', 'Kolín;20:38');


@$ts122 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>