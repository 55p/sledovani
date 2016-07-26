<?php 
$zacatekPlatnosti = '11.6.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('7502_1', '775_1', '1962_1', '1965_1');
$obeh[2] = array('1960_1', '7547_1', '776_1', '779_1');
$obeh[3] = array('7504_1', '7501_1');
$obeh[4] = array('778_1', '777_1', '1964_1', '7503_1');

$omezeni['1960_1'] = '25';
$omezeni['7547_1'] = '25';

for ($i = 775; $i < 780; $i++) {
  $typ[$i] = 'Rx';
}

$trasa['1960_1'] = array('Klatovy;8:04', 'Železná Ruda-Alžbětín;9:12');
$trasa['1962_1'] = array('Klatovy;12:04', 'Železná Ruda-Alžbětín;13:12');
$trasa['1964_1'] = array('Klatovy;16:04', 'Železná Ruda-Alžbětín;17:12');
$trasa['7502_1'] = array('Klatovy;6:56', 'Železná Ruda-Alžbětín;8:04');
$trasa['7504_1'] = array('Klatovy;9:19', 'Železná Ruda-Alžbětín;10:28');
$trasa['776_1'] = array('Klatovy;14:04', 'Železná Ruda-Alžbětín;15:12');
$trasa['778_1'] = array('Klatovy;10:04', 'Železná Ruda-Alžbětín;11:12');

$trasa['1965_1'] = array('Železná Ruda-Alžbětín;14:45', 'Klatovy;15:54');
$trasa['7501_1'] = array('Železná Ruda-Alžbětín;15:32', 'Klatovy;16:39');
$trasa['7503_1'] = array('Železná Ruda-Alžbětín;17:32', 'Klatovy;18:39');
$trasa['7547_1'] = array('Železná Ruda-Alžbětín;10:45', 'Klatovy;11:53');
$trasa['775_1'] = array('Železná Ruda-Alžbětín;8:45', 'Klatovy;9:53');
$trasa['777_1'] = array('Železná Ruda-Alžbětín;12:45', 'Klatovy;13:53');
$trasa['779_1'] = array('Železná Ruda-Alžbětín;16:45', 'Klatovy;17:53');



@$ts718 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>