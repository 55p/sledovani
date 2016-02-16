<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9996_1', '9911_1', '885_1', '886_1', '853_1');
$obeh[2] = array('3243_1', '850_1', '891_1', '880_1');
$obeh[3] = array('881_1', '890_1', '887_1', '884_1', '955_1');
$obeh[4] = array('883_1', '888_1', '851_1');
$obeh[5] = array('852_1', '889_1', '882_1');

$omezeni['3243_1'] = 'X';
$omezeni['881_1'] = 'X';
$omezeni['890_1'] = 'X';
$omezeni['9911_1'] = 'X';
$omezeni['9996_1'] = 'X';

$trasa['880'] = array('Staré Město u Uherského Hradiště;19:18','Olomouc hl.n.;20:04');
$trasa['882'] = array('Staré Město u Uherského Hradiště;17:18','Praha hl.n.;21:04');
$trasa['884'] = array('Staré Město u Uherského Hradiště;15:18','Praha hl.n.;19:04');
$trasa['886'] = array('Staré Město u Uherského Hradiště;13:18','Praha hl.n.;17:04');
$trasa['888'] = array('Staré Město u Uherského Hradiště;11:18','Praha hl.n.;15:04');
$trasa['890'] = array('Staré Město u Uherského Hradiště;9:18','Olomouc hl.n.;10:04');

$trasa['881'] = array('Olomouc hl.n.;5:57','Staré Město u Uherského Hradiště;6:45');
$trasa['883'] = array('Hradec Králové hl.n.;5:44','Staré Město u Uherského Hradiště;8:45');
$trasa['885'] = array('Praha hl.n.;6:55','Staré Město u Uherského Hradiště;10:45');
$trasa['887'] = array('Olomouc hl.n.;11:54','Staré Město u Uherského Hradiště;12:45');
$trasa['889'] = array('Praha hl.n.;10:55','Staré Město u Uherského Hradiště;14:45');
$trasa['891'] = array('Praha hl.n.;12:55','Staré Město u Uherského Hradiště;16:45');

$trasa[9996] = array('Odstavné nádraží Praha-jih;5:44', 'Praha-Radotín;6:07');
$trasa['3243_1'] = array('Valašské Meziříčí;5:27', 'Vsetín;5:46');
$trasa['850_1'] = array('Vsetín;6:50', 'Praha hl.n.;11:04');
$trasa['851_1'] = array('Praha hl.n.;16:55', 'Vsetín;21:12');
$trasa['852_1'] = array('Vsetín;4:53', 'Praha hl.n.;9:04');
$trasa['853_1'] = array('Praha hl.n.;18:55', 'Vsetín;23:07');
$trasa['955_1'] = array('Praha hl.n.;20:11', 'Hradec Králové hl.n.;21:51');
$trasa['9911_1'] = array('Praha-Radotín;6:29', 'Praha hl.n.;6:46');


@$ts101 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>