<?php 
$zacatekPlatnosti = '1.7.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('709263_1', '709200_1', '709203_1', '709202_1', '709211_1', '709270_1');

$omezeni['709200_1'] = '25';
$omezeni['709211_1'] = 'X';
$omezeni['709263_1'] = '25';
$omezeni['709270_1'] = 'X';

$trasa['709200_1'] = array('Havlíčkův Brod;7:49','Světlá nad Sázavou;8:07');
$trasa['709202_1'] = array('Havlíčkův Brod;9:48','Světlá nad Sázavou;10:07');
$trasa['709203_1'] = array('Světlá nad Sázavou;8:13','Havlíčkův Brod;8:33');
$trasa['709211_1'] = array('Světlá nad Sázavou;16:53','Havlíčkův Brod;17:15');
$trasa['709263_1'] = array('Světlá nad Sázavou;6:17','Havlíčkův Brod;6:36');
$trasa['709270_1'] = array('Havlíčkův Brod;18:20','Světlá nad Sázavou;18:38');


unset($poznamkaObehu['709202_1']);
unset($poznamkaObehu['709211_1']);



@$ts852 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>