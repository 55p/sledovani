<?php 
$zacatekPlatnosti = '29.9.2015';
$konecPlatnosti = null;

$obeh[1] = array('671_1', '692_1', '681_1', '686_1', '687_1', '676_1', '6967_1', '6955_1');
$obeh[2] = array('6930_1', '6965_1', '679_1', '688_1', '685_1', '1903', '21810');
$obeh[3] = array('21811', '1900', '1901');
$obeh[4] = array('1902', '690_1', '683_1', '684_1', '689_1', '674_1', '6955_2', '6962_1');
$obeh[5] = array('675_1', '682_2', '1698_1', '680_1', '691_1');
$obeh[6] = array('601_1', '71260_1', '677_1', '680_2', '691_2', '682_3', '1698_2', '670_1');


$omezeni['1698_1'] = 'X1,X2,X3,X4';
$omezeni['1698_2'] = 'X5';
$omezeni['1900'] = 'X';
$omezeni['1901'] = 'X';
$omezeni['1902'] = 'X';
$omezeni['1903'] = 'X';
$omezeni['21811'] = 'X1';
$omezeni['21810'] = 'X5';
$omezeni['601_1'] = 'X';
$omezeni['670_1'] = 'zX';
$omezeni['671_1'] = 'X';
$omezeni['674_1'] = 'X';
$omezeni['675_1'] = 'X';
$omezeni['676_1'] = 'zX';
$omezeni['677_1'] = 'X';
$omezeni['679_1'] = 'X';
$omezeni['680_1'] = 'X5';
$omezeni['680_2'] = 'X1,X2,X3,X4';
$omezeni['681_1'] = 'X';
$omezeni['685_1'] = 'X';
$omezeni['682_2'] = 'X1,X2,X3,X4';
$omezeni['682_3'] = 'X5';
$omezeni['683_1'] = 'X';
$omezeni['684_1'] = 'X';
$omezeni['686_1'] = 'X';
$omezeni['687_1'] = 'X';
$omezeni['688_1'] = 'X';
$omezeni['689_1'] = 'X';
$omezeni['690_1'] = 'X';
$omezeni['691_1'] = 'X5';
$omezeni['691_2'] = 'X1,X2,X3,X4';
$omezeni['692_1'] = 'X';
$omezeni['6930_1'] = 'X';
$omezeni['6955_1'] = 'X1,X2,X3,X4';
$omezeni['6955_2'] = 'X5';
$omezeni['6962_1'] = 'X1,X2,X3,X4';
$omezeni['6965_1'] = 'X';
$omezeni['6967_1'] = 'X1,X2,X3,X4';
$omezeni['71260_1'] = 'X';

@$ts121 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
//unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>