<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('444_1', '546_1', '141_1', '140_1');
$obeh[2] = array('9994_1', '9911_1', '885_1', '888_1', '895_1');
$obeh[3] = array('896_1', '893_1', '880_1', '3863_1');
$obeh[4] = array('3842_1', '881_1', '70230_1', '892_1', '891_1', '882_1', '882_2', '957_1');
$obeh[5] = array('883_1', '883_2', '890_1', '70231_1', '3846_1', '887_1', '886_1', '897_1');
$obeh[6] = array('894_1', '889_1', '884_1', '547_1', '445_1');
$obeh[7] = array('341_1', '142_1', '545_1', '545_2');
$obeh[8] = array('544_1', '544_2', '143_1', '340_1');

$omezeni['340_1'] = '-2412,-2512,-3112';
$omezeni['341_1'] = '-2512,-2612,-0101';
$omezeni['3842_1'] = 'X';
$omezeni['3846_1'] = '6,T';
$omezeni['3863_1'] = '10';
$omezeni['444_1'] = '6,T';
$omezeni['445_1'] = 'z25';
$omezeni['544_1'] = 'X6';
$omezeni['544_2'] = 'T';
$omezeni['545_1'] = 'X,T';
$omezeni['545_2'] = '6';
$omezeni['546_1'] = 'X';
$omezeni['547_1'] = 'zX';
$omezeni['70230_1'] = '6,T';
$omezeni['70231_1'] = '6,T';
$omezeni['881_1'] = 'X';
$omezeni['882_1'] = '-2412,-2512,-3112';
$omezeni['882_2'] = '2412,2512,3112';
$omezeni['883_1'] = '-2512,-2612,-0101';
$omezeni['883_2'] = '2512,2612,0101';
$omezeni['890_1'] = 'X';
$omezeni['894_1'] = '-2512,-2612,-0101';
$omezeni['895_1'] = '-2412,-2512,-3112';
$omezeni['896_1'] = '-2512,-2612,-0101';
$omezeni['897_1'] = '-2412,-2512,-3112';
$omezeni['957_1'] = '-2412,-2512,-3112';
$omezeni['9911_1'] = 'X';
$omezeni['9994_1'] = 'X';

$trasa['340_1'] = array('Žilina;19:27','Ostrava-Svinov;21:17');
$trasa['341_1'] = array('Ostrava-Svinov;6:43','Žilina;8:33');
$trasa['444_1'] = array('Bohumín;2:12','Praha hl.n.;6:33');
$trasa['445_1'] = array('Praha hl.n.;22:00','Bohumín;2:26');
$trasa['547_1'] = array('Praha hl.n.;21:10','Bohumín;0:54');
$trasa['70230_1'] = array('Přerov;6:43','Staré Město u Uherského Hradiště;7:23');
$trasa['70231_1'] = array('Staré Město u Uherského Hradiště;8:30','Přerov;9:10');
$trasa['880_1'] = array('Staré Město u Uherského Hradiště;19:15','Olomouc hl.n.;20:02');
$trasa['881_1'] = array('Olomouc hl.n.;5:59','Staré Město u Uherského Hradiště;6:46');
$trasa['882_1'] = array('Staré Město u Uherského Hradiště;17:41','Praha hl.n.;21:03');
$trasa['882_2'] = array('Staré Město u Uherského Hradiště;17:41','Olomouc hl.n.;18:29');
$trasa['883_1'] = array('Hradec Králové hl.n.;5:46','Staré Město u Uherského Hradiště;8:15');
$trasa['883_2'] = array('Olomouc hl.n.;7:31','Staré Město u Uherského Hradiště:8:15');
$trasa['884_1'] = array('Staré Město u Uherského Hradiště;15:45','Praha hl.n.;19:03');
$trasa['885_1'] = array('Praha hl.n.;6:53','Staré Město u Uherského Hradiště;10:18');
$trasa['886_1'] = array('Staré Město u Uherského Hradiště;13:41','Praha hl.n.;17:03');
$trasa['887_1'] = array('Olomouc hl.n.;11:59','Staré Město u Uherského Hradiště;12:46');
$trasa['888_1'] = array('Staré Město u Uherského Hradiště;11:41','Praha hl.n.;15:03');
$trasa['889_1'] = array('Praha hl.n.;10:55','Staré Město u Uherského Hradiště;14:18');
$trasa['890_1'] = array('Staré Město u Uherského Hradiště;9:11','Olomouc hl.n.;9:58');
$trasa['891_1'] = array('Praha hl.n.;12:55','Staré Město u Uherského Hradiště;16:18');
$trasa['892_1'] = array('Staré Město u Uherského Hradiště;7:45','Praha hl.n.;11:03');
$trasa['893_1'] = array('Praha hl.n.;14:56','Staré Město u Uherského Hradiště;18:15');
$trasa['894_1'] = array('Staré Město u Uherského Hradiště;5:52','Praha hl.n.;9:03');
$trasa['895_1'] = array('Praha hl.n.;16:55','Staré Město u Uherského Hradiště;20:15');
$trasa['896_1'] = array('Staré Město u Uherského Hradiště;4:23','Praha hl.n.;7:39');
$trasa['897_1'] = array('Praha hl.n.;18:55','Staré Město u Uherského Hradiště;21:44');
$trasa['9994_1'] = array('Praha odstavné nádraží;5:46','Praha-Radotín;6:08');


$trasa['140_1'] = array('Žilina;14:25', 'Praha hl.n.;19:39');
$trasa['141_1'] = array('Praha hl.n.;8:22', 'Žilina;13:35');
$trasa['142_1'] = array('Žilina;10:25', 'Praha hl.n.;15:39');
$trasa['143_1'] = array('Praha hl.n.;12:22', 'Žilina;17:35');
$trasa['3842_1'] = array('Přerov;5:06', 'Olomouc hl.n.;5:25');
$trasa['3846_1'] = array('Přerov;10:06', 'Olomouc hl.n.;10:25');
$trasa['3863_1'] = array('Olomouc hl.n.;20:33', 'Přerov;20:52');
$trasa['544_1'] = array('Návsí;4:58', 'Praha hl.n.;9:39');
$trasa['544_2'] = array('Bohumín;5:58', 'Praha hl.n.;9:39');
$trasa['545_1'] = array('Praha hl.n.;18:22', 'Návsí;22:55');
$trasa['545_2'] = array('Praha hl.n.;18:22', 'Bohumín;21:59');
$trasa['546_1'] = array('Bohumín;3:43', 'Praha hl.n.;7:12');
$trasa['957_1'] = array('Praha hl.n.;22:07', 'Hradec Králové hl.n.;23:48');
$trasa['9911_1'] = array('Praha-Radotín;6:29', 'Praha hl.n.;6:46');



@$ts141 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>