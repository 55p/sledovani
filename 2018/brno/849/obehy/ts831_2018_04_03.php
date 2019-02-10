<?php 
$zacatekPlatnosti = '3.4.2018';
$konecPlatnosti = '2.10.2018';

$obeh[1] = ['24800_1', '24801_1', '4507_1', '104506_1'];

$omezeni['4507_1'] = 'X';
$omezeni['24800_1'] = 'X';
$omezeni['24801_1'] = 'X';
$omezeni['104506_1'] = 'X';

$trasa['4507_1'] = ['Znojmo;6:58','Novosedly;7:40'];
$trasa['104506_1'] = ['Novosedly;8:13','Znojmo;8:53'];
$trasa['24800_1'] = ['Znojmo;4:24', 'Moravské Budějovice;5:15'];
$trasa['24801_1'] = ['Moravské Budějovice;5:43', 'Znojmo;6:30'];
//sem patri stazene trasy


$poznamkaObehu['104506_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts831 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


