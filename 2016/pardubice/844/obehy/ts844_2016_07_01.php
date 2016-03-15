<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('25002_1', '25003_1', '25006_1', '25008_1', '25009_1', '25012_1', '25013_1', '25011_1', '25014_1', '25014_2', '25015_1', '25016_1', '25018_1', '25017_1', '25020_1', '25022_1', '25021_1', '25026_1', '25021_2', '25026_2', '25023_1', '25028_1', '125025_1', '5083_1');
$obeh[2] = array('25000_1', '25001_1', '25002_2', '25004_1', '25005_1', '25010_1', '105305_1', '5310_1', '5355_1', '5357_1', '5346_1', '5312_1', '5573_1', '5356_1', '25025_1', '25030_1', '25030_2', '5083_2');
$obeh[3] = array('5361_1', '25040_1', '25041_1', '25044_1', '25045_1', '25046_1', '25049_1', '25050_1', '25053_1', '25052_1', '25055_1', '25054_1', '25057_1', '5316_1', '5082_1', '25027_1', '25029_1');

$omezeni['105305_1'] = '6';
$omezeni['125025_1'] = '7,0607';
$omezeni['25000_1'] = 'X';
$omezeni['25001_1'] = 'X';
$omezeni['25002_1'] = 'X';
$omezeni['25002_2'] = '6,0507';
$omezeni['25003_1'] = 'X';
$omezeni['25004_1'] = 'X';
$omezeni['25005_1'] = 'X';
$omezeni['25006_1'] = 'X';
$omezeni['25008_1'] = '25';
$omezeni['25009_1'] = '25';
$omezeni['25010_1'] = 'X';
$omezeni['25011_1'] = '25';
$omezeni['25012_1'] = '25';
$omezeni['25013_1'] = 'X';
$omezeni['25014_1'] = 'X';
$omezeni['25014_2'] = '25';
$omezeni['25016_1'] = 'X';
$omezeni['25018_1'] = '25';
$omezeni['25020_1'] = 'X';
$omezeni['25021_1'] = 'X';
$omezeni['25021_2'] = '25';
$omezeni['25022_1'] = '25';
$omezeni['25026_1'] = 'X';
$omezeni['25026_2'] = '25';
$omezeni['25027_1'] = '7,0607';
$omezeni['25028_1'] = '25';
$omezeni['25029_1'] = 'X';
$omezeni['25030_1'] = '6';
$omezeni['25030_2'] = 'XT,0507';
$omezeni['25040_1'] = 'X';
$omezeni['25041_1'] = 'X';
$omezeni['5083_1'] = '6,0507';
$omezeni['5310_1'] = '6';
$omezeni['5312_1'] = 'T,-0307,-0507';
$omezeni['5346_1'] = 'X,-0107,-0407';
$omezeni['5355_1'] = '1,2,3,4,0407,-0107';
$omezeni['5356_1'] = 'X';
$omezeni['5357_1'] = '5,7,0607,-0307';
$omezeni['5573_1'] = 'X';
$omezeni['5083_2'] = 'XT';
$omezeni['5083_1'] = '6';


$poznamkaObehu['125025_1'] = array('pk', 'postrk');
$poznamkaObehu['105305_1'] = array('pk', 'postrk');
$poznamkaObehu['5357_1'] = array('pk', 'postrk');

$trasa['25000_1'] = array('Heřmanův Městec;4:21', 'Přelouč;4:42');
$trasa['25001_1'] = array('Přelouč;4:48', 'Heřmanův Městec;5:11');
$trasa['25002_1'] = array('Heřmanův Městec;4:54', 'Přelouč;5:15');
$trasa['25002_2'] = array('Heřmanův Městec;4:54', 'Pardubice hl.n.;5:35');
$trasa['25003_1'] = array('Přelouč;5:46', 'Heřmanův Městec;6:06');
$trasa['25004_1'] = array('Heřmanův Městec;5:19', 'Přelouč;5:40');
$trasa['25005_1'] = array('Přelouč;6:12', 'Prachovice;6:50');
$trasa['25006_1'] = array('Heřmanův Městec;6:18', 'Přelouč;6:39');
$trasa['25008_1'] = array('Heřmanův Městec;6:42', 'Přelouč;7:03');
$trasa['25009_1'] = array('Přelouč;7:11', 'Heřmanův Městec;7:31');
$trasa['25010_1'] = array('Prachovice;7:00', 'Pardubice hl.n.;7:57');
$trasa['25011_1'] = array('Přelouč;9:08', 'Prachovice;9:43');
$trasa['25012_1'] = array('Heřmanův Městec;8:27', 'Přelouč;8:48');
$trasa['25013_1'] = array('Přelouč;10:11', 'Heřmanův Městec;10:31');
$trasa['25014_1'] = array('Heřmanův Městec;11:23', 'Přelouč;11:44');
$trasa['25014_2'] = array('Prachovice;11:07', 'Přelouč;11:44');
$trasa['25015_1'] = array('Přelouč;12:11', 'Heřmanův Městec;12:31');
$trasa['25016_1'] = array('Heřmanův Městec;13:10', 'Přelouč;13:31');
$trasa['25017_1'] = array('Přelouč;14:19', 'Heřmanův Městec;14:39');
$trasa['25018_1'] = array('Heřmanův Městec;13:23', 'Přelouč;13:44');
$trasa['25020_1'] = array('Heřmanův Městec;14:43', 'Přelouč;15:04');
$trasa['25021_1'] = array('Přelouč;16:11', 'Heřmanův Městec;16:31');
$trasa['25021_2'] = array('Přelouč;16:11', 'Prachovice;16:46');
$trasa['25022_1'] = array('Heřmanův Městec;15:23', 'Přelouč;15:44');
$trasa['25023_1'] = array('Přelouč;18:11', 'Heřmanův Městec;18:31');
$trasa['25025'] = array('Pardubice hl.n.;19:40', 'Prachovice;20:34');
$trasa['25026_1'] = array('Heřmanův Městec;17:23', 'Přelouč;17:44');
$trasa['25026_2'] = array('Prachovice;17:07', 'Přelouč;17:44');
$trasa['25027_1'] = array('Přelouč;22:00', 'Heřmanův Městec;22:20');
$trasa['25028_1'] = array('Heřmanův Městec;18:43', 'Přelouč;19:04');
$trasa['25029_1'] = array('Přelouč;22:27', 'Heřmanův Městec;22:47');
$trasa['25030_1'] = array('Prachovice;21:01', 'Heřmanův Městec;21:14');
$trasa['25030_2'] = array('Prachovice;21:01', 'Přelouč;21:37');
$trasa['25040_1'] = array('Chrudim;4:02', 'Moravany;4:33');
$trasa['25041_1'] = array('Moravany;4:41', 'Chrudim;5:13');
$trasa['25044_1'] = array('Chrudim;6:22', 'Moravany;6:55');
$trasa['25045_1'] = array('Moravany;7:03', 'Chrudim;7:36');
$trasa['25046_1'] = array('Chrudim;10:24', 'Moravany;10:55');
$trasa['25049_1'] = array('Moravany;11:06', 'Chrudim;11:37');
$trasa['25050_1'] = array('Chrudim;14:24', 'Moravany;14:55');
$trasa['25052_1'] = array('Chrudim;16:24', 'Moravany;16:55');
$trasa['25053_1'] = array('Moravany;15:06', 'Chrudim;15:37');
$trasa['25054_1'] = array('Chrudim;18:24', 'Moravany;18:55');
$trasa['25055_1'] = array('Moravany;17:06', 'Chrudim;17:37');
$trasa['25057_1'] = array('Moravany;19:06', 'Chrudim;19:37');
$trasa['5082_1'] = array('Pardubice hl.n.;21:30', 'Přelouč;21:43');
$trasa['5083_1'] = array('Přelouč;22:24', 'Pardubice hl.n.;22:39');
$trasa['5083_2'] = array('Přelouč;22:24', 'Pardubice hl.n.;22:39');
$trasa['5310_1'] = array('Havlíčkův Brod;10:16', 'Pardubice hl.n.;12:13');
$trasa['5312_1'] = array('Havlíčkův Brod;14:10', 'Pardubice hl.n.;16:24');
$trasa['5316_1'] = array('Havlíčkův Brod;18:07', 'Pardubice hl.n.;20:15');
$trasa['5346_1'] = array('Hlinsko v Čechách;14:20', 'Pardubice hl.n.;15:40');
$trasa['5355_1'] = array('Pardubice hl.n.;12:27', 'Slatiňany;12:53');
$trasa['5356_1'] = array('Slatiňany;18:31', 'Pardubice hl.n.;19:02');
$trasa['5357_1'] = array('Pardubice hl.n.;14:27', 'Borová u Poličky;15:59');
$trasa['5361_1'] = array('Pardubice-Rosice n.L.;1:16', 'Chrudim;1:31');
$trasa['5573_1'] = array('Pardubice-Rosice n.L.;17:08', 'Slatiňany;17:33');
$trasa['5357_1'] = array('Pardubice hl.n.;14:27', 'Slatiňany;14:54');
$trasa['5346_1'] = array('Slatiňany;15:14', 'Pardubice hl.n.;15:40');
$trasa['5312_1'] = array('Slatiňany;15:47', 'Pardubice hl.n.;16:24');

$poznamkaObehu['5316_1'] = array('př', 'přípřež');
$trasa['5316_1'] = array('Chrudim;19:52', 'Pardubice hl.n.;20:07');
$trasa['105305'] = array('Pardubice hl.n.;9:52', 'Hlinsko v Čechách;11:00')


@$ts844 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>