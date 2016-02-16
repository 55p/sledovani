<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('614_1', '1614_1');
$obeh[2] = array('615_1', '3900_1', '3905_1', '128_1', '561_1');
$obeh[3] = array('560_1', '221_1');
$obeh[4] = array('126_1', '551_1');
$obeh[5] = array('550_1', '127_1');

$omezeni['1614_1'] = '25';
$omezeni['3900_1'] = 'X';
$omezeni['3905_1'] = 'X';
$omezeni['550_1'] = '-2512,-2612,-0101';
$omezeni['551_1'] = '-2412,-2512,-3112';
$omezeni['614_1'] = 'X';

$trasa['1614_1'] = array('Žilina;3:08','Bratislava hl.st.;6:05');
$trasa['3900_1'] = array('Žilina;4:48','Čadca;5:26');
$trasa['3905_1'] = array('Čadca;6:03','Žilina;6:41');
$trasa['614_1'] = array('Žilina;3:08','Bratislava hl.st.;6:11');
$trasa['615_1'] = array('Bratislava hl.st.;0:00','Žilina;2:36');


$trasa['126_1'] = array('Žilina;11:31', 'Praha hl.n.;16:39');
$trasa['127_1'] = array('Praha hl.n.;11:24', 'Žilina;16:29');
$trasa['128_1'] = array('Žilina;9:31', 'Praha hl.n.;14:39');
$trasa['221_1'] = array('Praha hl.n.;13:24', 'Žilina;18:29');
$trasa['550_1'] = array('Otrokovice;5:40', 'Praha hl.n.;8:39');
$trasa['551_1'] = array('Praha hl.n.;19:24', 'Otrokovice;22:20');
$trasa['560_1'] = array('Staré Město u Uherského Hradiště;7:28', 'Praha hl.n.;10:39');
$trasa['561_1'] = array('Praha hl.n.;17:24', 'Staré Město u Uherského Hradiště;20:33');

$typ[126] = 'Ex';
$typ[127] = 'EC';
$typ[128] = 'Ex';
$typ[221] = 'EC';
$typ[550] = 'IC';
$typ[551] = 'IC';
$typ[560] = 'IC';
$typ[561] = 'IC';
$typ[614] = 'R';
$typ[1614] = 'R';
$typ[615] = 'R';


@$ts302 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>