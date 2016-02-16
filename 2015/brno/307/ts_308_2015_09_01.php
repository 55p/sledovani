<?php 
$zacatekPlatnosti = '1.9.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('11480_1', '5940_1', '11481_1', '5903_1', '105904_1', '5808_1', '109483_1', '5905_1', '11486_1', '5910_1', '5911_1', '5916_1', '5963_1', '5959_1', '5958_1', '5915_1');
$obeh[2] = array('5931_1', '5902_1', '5901_1', '5908_1', '5904_1', '105903_1', '5906_1', '5909_1', '5914_1', '5915_2', '5916_2', '5963_2');
$obeh[3] = array('5904_2', '5903_2', '5906_2', '5907_1', '11488_1', '5912_1', '5913_1', '5918_1', '5941_1');

$omezeni['105903_1'] = '25';
$omezeni['109483_1'] = 'X';
$omezeni['11481_1'] = 'X';
$omezeni['11488_1'] = 'X';
$omezeni['5808_1'] = 'X';
$omezeni['5901_1'] = 'X';
$omezeni['5902_1'] = 'X';
$omezeni['5903_1'] = '25';
$omezeni['5903_2'] = 'X';
$omezeni['5904_1'] = '25';
$omezeni['5904_2'] = 'X';
$omezeni['5906_1'] = '25';
$omezeni['5906_2'] = 'X';
$omezeni['5907_1'] = 'X';
$omezeni['5908_1'] = 'X';
$omezeni['5911_1'] = 'X';
$omezeni['5912_1'] = 'X';
$omezeni['5914_1'] = 'X';
$omezeni['5915_1'] = '25';
$omezeni['5915_2'] = 'X';
$omezeni['5916_1'] = 'X';
$omezeni['5916_2'] = '25';
$omezeni['5931_1'] = 'X';
$omezeni['5958_1'] = '25';
$omezeni['5959_1'] = '25';
$omezeni['5963_1'] = 'X1,X2,X3,X4';
$omezeni['5963_2'] = 'T';

$trasa['11480_1'] = array('Světlá nad Sázavou;4:14', 'Čáslav;4:58');
$trasa['11481_1'] = array('Kolín;5:50', 'Golčův Jeníkov;6:21');
$trasa['11486_1'] = array('Havlíčkův Brod;13:11', 'Golčův Jeníkov;14:04');
$trasa['11488_1'] = array('Havlíčkův Brod;14:28', 'Golčův Jeníkov;15:21');
$trasa['5808_1'] = array('Kolín;7:29', 'Nymburk hl.n.;7:56');
$trasa['5901_1'] = array('Vlkaneč;6:02', 'Havlíčkův Brod;6:43');
$trasa['5902_1'] = array('Havlíčkův Brod;5:01', 'Vlkaneč;5:40');
$trasa['5903_1'] = array('Kolín;6:05', 'Golčův Jeníkov;6:37');
$trasa['105903'] = array('Vlkaneč;6:48', 'Havlíčkův Brod;7:34');
$trasa['5903_2'] = array('Vlkaneč;6:48', 'Havlíčkův Brod;7:34');
$trasa['5904_1'] = array('Žďár nad Sázavou;5:17', 'Vlkaneč;6:40');
$trasa['105904'] = array('Golčův Jeníkov;6:51', 'Kolín;7:23');
$trasa['5904_2'] = array('Žďár nad Sázavou;5:17', 'Vlkaneč;6:40');
$trasa['5905_1'] = array('Kolín;10:05', 'Havlíčkův Brod;11:32');
$trasa['5906_1'] = array('Havlíčkův Brod;8:54', 'Kolín;10:19');
$trasa['5906_2'] = array('Havlíčkův Brod;8:54', 'Kolín;10:19');
$trasa['5907_1'] = array('Kolín;11:42', 'Havlíčkův Brod;13:07');
$trasa['5908_1'] = array('Havlíčkův Brod;10:55', 'Kolín;12:22');
$trasa['5909_1'] = array('Kolín;13:42', 'Havlíčkův Brod;15:06');
$trasa['5910_1'] = array('Golčův Jeníkov;14:06', 'Kolín;14:38');
$trasa['5911_1'] = array('Kolín;15:08', 'Havlíčkův Brod;16:35');
$trasa['5912_1'] = array('Golčův Jeníkov;15:23', 'Kolín;15:55');
$trasa['5913_1'] = array('Kolín;16:21', 'Havlíčkův Brod;17:45');
$trasa['5914_1'] = array('Havlíčkův Brod;15:20', 'Kolín;16:42');
$trasa['5915_1'] = array('Kolín;18:21', 'Žďár nad Sázavou;20:47');
$trasa['5915_2'] = array('Kolín;18:21', 'Žďár nad Sázavou;20:47');
$trasa['5916_1'] = array('Havlíčkův Brod;17:15', 'Kolín;18:38');
$trasa['5916_2'] = array('Havlíčkův Brod;17:15', 'Kolín;18:38');
$trasa['5918_1'] = array('Havlíčkův Brod;19:23', 'Kolín;20:50');
$trasa['5931_1'] = array('Čáslav;3:37', 'Havlíčkův Brod;4:38');
$trasa['5940_1'] = array('Čáslav;5:08', 'Kolín;5:23');
$trasa['5941_1'] = array('Kolín;21:49', 'Světlá nad Sázavou;22:55');
$trasa['5958_1'] = array('Čáslav;15:58', 'Kolín;16:19');
$trasa['5959_1'] = array('Kolín;15:15', 'Čáslav;15:37');
$trasa['5963_1'] = array('Kolín;19:38', 'Čáslav;19:59');
$trasa['5963_2'] = array('Kolín;19:38', 'Čáslav;19:59');
$trasa['109483'] = array('Nymburk hl.n.;8:01', 'Kolín;8:28');

$poznamkaObehu['109483_1'] = array('pk', 'postrk');

@$ts308 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>