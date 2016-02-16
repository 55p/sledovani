<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('6850_1', '6961_1', '783_1', '792_1', '789_1', '786_1', '795_1', '780_1');
$obeh[2] = array('781_1', '794_1', '787_1', '788_1', '793_1', '782_1');
$obeh[3] = array('1692_1', '1693_1', '785_1', '790_1', '791_1', '784_1', '29784_1', '6964_1');

$omezeni['1692_1'] = 'X';
$omezeni['1693_1'] = 'X';
$omezeni['29784_1'] = 'X';
$omezeni['6850_1'] = '25';
$omezeni['6961_1'] = 'X';
$omezeni['6964_1'] = '25';
$omezeni['780_1'] = 'X,T';
$omezeni['781_1'] = 'X,6';
$omezeni['794_1'] = 'X,6';
$omezeni['795_1'] = 'X,T';

$trasa['29784_1'] = array('Ústí nad Labem západ;19:29','Děčín hl.n.;19:47');

$poznamkaObehu['6850_1'] = array('pk', 'postrk');
$poznamkaObehu['6961_1'] = array('pk', 'postrk');
$poznamkaObehu['792_1'] = array('pk', 'postrk');
$poznamkaObehu['786_1'] = array('pk', 'postrk');
$poznamkaObehu['780_1'] = array('pk', 'postrk');
$poznamkaObehu['794_1'] = array('pk', 'postrk');
$poznamkaObehu['788_1'] = array('pk', 'postrk');
$poznamkaObehu['782_1'] = array('pk', 'postrk');
$poznamkaObehu['1692_1'] = array('pk', 'postrk');
$poznamkaObehu['790_1'] = array('pk', 'postrk');
$poznamkaObehu['784_1'] = array('pk', 'postrk');


$trasa['1692_1'] = array('Ústí nad Labem hl.n.;4:42', 'Kadaň-Prunéřov;6:06');
$trasa['1693_1'] = array('Kadaň-Prunéřov;6:14', 'Ústí nad Labem hl.n.;7:33');
$trasa['6850_1'] = array('Děčín hl.n.;4:59', 'Ústí nad Labem západ;5:33');
$trasa['6961_1'] = array('Děčín hl.n.;6:00', 'Ústí nad Labem západ;6:33');
$trasa['6964_1'] = array('Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55');
$trasa['780_1'] = array('Kolín;21:15', 'Ústí nad Labem hl.n.;23:16');
$trasa['781_1'] = array('Ústí nad Labem západ;4:47', 'Kolín;6:40');
$trasa['782_1'] = array('Kolín;19:15', 'Ústí nad Labem západ;21:08');
$trasa['783_1'] = array('Ústí nad Labem západ;6:47', 'Kolín;8:40');
$trasa['784_1'] = array('Kolín;17:15', 'Ústí nad Labem západ;19:08');
$trasa['785_1'] = array('Ústí nad Labem západ;8:47', 'Kolín;10:40');
$trasa['786_1'] = array('Kolín;15:15', 'Ústí nad Labem západ;17:08');
$trasa['787_1'] = array('Ústí nad Labem západ;10:47', 'Kolín;12:40');
$trasa['788_1'] = array('Kolín;13:15', 'Ústí nad Labem západ;15:08');
$trasa['789_1'] = array('Ústí nad Labem západ;12:47', 'Kolín;14:40');
$trasa['790_1'] = array('Kolín;11:15', 'Ústí nad Labem západ;13:08');
$trasa['791_1'] = array('Ústí nad Labem západ;14:47', 'Kolín;16:40');
$trasa['792_1'] = array('Kolín;9:15', 'Ústí nad Labem západ;11:08');
$trasa['793_1'] = array('Ústí nad Labem západ;16:47', 'Kolín;18:40');
$trasa['794_1'] = array('Kolín;7:15', 'Ústí nad Labem západ;9:08');
$trasa['795_1'] = array('Ústí nad Labem západ;18:47', 'Kolín;20:40');


@$ts122 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>