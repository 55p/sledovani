<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('444_1', '445_1', '220_1', '129_1');
$obeh[2] = array('702_1', '704_1', '709_1');

$omezeni['702_1'] = '1';
$omezeni['704_1'] = '2,3,4,5,6,7';

$trasa['444_1'] = array('Žilina;0:05','Bohumín;1:30');
$trasa['445_1'] = array('Bohumín;2:49','Žilina;4:14');
$trasa['702_1'] = array('Žilina;4:19','Bratislava hl.st.;7:05');
$trasa['704_1'] = array('Žilina;5:19','Bratislava hl.st.;8:05');
$trasa['709_1'] = array('Bratislava hl.st.;19:55','Žilina;22:41');
$trasa['129_1'] = array('Praha hl.n.;15:24', 'Žilina;20:29');
$trasa['220_1'] = array('Žilina;7:31', 'Praha hl.n.;12:39');

$typ[129] = 'EC';
$typ[220] = 'Ex';
$typ[444] = 'EN';
$typ[445] = 'EN';
$typ[702] = 'RR';
$typ[704] = 'RR';
$typ[709] = 'RR';

@$ts315 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>