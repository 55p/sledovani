<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('84270_1', '84271_1');
$obeh[2] = array('199999_1', '199998_1', '199997_1');

$omezeni['84270_1'] = '1,3,5,-0607,-2809,-2810';
$omezeni['84271_1'] = '1,3,5,-0607,-2809,-2810';

$trasa['199997_1'] = array('záloha;00:00;23:59');
$trasa['199998_1'] = array('záloha;00:00;23:59');
$trasa['199999_1'] = array('záloha;00:00;23:59');
$trasa['84270_1'] = array('Kolín;06:47','Uhlířské Janovice;08:00');
$trasa['84271_1'] = array('Uhlířské Janovice;09:00','Kolín;10:14');





@$ts014 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>