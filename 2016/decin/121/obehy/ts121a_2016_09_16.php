<?php 
$zacatekPlatnosti = '16.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('677_1', '672_1');

$omezeni['672_1'] = 'zX';
$omezeni['677_1'] = 'X';


$trasa['672_1'] = array('Praha Masarykovo nádraží;20:53', 'Děčín hl.n.;22:32');
$trasa['677_1'] = array('Děčín hl.n.;7:24', 'Praha Masarykovo nádraží;9:02');


@$ts121a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>