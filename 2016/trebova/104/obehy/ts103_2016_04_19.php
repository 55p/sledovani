<?php 
$zacatekPlatnosti = '19.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5020_1', '6281_1', '5071_1', '3781_1', '3782_1', '5002_1', '5013_1');

$omezeni['3781_1'] = 'X';
$omezeni['3782_1'] = 'X';
$omezeni['5002_1'] = '6';
$omezeni['5013_1'] = 'T';
$omezeni['5020_1'] = 'X';
$omezeni['5071_1'] = 'X';
$omezeni['6281_1'] = 'X';

$trasa['3781_1'] = array('Česká Třebová;14:26', 'Zábřeh na Moravě;15:00');
$trasa['3782_1'] = array('Zábřeh na Moravě;15:27', 'Česká Třebová;16:06');
$trasa['5002_1'] = array('Ústí nad Orlicí;5:15', 'Pardubice hl.n.;6:08');
$trasa['5013_1'] = array('Pardubice hl.n.;17:44', 'Česká Třebová;19:01');
$trasa['5020_1'] = array('Česká Třebová;3:51', 'Pardubice hl.n.;4:51');
$trasa['5071_1'] = array('Ústí nad Orlicí;6:41', 'Česká Třebová;6:55');
$trasa['6281_1'] = array('Pardubice hl.n.;5:42', 'Lichkov;7:41');


@$ts103 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>