<?php 
$zacatekPlatnosti = '3.11.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8002_1', '8001_1', '8004_1', '8005_1', '8010_1', '8009_1', '8014_1', '8013_1');

$omezeni['8001_1'] = 'T';
$omezeni['8002_1'] = 'X';
$omezeni['8004_1'] = 'T';
$omezeni['8005_1'] = 'X,T';
$omezeni['8009_1'] = 'X';
$omezeni['8010_1'] = 'X,T';
$omezeni['8013_1'] = 'X6';
$omezeni['8014_1'] = 'X6';


$trasa['8001_1'] = array('Strakonice;5:49', 'České Budějovice;6:53');
$trasa['8002_1'] = array('České Budějovice;6:14', 'Strakonice;7:22');
$trasa['8004_1'] = array('České Budějovice;9:06', 'Strakonice;10:08');
$trasa['8005_1'] = array('Strakonice;10:23', 'České Budějovice;11:37');
$trasa['8009_1'] = array('Strakonice;14:23', 'České Budějovice;15:37');
$trasa['8010_1'] = array('České Budějovice;12:28', 'Strakonice;13:33');
$trasa['8013_1'] = array('Štrbské Pleso;11:14', 'Štrba;11:32');
$trasa['8014_1'] = array('České Budějovice;17:06', 'Strakonice;18:08');


@$ts631 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>