<?php
$obeh[1] = array('2993_1', '2960_1', '3360_1', '3361_1', '3364_1', '3365_1', '2941_1', '2994_1');
$obeh[2] = array('2991_1', '2970_1', '2973_1', '2972_1', '2999_1', '2990_1', '2975_1', '2974_1', '2992_1');

$omezeni['2941_1'] = 'X';
$omezeni['2960_1'] = 'X';
$omezeni['2970_1'] = 'X';
$omezeni['2972_1'] = 'X';
$omezeni['2973_1'] = 'X';
$omezeni['2974_1'] = 'X';
$omezeni['2975_1'] = 'X';
$omezeni['2990_1'] = 'X';
$omezeni['2991_1'] = 'X1';
$omezeni['2992_1'] = 'X5';
$omezeni['2993_1'] = 'X1';
$omezeni['2994_1'] = 'X5';
$omezeni['2999_1'] = 'X';
$omezeni['3360_1'] = 'X';
$omezeni['3361_1'] = 'X';
$omezeni['3364_1'] = 'X';
$omezeni['3365_1'] = 'X';

$trasa['2941_1'] = array('Bohumín;14:15', 'Návsí;15:17');
$trasa['2960_1'] = array('Český Těšín;5:51', 'Bohumín;6:29');
$trasa['2970_1'] = array('Návsí;5:09', 'Český Těšín;5:35');
$trasa['2972_1'] = array('Návsí;6:45', 'Český Těšín;7:11');
$trasa['2973_1'] = array('Český Těšín;5:51', 'Návsí;6:16');
$trasa['2974_1'] = array('Návsí;14:45', 'Český Těšín;15:11');
$trasa['2975_1'] = array('Český Těšín;14:14', 'Návsí;14:39');
$trasa['3360_1'] = array('Bohumín;7:21', 'Studénka;7:52');
$trasa['3361_1'] = array('Studénka;9:03', 'Bohumín;9:35');
$trasa['3364_1'] = array('Bohumín;11:21', 'Studénka;11:52');
$trasa['3365_1'] = array('Studénka;13:00', 'Bohumín;13:38');

$trasa['2990_1'] = array('Třinec;13:33', 'Český Těšín;13:40');
$trasa['2991_1'] = array('Bohumín;4:16', 'Návsí;4:57');
$trasa['2992_1'] = array('Český Těšín;15:16', 'Bohumín;15:47');
$trasa['2993_1'] = array('Bohumín;5:01', 'Český Těšín;5:35');
$trasa['2994_1'] = array('Návsí;15:40', 'Bohumín;16:30');
$trasa['2999_1'] = array('Český Těšín;7:35', 'Třinec;7:41');


@$ts444 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null,  '30.6.2015 23:59:59'))
 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '1.9.2015')); 

unset($obeh); 
unset($trasa); 
unset($omezeni);

?>