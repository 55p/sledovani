<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4920_1', '4600_1', '4618_1', '4931_1', '4926_1', '4905_1', '4615_1', '4939_1', '4910_1', '4934_1', '4623_1', '4602_1', '4605_1', '4911_1', '4604_1', '4916_1', '4632_1', '4915_1', '4948_1');
$obeh[2] = array('4950_1', '4950_2', '4612_1', '4613_1', '4603_1', '4620_1', '4622_1', '4623_2', '4941_1', '4936_1', '4617_1', '4938_1', '4627_1', '4629_1', '4630_1', '4644_1', '4637_1', '4665_1', '4632_2', '4949_1');

$omezeni['4600_1'] = 'X1234';
$omezeni['4602_1'] = 'T';
$omezeni['4603_1'] = 'X';
$omezeni['4604_1'] = 'X5';
$omezeni['4605_1'] = 'T';
$omezeni['4612_1'] = '6';
$omezeni['4613_1'] = '6';
$omezeni['4615_1'] = 'T';
$omezeni['4617_1'] = 'X1234';
$omezeni['4618_1'] = 'T';
$omezeni['4620_1'] = 'X';
$omezeni['4622_1'] = '6';
$omezeni['4623_1'] = 'X5';
$omezeni['4623_2'] = '6';
$omezeni['4627_1'] = 'X5';
$omezeni['4629_1'] = 'X1234';
$omezeni['4630_1'] = '6';
$omezeni['4632_1'] = 'T';
$omezeni['4632_2'] = 'X1234';
$omezeni['4637_1'] = '6';
$omezeni['4644_1'] = 'X5';
$omezeni['4665_1'] = '6';
$omezeni['4905_1'] = 'X1234';
$omezeni['4910_1'] = 'X1234';
$omezeni['4911_1'] = 'X1234';
$omezeni['4915_1'] = 'X5';
$omezeni['4916_1'] = 'X1234';
$omezeni['4920_1'] = 'X5';
$omezeni['4926_1'] = 'X5';
$omezeni['4931_1'] = 'X5';
$omezeni['4934_1'] = 'X5';
$omezeni['4936_1'] = 'X5';
$omezeni['4938_1'] = 'X1234';
$omezeni['4939_1'] = 'X5';
$omezeni['4941_1'] = 'X5';
$omezeni['4948_1'] = 'X5';
$omezeni['4949_1'] = 'X1234';
$omezeni['4950_1'] = 'X1';
$omezeni['4950_2'] = 'X';

$trasa['4600_1'] = array('Vranovice;5:20', 'Žďár nad Sázavou;7:26');
$trasa['4602_1'] = array('Břeclav;13:38', 'Tišnov;15:30');
$trasa['4603_1'] = array('Žďár nad Sázavou;5:34', 'Břeclav;8:21');
$trasa['4604_1'] = array('Vranovice;16:16', 'Křižanov;18:01');
$trasa['4605_1'] = array('Tišnov;16:30', 'Břeclav;18:17');
$trasa['4612_1'] = array('Brno hl.n.;6:52', 'Tišnov;7:30');
$trasa['4613_1'] = array('Tišnov;8:30', 'Břeclav;10:21');
$trasa['4615_1'] = array('Tišnov;10:30', 'Břeclav;12:21');
$trasa['4617_1'] = array('Tišnov;12:30', 'Šakvice;13:54');
$trasa['4618_1'] = array('Břeclav;7:43', 'Tišnov;9:30');
$trasa['4620_1'] = array('Břeclav;9:38', 'Tišnov;11:30');
$trasa['4622_1'] = array('Břeclav;11:38', 'Tišnov;13:30');
$trasa['4623_1'] = array('Tišnov;14:30', 'Vranovice;15:43');
$trasa['4623_2'] = array('Tišnov;14:30', 'Břeclav;16:17');
$trasa['4627_1'] = array('Tišnov;16:00', 'Břeclav;17:43');
$trasa['4629_1'] = array('Tišnov;17:00', 'Břeclav;18:43');
$trasa['4630_1'] = array('Břeclav;17:42', 'Tišnov;19:30');
$trasa['4632_1'] = array('Břeclav;19:38', 'Tišnov;21:30');
$trasa['4632_2'] = array('Břeclav;19:38', 'Tišnov;21:30');
$trasa['4637_1'] = array('Tišnov;20:30', 'Šakvice;21:54');
$trasa['4644_1'] = array('Břeclav;18:15', 'Brno hl.n.;19:19');
$trasa['4665_1'] = array('Šakvice;21:59', 'Břeclav;22:24');
$trasa['4905_1'] = array('Žďár nad Sázavou;8:34', 'Vranovice;10:44');
$trasa['4910_1'] = array('Vranovice;11:16', 'Žďár nad Sázavou;13:26');
$trasa['4911_1'] = array('Žďár nad Sázavou;14:34', 'Vranovice;16:44');
$trasa['4915_1'] = array('Křižanov;19:00', 'Vranovice;20:44');
$trasa['4916_1'] = array('Vranovice;17:16', 'Křižanov;19:01');
$trasa['4920_1'] = array('Vranovice;4:50', 'Tišnov;6:00');
$trasa['4926_1'] = array('Modřice;8:57', 'Tišnov;10:00');
$trasa['4931_1'] = array('Tišnov;7:00', 'Modřice;7:47');
$trasa['4934_1'] = array('Vranovice;12:50', 'Tišnov;14:00');
$trasa['4936_1'] = array('Vranovice;13:50', 'Tišnov;15:00');
$trasa['4938_1'] = array('Šakvice;14:38', 'Tišnov;16:00');
$trasa['4939_1'] = array('Tišnov;11:00', 'Vranovice;12:09');
$trasa['4941_1'] = array('Tišnov;12:00', 'Vranovice;13:09');
$trasa['4948_1'] = array('Vranovice;22:20', 'Tišnov;23:38');
$trasa['4949_1'] = array('Tišnov;22:30', 'Vranovice;23:40');
$trasa['4950_1'] = array('Tišnov;4:17', 'Žďár nad Sázavou;5:12');
$trasa['4950_2'] = array('Tišnov;4:17', 'Žďár nad Sázavou;5:12');




@$ts201 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>