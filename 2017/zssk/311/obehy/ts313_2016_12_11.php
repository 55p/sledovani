<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('704_1', '717_1');
$obeh[2] = array('3902_1', '3909_1', '126_1', '523_1');
$obeh[3] = array('522_1', '127_1');
$obeh[4] = array('128_1', '521_1');
$obeh[5] = array('520_1', '221_1');
$obeh[6] = array('220_1', '129_1');

$omezeni['522_1'] = '-2512,-2612,-0101';
$omezeni['523_1'] = '-2412,-2512,-3112';

$trasa['3902_1'] = array('Žilina;5:48','Čadca;6:26');
$trasa['3909_1'] = array('Čadca;6:56','Žilina:7:36');
$trasa['704_1'] = array('Žilina;5:19','Bratislava hl.st.;8:05');
$trasa['717_1'] = array('Bratislava hl.st.;19:55','Žilina;22:41');






@$ts313 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>