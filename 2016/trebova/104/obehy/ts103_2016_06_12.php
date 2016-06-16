<?php 
$zacatekPlatnosti = '12.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5020_1', '6281_1', 5071, '5002_1', '5013_1');

$omezeni['5002_1'] = '6';
$omezeni['5013_1'] = '7';
$omezeni['5020_1'] = 'X';
$omezeni['6281_1'] = 'X';
$omezeni['5071'] = 'X';

$trasa['5002_1'] = array('Ústí nad Orlicí;5:15', 'Pardubice;6:08');
$trasa['5013_1'] = array('Pardubice hl.n.;17:44', 'Česká Třebová;19:01');
$trasa['5020_1'] = array('Česká Třebová;3:51', 'Pardubice hl.n.;4:51');
$trasa['6281_1'] = array('Pardubice hl.n.;5:42', 'Choceň;6:34');
$trasa[5071] = array('Choceň;6:41', 'Česká Třebová;6:55');


@$ts103 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>