<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('525_1', '524_1', '176_1', '379_1', '170_1', '100477_1');
$obeh[2] = array('100476_1', '171_1', '378_1', '177_1');

$omezeni['524_1'] = 'X';
$omezeni['525_1'] = 'X';

$trasa['170_1'] = array('Praha hl.n.;16:28','Dresden Hbf;18:43');
$trasa['171_1'] = array('Dresden Hbf;9:08','Praha hl.n.;11:27');
$trasa['176_1'] = array('Praha hl.n.;8:28','Dresden Hbf;10:43');
$trasa['177_1'] = array('Dresden Hbf;17:08','Praha hl.n.;19:27');
$trasa['378_1'] = array('Praha hl.n.;12:28','Dresden Hbf;14:43');
$trasa['379_1'] = array('Dresden Hbf;13:08','Praha hl.n.;15:27');
$trasa['100476_1'] = array('Praha hl.n.;4:06','Dresden Hbf;6:27');
$trasa['100477_1'] = array('Dresden Hbf;21:08','Praha hl.n.;23:27');
$trasa['524_1'] = array('Pardubice hl.n.;5:33', 'Praha hl.n.;6:39');
$trasa['525_1'] = array('Praha hl.n.;0:01', 'Pardubice hl.n.;1:04');


@$ts306 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>