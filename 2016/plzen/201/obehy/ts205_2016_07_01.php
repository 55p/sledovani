<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array(1982, 1991);

$omezeni[1982] = 'X';
$omezeni[1991] = 'X';

$trasa['1982'] = array('Plzeň hl.n.;8:59', 'Mariánské Lázně;10:07');
$trasa['1991'] = array('Mariánské Lázně;17:47', 'Plzeň hl.n.;18:58');


@$ts205 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>