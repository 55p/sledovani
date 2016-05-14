<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7716_1', '27705_1', '27706_1', '27708_1', '7724_1', '27709_1', '27711_1', '27712_1', '27713_1', '27714_1', 27715, '27716_1', '27717_1', '27718_1', '27719_1', '27720_1');
$obeh[2] = array('27701_1', '27700_1', '27703_1', '27702_1', '27704_1', '127705_1', '127706_1', '7719_1', '127708_1', '127709_1', '27707_1', '127710_1', '127711_1', '127712_1', '127713_1', '127714_1', '127715_1', '127716_1', '7734_1');

$omezeni['127706_1'] = '6,T';
$omezeni['127708_1'] = 'X5';
$omezeni['127709_1'] = 'X5';
$omezeni['127710_1'] = '6,T';
$omezeni['127711_1'] = '6,T';
$omezeni['127712_1'] = 'X5,25';
$omezeni['127713_1'] = 'X5,25';
$omezeni['127714_1'] = 'X5,25';
$omezeni['127715_1'] = 'X5,25';
$omezeni['127716_1'] = 'z25';
$omezeni['27700_1'] = 'X';
$omezeni['27701_1'] = 'X';
$omezeni['27702_1'] = 'X';
$omezeni['27704_1'] = '6,T';
$omezeni['27705_1'] = '6,7';
$omezeni['27706_1'] = '6,7';

$omezeni['27707_1'] = '25';
$omezeni['27708_1'] = 'X1234';
$omezeni['27709_1'] = 'X1234';
$omezeni['27711_1'] = '25';
$omezeni['27719_1'] = 'X';
$omezeni['27720_1'] = 'X';
$omezeni['7716_1'] = 'X1234';
$omezeni['7719_1'] = 'X1234';
$omezeni['7724_1'] = 'X5';
$omezeni['7734_1'] = 'T';


$poznamkaObehu['7724_1'] = array('pk', 'postrk');
$poznamkaObehu['7734_1'] = array('pk', 'postrk');

$trasa['27700'] = array('Zadní Třebaň;4:59', 'Lochovice;5:44');
$trasa['27701'] = array('Lochovice;4:06', 'Zadní Třebaň;4:50');
$trasa['27702'] = array('Zadní Třebaň;7:09', 'Lochovice;7:54');
$trasa['27703'] = array('Lochovice;6:06', 'Zadní Třebaň;6:50');
$trasa['27704'] = array('Zadní Třebaň;7:29', 'Lochovice;8:14');
$trasa['27705'] = array('Lochovice;8:36', 'Zadní Třebaň;9:20');
$trasa['27706'] = array('Zadní Třebaň;9:29', 'Lochovice;10:15');
$trasa['27707'] = array('Lochovice;11:06', 'Zadní Třebaň;11:50');
$trasa['27708'] = array('Zadní Třebaň;10:59', 'Lochovice;11:44');
$trasa['27709'] = array('Lochovice;12:36', 'Zadní Třebaň;13:20');
$trasa['27710'] = array('Zadní Třebaň;11:59', 'Lochovice;12:44');
$trasa['27711'] = array('Lochovice;13:36', 'Zadní Třebaň;14:20');
$trasa['27712'] = array('Zadní Třebaň;14:29', 'Lochovice;15:15');
$trasa['27713'] = array('Lochovice;15:36', 'Zadní Třebaň;16:20');
$trasa['27714'] = array('Zadní Třebaň;16:29', 'Lochovice;17:15');
$trasa['27715'] = array('Lochovice;17:36', 'Zadní Třebaň;18:20');
$trasa['27716'] = array('Zadní Třebaň;18:29', 'Lochovice;19:15');
$trasa['27717'] = array('Lochovice;20:06', 'Zadní Třebaň;20:50');
$trasa['27718'] = array('Zadní Třebaň;20:59', 'Lochovice;21:44');
$trasa['27719'] = array('Lochovice;22:06', 'Zadní Třebaň;22:50');
$trasa['27720'] = array('Zadní Třebaň;22:59', 'Lochovice;23:44');
$trasa['7716'] = array('Rakovník;7:51', 'Beroun;8:47');
$trasa['7719'] = array('Beroun;9:55', 'Rakovník;10:55');
$trasa['7724'] = array('Rakovník;12:34', 'Beroun;13:30');
$trasa['7734'] = array('Rakovník;18:41', 'Beroun;19:36');


@$ts877 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>