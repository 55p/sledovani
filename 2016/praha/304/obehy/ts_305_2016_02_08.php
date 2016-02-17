<?php 
$zacatekPlatnosti = '8.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('553_1', '552_1');

$typ[552] = 'IC';
$typ[553] = 'IC';

$trasa['552_1'] = array('Přerov;4:55', 'Praha hl.n.;7:15');
$trasa['553_1'] = array('Praha hl.n.;0:01', 'Přerov;2:47');

$omezeni['552_1'] = 'X6';
$omezeni['553_1'] = 'X6';

@$ts305 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>