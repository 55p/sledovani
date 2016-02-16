<?php
$obeh[1] = array('4070_1', '4071_1', '4072_1', '21991_1', '4074_1', '4073_1', '4075_1', '4076_1', '4077_1', '4036_1', '4037_1', '4038_1', '4039_1', '4078_1', '4081_1', '4082_1', '4083_1', '4084_1', '21993_1', '21990_1', '4085_1', '4086_1', '4087_1', '4042_1', '4043_1', '21992_1');

$omezeni['21990_1'] = 'X';
$omezeni['21991_1'] = 'T';
$omezeni['21992_1'] = '6';
$omezeni['21993_1'] = 'X';
$omezeni['4036_1'] = '35_2015';
$omezeni['4037_1'] = '35_2015';
$omezeni['4038_1'] = 'X';
$omezeni['4039_1'] = 'X';
$omezeni['4042_1'] = 'X';
$omezeni['4043_1'] = 'X';
$omezeni['4070_1'] = 'X';
$omezeni['4071_1'] = 'X';
$omezeni['4072_1'] = 'X';
$omezeni['4073_1'] = 'X';
$omezeni['4074_1'] = '25';
$omezeni['4075_1'] = '25';
$omezeni['4076_1'] = 'X';
$omezeni['4077_1'] = 'X';
$omezeni['4081_1'] = '35_2015';
$omezeni['4082_1'] = '35_2015';

$trasa['21990_1'] = array('Prostějov;16:15','Nezamyslice;16:36');
$trasa['21991_1'] = array('Brno-Horní Heršpice;5:03','Vyškov na Moravě;5:45');
$trasa['21992_1'] = array('Vyškov na Moravě;19:35','Brno-Horní Heršpice;20:10');
$trasa['21993_1'] = array('Nezamyslice;15:25','Prostějov;15:43');
$trasa['4036_1'] = array('Vyškov na Moravě;9:03', 'Přerov;9:55');
$trasa['4037_1'] = array('Přerov;10:00', 'Vyškov na Moravě;10:50');
$trasa['4038_1'] = array('Vyškov na Moravě;11:03', 'Přerov;11:55');
$trasa['4039_1'] = array('Přerov;12:00', 'Vyškov na Moravě;13:00');
$trasa['4042_1'] = array('Vyškov na Moravě;19:03', 'Přerov;19:55');
$trasa['4043_1'] = array('Přerov;21:00', 'Vyškov na Moravě;21:57');
$trasa['4070_1'] = array('Vyškov na Moravě;4:35', 'Nezamyslice;4:50');
$trasa['4071_1'] = array('Nezamyslice;5:00', 'Vyškov na Moravě;5:15');
$trasa['4072_1'] = array('Vyškov na Moravě;5:20', 'Nezamyslice;5:35');
$trasa['4073_1'] = array('Nezamyslice;5:41', 'Vyškov na Moravě;6:00');
$trasa['4074_1'] = array('Vyškov na Moravě;5:50', 'Nezamyslice;6:05');
$trasa['4075_1'] = array('Nezamyslice;6:14', 'Vyškov na Moravě;6:29');
$trasa['4076_1'] = array('Vyškov na Moravě;6:21', 'Nezamyslice;6:36');
$trasa['4077_1'] = array('Nezamyslice;7:14', 'Vyškov na Moravě;7:29');
$trasa['4078_1'] = array('Vyškov na Moravě;13:03', 'Nezamyslice;13:20');
$trasa['4081_1'] = array('Nezamyslice;13:23', 'Vyškov na Moravě;13:41');
$trasa['4082_1'] = array('Vyškov na Moravě;14:21', 'Nezamyslice;14:37');
$trasa['4083_1'] = array('Nezamyslice;14:41', 'Vyškov na Moravě;15:00');
$trasa['4084_1'] = array('Vyškov na Moravě;15:03', 'Nezamyslice;15:20');
$trasa['4085_1'] = array('Nezamyslice;16:41', 'Vyškov na Moravě;17:00');
$trasa['4086_1'] = array('Vyškov na Moravě;17:03', 'Nezamyslice;17:20');
$trasa['4087_1'] = array('Nezamyslice;18:41', 'Vyškov na Moravě;19:00');

$typ[21990] = $typ[21991] = $typ[21992] = $typ[21993] = 'Sv';

@$ts847 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null, null)); 

unset($obeh); 
unset($trasa); 
unset($omezeni);

?>