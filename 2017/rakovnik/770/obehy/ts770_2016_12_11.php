<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['1221_1', '1232_1', '1225_1', '1906_1', '1907_1', '1228_1', '1229_1', '1224_1', '1233_1', '1220_1'];

$omezeni['1220_1'] = 'T,-2412,-2512,-2612,-1404,-1604,-3004,-0705,-0507,-0607,-2809,-2810,-1711';
$omezeni['1221_1'] = 'X,6,1404,0507,2809,1711,-1504,-1811';
$omezeni['1232_1'] = 'X,6,1404,0507,2809,1711,-1504,-1811';
$omezeni['1233_1'] = 'T,-2412,-2512,-2612,-1404,-1604,-3004,-0705,-0507,-0607,-2809,-2810,-1711';
$omezeni['1906_1'] = '25';
$omezeni['1907_1'] = '25';

$trasa['1220_1'] = ['Praha Masarykovo n.;21:02','Rakovník;22:32'];
$trasa['1221_1'] = ['Rakovník;5:16','Praha Masarykovo n.;6:50'];
$trasa['1224_1'] = ['Praha Masarykovo n.;17:02','Rakovník;18:32'];
$trasa['1225_1'] = ['Rakovník;9:22','Praha Masarykovo n.;10:52'];
$trasa['1228_1'] = ['Praha Masarykovo n.;13:02','Rakovník;14:32'];
$trasa['1229_1'] = ['Rakovník;15:22','Praha Masarykovo n.;16:52'];
$trasa['1232_1'] = ['Praha Masarykovo n.;7:02','Rakovník;8:32'];
$trasa['1233_1'] = ['Rakovník;19:22','Praha Masarykovo n.;20:52'];
$trasa['1906_1'] = ['Praha Masarykovo n.;11:02','Kladno-Ostrovec;11:49'];
$trasa['1907_1'] = ['Kladno-Ostrovec;12:05','Praha Masarykovo n.;12:52'];

$poznamkaObehu['1221_1'] = ['pk', 'postrk'];
$poznamkaObehu['1225_1'] = ['pk', 'postrk'];
$poznamkaObehu['1907_1'] = ['pk', 'postrk'];
$poznamkaObehu['1229_1'] = ['pk', 'postrk'];
$poznamkaObehu['1233_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts770 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


