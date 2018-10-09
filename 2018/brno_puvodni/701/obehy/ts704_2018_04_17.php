<?php 
$zacatekPlatnosti = '17.4.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4102_1', '99999_1', '4125_1', '4125_2', '11589_1'];

$omezeni['4102_1'] = 'X';
$omezeni['4125_2'] = 'T';
$omezeni['4125_1'] = 'X1234';
$omezeni['11589_1'] = 'T';

$trasa['11589_1'] = ['Kyjov;21:38','Veselí nad Moravou;22:02'];
$trasa['99999_1'] = ['záloha Brno hl.n.;6:00;1900'];
$trasa['4102_1'] = ['Veselí nad Moravou;3:57', 'Brno hl.n.;5:50'];
$trasa['4125_1'] = ['Brno hl.n.;20:15', 'Veselí nad Moravou;22:05'];
$trasa['4125_2'] = ['Brno hl.n.;20:15', 'Kyjov;21:36'];
//sem patri stazene trasy




$typ['11589_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts704 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


