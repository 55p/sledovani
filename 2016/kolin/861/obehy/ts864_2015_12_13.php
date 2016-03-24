<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array(22290,'22201_1', '5901_1', '5930_1', '5935_1', '5908_1', '22203_1', '5955_1', '5956_1', '22210_1', '22211_1', '22214_1', '22215_1', '5876_1');

$omezeni['22290'] = 'X,6';
$omezeni['22201_1'] = 'X,6';
$omezeni['22203_1'] = 'T';
$omezeni['5901_1'] = 'X';
$omezeni['5908_1'] = 'X';
$omezeni['5930_1'] = 'X';
$omezeni['5935_1'] = 'X';
$omezeni['5955_1'] = '6,T';
$omezeni['5956_1'] = '6,T';

$trasa['22290'] = array('Ledečko;3:36','Sázava-Černé Budy;3:42');
$trasa['22201_1'] = array('Sázava-Černé Budy;3:50', 'Kolín;5:07');
$trasa['22203_1'] = array('Ledečko;6:16', 'Kolín;7:25');
$trasa['22210_1'] = array('Kolín;14:45', 'Ledečko;15:51');
$trasa['22211_1'] = array('Ledečko;16:03', 'Kolín;17:19');
$trasa['22214_1'] = array('Kolín;18:45', 'Ledečko;19:51');
$trasa['22215_1'] = array('Ledečko;20:11', 'Kolín;21:20');
$trasa['5876_1'] = array('Kolín;22:35', 'Nymburk hl.n.;23:02');
$trasa['5901_1'] = array('Kolín;5:13', 'Havlíčkův Brod;6:44');
$trasa['5908_1'] = array('Havlíčkův Brod;10:55', 'Kolín;12:20');
$trasa['5930_1'] = array('Havlíčkův Brod;6:49', 'Čáslav;7:57');
$trasa['5935_1'] = array('Čáslav;8:38', 'Havlíčkův Brod;9:41');
$trasa['5955_1'] = array('Kolín;7:50', 'Čáslav;8:13');
$trasa['5956_1'] = array('Čáslav;12:03', 'Kolín;12:26');


@$ts864 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>