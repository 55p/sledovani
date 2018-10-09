<?php 
$zacatekPlatnosti = '28.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['776_1', '767_1', '764_1', '779_1'];
$obeh[2] = ['1960_1', '7545_1', '770_1', '775_1'];


$trasa['764_1'] = ['Klatovy;16:51','Železná Ruda-Alžbětín;17:55'];
$trasa['767_1'] = ['Železná Ruda-Alžbětín;12:06','Klatovy;13:10'];
$trasa['770_1'] = ['Klatovy;12:51','Železná Ruda-Alžbětín;13:55'];
$trasa['775_1'] = ['Železná Ruda-Alžbětín;16:08','Klatovy;17:10'];
$trasa['776_1'] = ['Klatovy;8:51','Železná Ruda-Alžbětín;9:55'];
$trasa['779_1'] = ['Železná Ruda-Alžbětín;18:08','Klatovy;19:10'];
$trasa['1960_1'] = ['Klatovy;6:46','Železná Ruda-Alžbětín;7:52'];
$trasa['7545_1'] = ['Železná Ruda-Alžbětín;8:06','Klatovy;9:10'];
//sem patri stazene trasy






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts718 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


