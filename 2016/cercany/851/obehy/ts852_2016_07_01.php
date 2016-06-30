<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9263_1', '9200_1', '9203_1', '9202_1', '9211_1', '9270_1');

$omezeni['9200_1'] = '25';
$omezeni['9211_1'] = 'X';
$omezeni['9263_1'] = '25';
$omezeni['9270_1'] = 'X';

$trasa['9200_1'] = array('Havlíčkův Brod;7:49','Světlá nad Sázavou;8:07');
$trasa['9202_1'] = array('Havlíčkův Brod;9:48','Světlá nad Sázavou;10:07');
$trasa['9203_1'] = array('Světlá nad Sázavou;8:13','Havlíčkův Brod;8:33');
$trasa['9211_1'] = array('Světlá nad Sázavou;16:53','Havlíčkův Brod;17:15');
$trasa['9263_1'] = array('Světlá nad Sázavou;6:17','Havlíčkův Brod;6:36');
$trasa['9270_1'] = array('Havlíčkův Brod;18:20','Světlá nad Sázavou;18:38');






@$ts852 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>