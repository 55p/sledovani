<?php
$obeh[1] = array('4531_1', '4502_1', '4509_1', '4510_1', '4517_1', '4520_1', '4527_1', '4526_1');
$obeh[2] = array('4507_1', '4512_1', '4519_1', '4522_1');
$obeh[3] = array('4503_1', '4530_1', '4506_1', '4511_1', '4514_1', '4521_1', '4534_1', '4419_1');
$obeh[4] = array('1921_1', '1922_1', '4418_1');

$omezeni['1921_1'] = 'X';
$omezeni['1922_1'] = 'X';
$omezeni['4418_1'] = 'T';
$omezeni['4419_1'] = 'X5';
$omezeni['4502_1'] = 'X, 6';
$omezeni['4503_1'] = 'X';
$omezeni['4506_1'] = 'X';
$omezeni['4507_1'] = 'X';
$omezeni['4509_1'] = 'X';
$omezeni['4510_1'] = 'X';
$omezeni['4511_1'] = 'X';
$omezeni['4512_1'] = 'X';
$omezeni['4514_1'] = 'X';
$omezeni['4517_1'] = 'X';
$omezeni['4519_1'] = 'X';
$omezeni['4520_1'] = 'X';
$omezeni['4521_1'] = 'X, T';
$omezeni['4522_1'] = 'X';
$omezeni['4526_1'] = 'X';
$omezeni['4527_1'] = 'X';
$omezeni['4530_1'] = 'X';
$omezeni['4531_1'] = 'X, 6';
$omezeni['4534_1'] = 'X, T';

$trasa['1921_1'] = array('Hrušovany nad Jevišovkou;6:10', 'Brno hl.n.;7:29');
$trasa['1922_1'] = array('Brno hl.n.;15:30', 'Hrušovany nad Jevišovkou;16:55');
$trasa['4418_1'] = array('Brno hl.n.;20:54', 'Hrušovany nad Jevišovkou;22:14');
$trasa['4419_1'] = array('Hrušovany nad Jevišovkou;20:40', 'Brno hl.n.;22:04');
$trasa['4502_1'] = array('Břeclav;5:54', 'Znojmo;7:22');
$trasa['4503_1'] = array('Znojmo;4:58', 'Břeclav;6:27');
$trasa['4506_1'] = array('Mikulov na Moravě;8:00', 'Znojmo;8:53');
$trasa['4507_1'] = array('Znojmo;6:58', 'Břeclav;8:29');
$trasa['4509_1'] = array('Znojmo;9:03', 'Břeclav;10:27');
$trasa['4510_1'] = array('Břeclav;11:31', 'Znojmo;12:53');
$trasa['4511_1'] = array('Znojmo;11:03', 'Břeclav;12:29');
$trasa['4512_1'] = array('Břeclav;12:33', 'Znojmo;13:53');
$trasa['4514_1'] = array('Břeclav;13:31', 'Znojmo;14:53');
$trasa['4517_1'] = array('Znojmo;13:55', 'Břeclav;15:26');
$trasa['4519_1'] = array('Znojmo;14:55', 'Břeclav;16:29');
$trasa['4520_1'] = array('Břeclav;16:33', 'Znojmo;17:53');
$trasa['4521_1'] = array('Znojmo;15:55', 'Břeclav;17:26');
$trasa['4522_1'] = array('Břeclav;17:31', 'Znojmo;18:53');
$trasa['4526_1'] = array('Břeclav;21:37', 'Znojmo;22:53');
$trasa['4527_1'] = array('Znojmo;19:03', 'Břeclav;20:28');
$trasa['4530_1'] = array('Břeclav;6:53', 'Mikulov na Moravě;7:25');
$trasa['4531_1'] = array('Hrušovany nad Jevišovkou;4:34', 'Břeclav;5:26');
$trasa['4534_1'] = array('Břeclav;18:33', 'Hrušovany nad Jevišovkou;19:24');


@$ts843 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, null, '31.7.2015 23:59:59')); 

unset($obeh); 
unset($trasa); 
unset($omezeni);

?>