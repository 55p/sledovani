<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['5931_1', '5902_1', '5953_1', '5952_1', '5909_1', '5914_1', '5904_1', '5905_1', '5910_1', '5959_1', '5958_1', '5915_1', '5913_1', '5918_1', '5941_1'];
$obeh[2] = ['5904_2', '5879_1', '5904_3', '5905_2', '5910_2', '5911_1', '5959_2', '5958_2', '5915_2', '5940_1', '5903_1', '5906_1', '5909_2', '5916_1', '5963_1'];

$omezeni['5879_1'] = 'X';
$omezeni['5902_1'] = 'X';
$omezeni['5903_1'] = 'T';
$omezeni['5904_1'] = 'T';
$omezeni['5904_2'] = 'X';
$omezeni['5904_3'] = '6';
$omezeni['5905_1'] = 'T';
$omezeni['5905_2'] = 'X6';
$omezeni['5906_1'] = 'T';
$omezeni['5909_1'] = 'X';
$omezeni['5909_2'] = 'T';
$omezeni['5910_1'] = 'T';
$omezeni['5910_2'] = 'X6';
$omezeni['5911_1'] = 'X';
$omezeni['5913_1'] = '6';
$omezeni['5914_1'] = 'X';
$omezeni['5915_1'] = 'XT';
$omezeni['5915_2'] = '6';
$omezeni['5916_1'] = 'XT';
$omezeni['5918_1'] = '6';
$omezeni['5931_1'] = 'X';
$omezeni['5940_1'] = 'T';
$omezeni['5941_1'] = '6';
$omezeni['5952_1'] = 'X';
$omezeni['5953_1'] = 'X';
$omezeni['5958_1'] = 'T';
$omezeni['5958_2'] = '6';
$omezeni['5959_1'] = 'T';
$omezeni['5959_2'] = '6';
$omezeni['5963_1'] = 'zX';


$poznamkaObehu['5879_1'] = ['pk', 'postrk'];

$trasa['5879_1'] = ['Nymburk hl.n.;8:01', 'Kolín;8:28'];
$trasa['5902_1'] = ['Havlíčkův Brod;4:53', 'Kolín;6:16'];
$trasa['5903_1'] = ['Kolín;6:05', 'Havlíčkův Brod;7:29'];
$trasa['5904_1'] = ['Žďár nad Sázavou;5:17', 'Kolín;7:16'];
$trasa['5904_2'] = ['Žďár nad Sázavou;5:17', 'Nymburk hl.n.;7:56'];
$trasa['5904_3'] = ['Žďár nad Sázavou;5:17', 'Kolín;7:16'];
$trasa['5905_1'] = ['Kolín;10:05', 'Havlíčkův Brod;11:34'];
$trasa['5905_2'] = ['Kolín;10:05', 'Havlíčkův Brod;11:34'];
$trasa['5906_1'] = ['Havlíčkův Brod;8:51', 'Kolín;10:14'];
$trasa['5909_1'] = ['Kolín;13:42', 'Havlíčkův Brod;15:05'];
$trasa['5909_2'] = ['Kolín;13:42', 'Havlíčkův Brod;15:05'];
$trasa['5910_1'] = ['Havlíčkův Brod;13:16', 'Kolín;14:38'];
$trasa['5910_2'] = ['Havlíčkův Brod;13:16', 'Kolín;14:38'];
$trasa['5911_1'] = ['Kolín;15:05', 'Havlíčkův Brod;16:27'];
$trasa['5913_1'] = ['Kolín;16:21', 'Havlíčkův Brod;17:43'];
$trasa['5914_1'] = ['Havlíčkův Brod;15:19', 'Kolín;16:40'];
$trasa['5915_1'] = ['Kolín;18:21', 'Žďár nad Sázavou;20:45'];
$trasa['5915_2'] = ['Kolín;18:21', 'Žďár nad Sázavou;20:45'];
$trasa['5916_1'] = ['Havlíčkův Brod;17:15', 'Kolín;18:36'];
$trasa['5918_1'] = ['Havlíčkův Brod;19:19', 'Kolín;20:47'];
$trasa['5931_1'] = ['Čáslav;3:37', 'Havlíčkův Brod;4:37'];
$trasa['5940_1'] = ['Světlá nad Sázavou;4:14', 'Kolín;5:16'];
$trasa['5941_1'] = ['Kolín;21:54', 'Světlá nad Sázavou;22:57'];
$trasa['5952_1'] = ['Čáslav;8:10', 'Kolín;8:31'];
$trasa['5953_1'] = ['Kolín;7:05', 'Čáslav;7:26'];
$trasa['5958_1'] = ['Čáslav;15:58', 'Kolín;16:19'];
$trasa['5958_2'] = ['Čáslav;15:58', 'Kolín;16:19'];
$trasa['5959_1'] = ['Kolín;15:15', 'Čáslav;15:36'];
$trasa['5959_2'] = ['Kolín;15:15', 'Čáslav;15:36'];
$trasa['5963_1'] = ['Kolín;19:37', 'Čáslav;19:58'];

@$ts306 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


