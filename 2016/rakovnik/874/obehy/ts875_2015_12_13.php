<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7712_1', '7715_1', '7716_1', '7719_1', '7724_1', '7727_1', '7728_1', '7731_1');

$omezeni['7712_1'] = 'X';
$omezeni['7715_1'] = 'X';
$omezeni['7716_1'] = 'X5';
$omezeni['7719_1'] = 'X5';
$omezeni['7724_1'] = 'X';
$omezeni['7727_1'] = 'X';
$omezeni['7728_1'] = 'X';
$omezeni['7731_1'] = 'X';

$trasa['7712_1'] = array('Rakovník;4:53', 'Beroun;6:00');
$trasa['7715_1'] = array('Beroun;6:22', 'Rakovník;7:18');
$trasa['7716_1'] = array('Rakovník;7:51', 'Beroun;8:47');
$trasa['7719_1'] = array('Beroun;9:55', 'Rakovník;10:55');
$trasa['7724_1'] = array('Rakovník;12:34', 'Beroun;13:30');
$trasa['7727_1'] = array('Beroun;13:53', 'Rakovník;14:51');
$trasa['7728_1'] = array('Rakovník;15:05', 'Beroun;16:00');
$trasa['7731_1'] = array('Beroun;16:11', 'Rakovník;17:07');


@$ts875 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>