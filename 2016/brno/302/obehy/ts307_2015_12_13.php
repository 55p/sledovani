<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('5904_1', '5870_1', '5879_1', '5909_1', '5914_1', '5905_1', '5910_1', '5959_1', '5958_1', '5915_1');

$omezeni['5870_1'] = 'X';
$omezeni['5879_1'] = 'X';
$omezeni['5905_1'] = '25';
$omezeni['5909_1'] = 'X';
$omezeni['5910_1'] = '25';
$omezeni['5914_1'] = 'X';
$omezeni['5958_1'] = '25';
$omezeni['5959_1'] = '25';

$trasa['5870_1'] = array('Kolín;7:29', 'Nymburk hl.n.;7:56');
$trasa['5879_1'] = array('Nymburk hl.n.;8:01', 'Kolín;8:28');
$trasa['5904_1'] = array('Žďár nad Sázavou;5:17', 'Kolín;7:20');
$trasa['5905_1'] = array('Kolín;10:07', 'Havlíčkův Brod;11:37');
$trasa['5909_1'] = array('Kolín;13:42', 'Havlíčkův Brod;15:05');
$trasa['5910_1'] = array('Havlíčkův Brod;13:16', 'Kolín;14:38');
$trasa['5914_1'] = array('Havlíčkův Brod;15:20', 'Kolín;16:41');
$trasa['5915_1'] = array('Kolín;18:21', 'Žďár nad Sázavou;20:47');
$trasa['5958_1'] = array('Čáslav;15:58', 'Kolín;16:19');
$trasa['5959_1'] = array('Kolín;15:15', 'Čáslav;15:36');

$poznamkaObehu['5879_1'] = array('pk', 'postrk');

@$ts307 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>