<?php 
$zacatekPlatnosti = '23.11.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['537_1', '700_1'];
$obeh[2] = ['703_1', '718_1', '715_1', '706_1'];

$trasa['537'] = ['Praha-Holešovice;16:42', 'České Budějovice;19:02'];
$trasa['700'] = ['České Budějovice;20:05', 'Praha hl.n.;22:27'];

$trasa['703'] = ['Praha hl.n.;6:32', 'České Budějovice;8:52'];
$trasa['718'] = ['České Budějovice;10:05', 'Praha-Holešovice;12:46'];
$trasa['715'] = ['Praha-Holešovice;13:12', 'České Budějovice;15:52'];
$trasa['706'] = ['České Budějovice;17:01', 'Praha hl.n.;19:27'];


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts310 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


