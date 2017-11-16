<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['9994_1', '9911_1', '885_1', '888_1', '895_1'];
$obeh[2] = ['896_1', '887_1', '3846_1', '887_2', '886_1', '897_1'];
$obeh[3] = ['3840_1', '3842_1', '881_1', '892_1', '891_1', '882_1', '957_1'];
$obeh[4] = ['883_1', '890_1', '893_1', '880_1', '3863_1'];
$obeh[5] = ['894_1', '889_1', '884_1'];

$omezeni['3840_1'] = 'vX';
$omezeni['3842_1'] = 'X1';
$omezeni['3846_1'] = 'T';
$omezeni['881_1'] = 'X6';
$omezeni['887_1'] = 'X6';
$omezeni['887_2'] = 'T';
$omezeni['896_1'] = 'X6';
$omezeni['957_1'] = '10';
$omezeni['9911_1'] = 'X';
$omezeni['9994_1'] = 'X';

$trasa['880_1'] = ['Staré Město u Uherského Hradiště;19:15','Olomouc hl.n.;20:00'];
$trasa['881_1'] = ['Olomouc hl.n.;6:00','Staré Město u Uherského Hradiště;6:46'];
$trasa['882_1'] = ['Staré Město u Uherského Hradiště;17:43','Praha-Smíchov;21:18'];
$trasa['883_1'] = ['Hradec Králové hl.n.;5:44','Staré Město u Uherského Hradiště;8:14'];
$trasa['884_1'] = ['Staré Město u Uherského Hradiště;15:44','Praha hl.n.;19:04'];
$trasa['885_1'] = ['Praha hl.n.;6:58','Staré Město u Uherského Hradiště;10:18'];
$trasa['886_1'] = ['Staré Město u Uherského Hradiště;13:43','Praha-Smíchov;17:18'];
$trasa['887_1'] = ['Praha-Smíchov;8:42','Staré Město u Uherského Hradiště;12:14'];
$trasa['887_2'] = ['Olomouc hl.n.;11:32','Staré Město u Uherského Hradiště;12:14'];
$trasa['888_1'] = ['Staré Město u Uherského Hradiště;11:43','Praha-Smíchov;15:18'];
$trasa['889_1'] = ['Praha-Smíchov;10:42','Staré Město u Uherského Hradiště;14:17'];
$trasa['890_1'] = ['Staré Město u Uherského Hradiště;9:44','Praha-Smíchov;13:18'];
$trasa['891_1'] = ['Praha-Smíchov;12:32','Staré Město u Uherského Hradiště;16:18'];
$trasa['892_1'] = ['Staré Město u Uherského Hradiště;7:44','Praha-Smíchov;11:18'];
$trasa['893_1'] = ['Praha-Smíchov;14:42','Staré Město u Uherského Hradiště;18:14'];
$trasa['894_1'] = ['Otrokovice;5:54','Praha-Smíchov;9:18'];
$trasa['895_1'] = ['Praha-Smíchov;16:42','Staré Město u Uherského Hradiště;20:14'];
$trasa['896_1'] = ['Staré Město u Uherského Hradiště;4:21','Praha-Smíchov;7:47'];
$trasa['897_1'] = ['Praha-Smíchov;18:34','Otrokovice;22:03'];
$trasa['9911_1'] = ['Praha-Radotín;6:18','Praha hl.n.;6:35'];
$trasa['9994_1'] = ['Praha-jih;5:32','Praha-Radotín;6:00'];
$trasa['3840_1'] = ['Přerov;4:37', 'Olomouc hl.n.;4:56'];
$trasa['3842_1'] = ['Přerov;5:05', 'Olomouc hl.n.;5:24'];
$trasa['3846_1'] = ['Přerov;10:05', 'Olomouc hl.n.;10:24'];
$trasa['3863_1'] = ['Olomouc hl.n.;20:33', 'Přerov;20:52'];
$trasa['957_1'] = ['Praha-Smíchov;21:40', 'Hradec Králové hl.n.;23:48'];

$typ['9994_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts305 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


