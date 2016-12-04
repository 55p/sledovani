<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('600_1', '600_2', '609_1', '442_1');
$obeh[2] = array('100442_1', '125_1', '120_1');
$obeh[3] = array('123_1', '122_1', '443_1');
$obeh[4] = array('100443_1', '606_1', '613_1', '613_2');

$omezeni['120_1'] = '-2412,-2512,-3112';
$omezeni['123_1'] = '-2512,-2612,-0101';
$omezeni['600_1'] = 'X6';
$omezeni['600_2'] = 'T';

$trasa['100442_1'] = array('Žilina;1:34','Praha hl.n.;7:22');
$trasa['100443_1'] = array('Bohumín;3:36','Košice;8:39');
$trasa['442_1'] = array('Košice;22:08','Žilina;1:15');
$trasa['443_1'] = array('Praha hl.n.;23:09','Bohumín;3:09');
$trasa['600_1'] = array('Košice;4:06','Bratislava hl.st.;10:05');
$trasa['600_2'] = array('Žilina;7:19','Bratislava hl.st.;10:05');
$trasa['606_1'] = array('Košice;10:06','Bratislava hl.st.','16:05');
$trasa['609_1'] = array('Bratislava hl.st.','13:55;Košice;19:52');
$trasa['613_1'] = array('Bratislava hl.st.;17:56','Košice;23:52');
$trasa['613_2'] = array('Bratislava hl.st.;17:56','Žilina;20:41');






@$ts312 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>