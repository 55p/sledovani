<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['1541_1', '1542_1', '1547_1'];
$obeh[2] = ['1540_1', '1545_1', '1546_1'];
$obeh['1a'] = ['536_1', '1543_1', '1544_1', '729_1'];

$omezeni['536_1'] = '11';
$omezeni['729_1'] = '10';

$trasa['1540_1'] = ['Linz Hbf;6:35', 'Praha-Holešovice;11:08'];
$trasa['1541_1'] = ['Praha hl.n.;6:01', 'Linz Hbf;10:07'];
$trasa['1542_1'] = ['Linz Hbf;11:52', 'Praha-Holešovice;16:08'];
$trasa['1543_1'] = ['Praha-Holešovice;9:48', 'Linz Hbf;14:07'];
$trasa['1544_1'] = ['Linz Hbf;15:52', 'Praha hl.n.;19:57'];
$trasa['1545_1'] = ['Praha-Holešovice;13:48', 'Linz Hbf;18:07'];
$trasa['1546_1'] = ['Linz Hbf;18:35', 'Praha hl.n.;22:57'];
$trasa['1547_1'] = ['Praha-Holešovice;17:48', 'Linz Hbf;22:07'];
$trasa['536_1'] = ['České Budějovice;6:55', 'Praha-Holešovice;9:08'];
$trasa['729_1'] = ['Praha hl.n.;20:31', 'České Budějovice;22:52'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts304 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


