<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1541_1', '1542_1', '1547_1');
$obeh[2] = array('1540_1', '1545_1', '1546_1');
$obeh[3] = array('536_1', '1543_1', '1544_1', '729_1');


$trasa['1540_1'] = array('Linz Hbf;6:35', 'Praha-Holešovice;11:19');
$trasa['1541_1'] = array('Praha hl.n.;6:02', 'Linz Hbf;10:07');
$trasa['1542_1'] = array('Linz Hbf;11:52', 'Praha-Holešovice;16:19');
$trasa['1543_1'] = array('Praha-Holešovice;9:42', 'Linz Hbf;14:07');
$trasa['1544_1'] = array('Linz Hbf;15:52', 'Praha hl.n.;19:57');
$trasa['1545_1'] = array('Praha-Holešovice;13:42', 'Linz Hbf;18:07');
$trasa['1546_1'] = array('Linz Hbf;18:35', 'Praha hl.n.;22:57');
$trasa['1547_1'] = array('Praha-Holešovice;17:42', 'Linz Hbf;22:07');
$trasa['536_1'] = array('České Budějovice;6:53', 'Praha-Holešovice;9:19');
$trasa['729_1'] = array('Praha hl.n.;20:32', 'České Budějovice;22:52');



@$ts302 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>