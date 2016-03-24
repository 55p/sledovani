<?php 
$zacatekPlatnosti = '1.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5891_1', '5893_1', '1904_1', '543_1', '542_1');

$omezeni['542_1'] = 'T,-2503,-2703,-0307,-0507,-2809,-2810,-1711';
$omezeni['543_1'] = '5,2403,2710,1611,-2503,-2810,-1811';

$omezeni['1904_1'] = 'X';
$omezeni['5891_1'] = 'X2,X3,X5';
$omezeni['5893_1'] = 'X1,X4';

$typ[5891] = $typ[5893] = 'Sv';

$trasa['5891_1'] = array('Odstavné nádraží Praha-jih;3:33','Nymburk hl.n.;4:29');
$trasa['5893_1'] = array('Odstavné nádraží Praha-jih;4:31','Nymburk hl.n.;5:36');
$trasa['1904_1'] = array('Nymburk hl.n.;5:59', 'Praha Masarykovo nádraží;6:58');

$trasa['542_1'] = array('Opava východ;15:50', 'Praha hl.n.;19:15');
$trasa['543_1'] = array('Praha hl.n.;13:06', 'Opava východ;16:33');

$typ[542] = $typ[543] = 'IC';


@$ts142 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>