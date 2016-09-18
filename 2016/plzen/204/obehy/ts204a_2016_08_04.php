<?php 
$zacatekPlatnosti = '4.8.2016';
$konecPlatnosti = '22.8.2016 23:59:59';

$obeh[1] = array('3890_1', '18803_1', '3887_1');



$trasa['18803_1'] = array('Rybník;6:20', 'České Budějovice;7:20');
$trasa['3887_1'] = array('České Budějovice;20:12', 'Horní Dvořiště;21:22');
$trasa['3890_1'] = array('Horní Dvořiště;6:00', 'Rybník;6:07');



@$ts204a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>