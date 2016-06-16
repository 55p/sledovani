<?php 
$zacatekPlatnosti = '12.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5931_1', '5902_1', '5953_1', '5952_1', '5905_1', '5910_1', '5911_1', '5916_1', '5963_1', '5940_1', '5903_1', '5906_1', '5909_1', '5916_2', '5913_1', '5918_1', '5941_1');

$omezeni['5902_1'] = 'X';
$omezeni['5903_1'] = 'T';
$omezeni['5905_1'] = 'X';
$omezeni['5906_1'] = 'T';
$omezeni['5909_1'] = 'T';
$omezeni['5910_1'] = 'X';
$omezeni['5911_1'] = 'X';
$omezeni['5913_1'] = '6';
$omezeni['5916_1'] = 'X';
$omezeni['5916_2'] = 'T';
$omezeni['5918_1'] = '6';
$omezeni['5931_1'] = 'X';
$omezeni['5940_1'] = 'T';
$omezeni['5941_1'] = '6';
$omezeni['5952_1'] = 'X';
$omezeni['5953_1'] = 'X';
$omezeni['5963_1'] = 'zX';


$trasa['5902_1'] = array('Havlíčkův Brod;4:59', 'Kolín;6:20');
$trasa['5903_1'] = array('Kolín;6:06', 'Havlíčkův Brod;7:29');
$trasa['5905_1'] = array('Kolín;10:07', 'Havlíčkův Brod;11:37');
$trasa['5906_1'] = array('Havlíčkův Brod;8:54', 'Kolín;10:17');
$trasa['5909_1'] = array('Kolín;13:42', 'Havlíčkův Brod;15:05');
$trasa['5910_1'] = array('Havlíčkův Brod;13:16', 'Kolín;14:38');
$trasa['5911_1'] = array('Kolín;15:07', 'Havlíčkův Brod;16:32');
$trasa['5913_1'] = array('Kolín;16:21', 'Havlíčkův Brod;17:43');
$trasa['5916_1'] = array('Havlíčkův Brod;17:15', 'Kolín;18:36');
$trasa['5916_2'] = array('Havlíčkův Brod;17:15', 'Kolín;18:36');
$trasa['5918_1'] = array('Havlíčkův Brod;19:23', 'Kolín;20:48');
$trasa['5931_1'] = array('Čáslav;3:37', 'Havlíčkův Brod;4:37');
$trasa['5940_1'] = array('Světlá nad Sázavou;4:15', 'Kolín;5:19');
$trasa['5941_1'] = array('Kolín;21:49', 'Světlá nad Sázavou;22:52');
$trasa['5952_1'] = array('Čáslav;8:10', 'Kolín;8:31');
$trasa['5953_1'] = array('Kolín;7:06', 'Čáslav;7:27');
$trasa['5963_1'] = array('Kolín;19:37', 'Čáslav;19:58');


@$ts306 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>