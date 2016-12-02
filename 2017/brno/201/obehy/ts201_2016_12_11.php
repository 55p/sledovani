<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['4600_1', '4905_1', '4910_1', '4911_1', '4916_1', '4920_1', '4923_1', '4922_1', '4931_1', '4930_1', '4623_1', '4604_1', '4915_1', '4938_1', '4618_1', '4615_1', '4602_1', '4605_1', '4632_1'];
$obeh[2] = ['4681_1', '4682_1', '4603_1', '4620_1', '4933_1', '4627_1', '4644_1', '4617_1', '4934_1', '4629_1', '4632_2', '4939_1', '4612_1', '4613_1', '4622_1', '4623_2', '4630_1', '4637_1'];

$omezeni['4600_1'] = 'X1234';
$omezeni['4602_1'] = 'N';
$omezeni['4603_1'] = 'X';
$omezeni['4604_1'] = 'X5';
$omezeni['4605_1'] = 'N';
$omezeni['4612_1'] = '6';
$omezeni['4613_1'] = '6';
$omezeni['4615_1'] = 'N';
$omezeni['4617_1'] = 'X1234';
$omezeni['4618_1'] = 'N';
$omezeni['4620_1'] = 'X';
$omezeni['4622_1'] = '6';
$omezeni['4623_1'] = 'X5';
$omezeni['4623_2'] = '6';
$omezeni['4627_1'] = 'X5';
$omezeni['4629_1'] = 'X1234';
$omezeni['4630_1'] = '6';
$omezeni['4632_1'] = 'N';
$omezeni['4632_2'] = 'X1234';
$omezeni['4637_1'] = '6';
$omezeni['4644_1'] = 'X5';
$omezeni['4681_1'] = 'X2345';
$omezeni['4682_1'] = 'X';
$omezeni['4905_1'] = 'X1234';
$omezeni['4910_1'] = 'X1234';
$omezeni['4911_1'] = 'X1234';
$omezeni['4915_1'] = 'X5';
$omezeni['4916_1'] = 'X1234';
$omezeni['4920_1'] = 'X5';
$omezeni['4922_1'] = 'X5';
$omezeni['4923_1'] = 'X5';
$omezeni['4930_1'] = 'X5';
$omezeni['4931_1'] = 'X5';
$omezeni['4933_1'] = 'X5';
$omezeni['4934_1'] = 'X1234';
$omezeni['4938_1'] = 'X5';
$omezeni['4939_1'] = 'X1234';






if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts201 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


