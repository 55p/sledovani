<?php 
$zacatekPlatnosti = '15.6.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1636_1', '1637_1');

$omezeni['1636_1'] = '25';
$omezeni['1637_1'] = '25';

$trasa['1636_1'] = array('Brno hl.n.;8:11', 'Žďár nad Sázavou;10:16');
$trasa['1637_1'] = array('Žďár nad Sázavou;15:40', 'Brno hl.n.;17:51');

@$ts715 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);

?>
