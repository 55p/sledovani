<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['7500_1', '7503_1', '7502_1', '7501_1'];

$omezeni['7500_1'] = 'X';
$omezeni['7501_1'] = '25';
$omezeni['7502_1'] = '25';
$omezeni['7503_1'] = 'X';

$trasa['7500_1'] = ['Klatovy;7:19','Železná Ruda-Alžbětín;8:30'];
$trasa['7501_1'] = ['Železná Ruda-Alžbětín;15:30','Klatovy;18:33'];
$trasa['7502_1'] = ['Klatovy;7:50','Železná Ruda-Alžbětín;8:53'];
$trasa['7503_1'] = ['Železná Ruda-Alžbětín;17:27','Klatovy;18:33'];





if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts719 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


