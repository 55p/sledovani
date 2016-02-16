<?php 
$zacatekPlatnosti = '1.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5021_1', '5020_1', '6281_1', '6288_1');

$omezeni['5020_1'] = 'X6';
$omezeni['5021_1'] = 'X6';

$trasa['5020_1'] = array('Česká Třebová;3:51', 'Pardubice hl.n.;4:51');
$trasa['5021_1'] = array('Pardubice hl.n.;0:26', 'Česká Třebová;1:26');
$trasa['6281_1'] = array('Pardubice hl.n.;5:42', 'Wroclaw Glowny;10:17');
$trasa['6288_1'] = array('Wroclaw Glowny;16:55', 'Pardubice hl.n.;21:18');

$typ[-1] = 'Os';



@$ts102 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>