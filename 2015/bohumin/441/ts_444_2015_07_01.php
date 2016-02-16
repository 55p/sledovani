<?php
$obeh[1] = array('2997_1', '2834_1', '28905_1');
$obeh[2] = array('28910_1', '2839_1', '3410_1', '3411_1', '3418_1', '3419_1', '2992_1');

$omezeni['2834_1'] = 'X';
$omezeni['2839_1'] = 'X';
$omezeni['28905_1'] = 'X';
$omezeni['28910_1'] = 'X';
$omezeni['2992_1'] = '5';
$omezeni['2997_1'] = '1';
$omezeni['3410_1'] = 'X';
$omezeni['3411_1'] = 'X';
$omezeni['3418_1'] = 'X';
$omezeni['3419_1'] = 'X';

$trasa['2834_1'] = array('Český Těšín;7:15', 'Ostrava-Svinov;8:05');
$trasa['2839_1'] = array('Ostrava-Svinov;6:51', 'Český Těšín;7:39');
$trasa['3410_1'] = array('Český Těšín;7:45', 'Opava východ;9:18');
$trasa['3411_1'] = array('Opava východ;9:27', 'Český Těšín;11:07');
$trasa['3418_1'] = array('Český Těšín;11:45', 'Opava východ;13:18');
$trasa['3419_1'] = array('Opava východ;13:27', 'Český Těšín;15:09');

@$ts444 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '1.7.2015', '31.8.2015 23:59:59')); 

unset($obeh); 
unset($trasa); 
unset($omezeni);

?>