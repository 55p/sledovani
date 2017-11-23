<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['6850_1', '6961_1', '783_1', '792_1', '789_1', '786_1', '795_1', '780_1'];
$obeh[2] = ['781_1', '794_1', '787_1', '788_1', '793_1', '782_1'];
$obeh[3] = ['1688_1', '1689_1', '785_1', '790_1', '791_1', '784_1', '29784_1', '6968_1'];

$omezeni['1688_1'] = 'X';
$omezeni['1689_1'] = 'X';
$omezeni['29784_1'] = 'X';
$omezeni['6850_1'] = '25';
$omezeni['6961_1'] = 'X';
$omezeni['6968_1'] = '25';
$omezeni['780_1'] = 'XT,-2412,-2512,-3112,-3003,-0104,-0507,-2809,-1711';
$omezeni['781_1'] = 'X6,3003,0105,0805,0507,2809,-3103,-0707,-2909';
$omezeni['794_1'] = 'X6,3003,0105,0805,0507,2809,-3103,-0707,-2909';
$omezeni['795_1'] = 'XT,-2412,-2512,-3112,-3003,-0104,-0507,-2809,-1711';

$trasa['29784_1'] = ['Ústí nad Labem-západ;19:45','Děčín hl.n.;20:02'];
$trasa['1688_1'] = ['Ústí nad Labem hl.n.;4:41', 'Kadaň-Prunéřov;6:06'];
$trasa['1689_1'] = ['Kadaň-Prunéřov;6:15', 'Ústí nad Labem hl.n.;7:36'];
$trasa['6850_1'] = ['Děčín hl.n.;4:59', 'Ústí nad Labem západ;5:33'];
$trasa['6961_1'] = ['Děčín hl.n.;6:00', 'Ústí nad Labem západ;6:33'];
$trasa['6968_1'] = ['Ústí nad Labem západ;22:24', 'Děčín hl.n.;22:55'];
$trasa['780_1'] = ['Kolín;21:14', 'Ústí nad Labem hl.n.;23:23'];
$trasa['781_1'] = ['Ústí nad Labem západ;4:39', 'Kolín;6:39'];
$trasa['782_1'] = ['Kolín;19:14', 'Ústí nad Labem západ;21:15'];
$trasa['783_1'] = ['Ústí nad Labem západ;6:39', 'Kolín;8:39'];
$trasa['784_1'] = ['Kolín;17:14', 'Ústí nad Labem západ;19:15'];
$trasa['785_1'] = ['Ústí nad Labem západ;8:39', 'Kolín;10:39'];
$trasa['786_1'] = ['Kolín;15:14', 'Ústí nad Labem západ;17:15'];
$trasa['787_1'] = ['Ústí nad Labem západ;10:39', 'Kolín;12:39'];
$trasa['788_1'] = ['Kolín;13:14', 'Ústí nad Labem západ;15:15'];
$trasa['789_1'] = ['Ústí nad Labem západ;12:39', 'Kolín;14:39'];
$trasa['790_1'] = ['Kolín;11:14', 'Ústí nad Labem západ;13:15'];
$trasa['791_1'] = ['Ústí nad Labem západ;14:39', 'Kolín;16:39'];
$trasa['792_1'] = ['Kolín;9:14', 'Ústí nad Labem západ;11:15'];
$trasa['793_1'] = ['Ústí nad Labem západ;16:39', 'Kolín;18:39'];
$trasa['794_1'] = ['Kolín;7:14', 'Ústí nad Labem západ;9:15'];
$trasa['795_1'] = ['Ústí nad Labem západ;18:39', 'Kolín;20:39'];


$poznamkaObehu['6850_1'] = ['pk', 'postrk'];
$poznamkaObehu['6961_1'] = ['pk', 'postrk'];
$poznamkaObehu['792_1'] = ['pk', 'postrk'];
$poznamkaObehu['786_1'] = ['pk', 'postrk'];
$poznamkaObehu['780_1'] = ['pk', 'postrk'];
$poznamkaObehu['794_1'] = ['pk', 'postrk'];
$poznamkaObehu['788_1'] = ['pk', 'postrk'];
$poznamkaObehu['782_1'] = ['pk', 'postrk'];
$poznamkaObehu['1688_1'] = ['pk', 'postrk'];
$poznamkaObehu['790_1'] = ['pk', 'postrk'];
$poznamkaObehu['784_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts122 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


