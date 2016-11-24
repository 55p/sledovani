<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('541_1', '116_1', '145_1', '145_2', '145_3');
$obeh[2] = array('144_1', '144_2', '144_3', '117_1', '540_1');

$omezeni['144_1'] = 'X6,-2512,-2612,-0101';
$omezeni['144_2'] = 'T,-2512,-2612,-0101';
$omezeni['144_3'] = '2512,2612,0101';
$omezeni['145_1'] = '2412,2512,3112';
$omezeni['145_2'] = '6,-2412';
$omezeni['145_3'] = 'XT,-2412,-2512,-3112';
$omezeni['540_1'] = 'T';
$omezeni['541_1'] = 'X1';

$trasa['116_1'] = array('Bohumín;10:08', 'Praha hl.n.;13:39');
$trasa['117_1'] = array('Praha hl.n.;14:22', 'Bohumín;17:52');
$trasa['144_1'] = array('Žilina;6:25', 'Praha hl.n.;11:39');
$trasa['144_2'] = array('Návsí;7:09', 'Praha hl.n.;11:39');
$trasa['144_3'] = array('Bohumín;8:08', 'Praha hl.n.;11:39');
$trasa['145_1'] = array('Praha hl.n.;16:22', 'Bohumín;19:52');
$trasa['145_2'] = array('Praha hl.n.;16:22', 'Návsí;20:49');
$trasa['145_3'] = array('Praha hl.n.;16:22', 'Žilina;21:35');
$trasa['540_1'] = array('Bohumín;20:02', 'Praha hl.n.;23:44');
$trasa['541_1'] = array('Praha hl.n.;4:22', 'Bohumín;8:02');

@$ts142 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>