<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = ['27800_1', '27851_1', '27850_1', '27853_1', '7891_1', '127812_1', '27852_1', '27855_1', '127816_1', '27854_1', '27857_1', '27858_1', '27861_1', '27860_1', '27863_1', '27862_1', '27865_1', '27864_1', '27867_1', '27866_1', '27869_1', '27868_1', '27871_1', '27870_1', '27801_1'];
$obeh[2] = ['7891_2', '127812_2', '27890_1', '27815_1', '127818_1', '27885_1', '27832_1', '27891_1', '127835_1', '7892_1', '7894_1'];

$omezeni['127812_1'] = '6';
$omezeni['127812_2'] = '1,0301,1804,0205,0905,-2612,-0201,-1704,-0105,-0805';
$omezeni['127816_1'] = 'T';
$omezeni['127818_1'] = 'X,-2312,-2712,-2812,-2912,-3012,-0302,-1304';
$omezeni['127835_1'] = 'X5,2212,0202,1204,-2312,-3012,-0302';
$omezeni['27800_1'] = 'X';
$omezeni['27815_1'] = 'X,-2312,-2712,-2812,-2912,-3012,-0302,-1304';
$omezeni['27832_1'] = 'X,-2312,-2712,-2812,-2912,-3012,-0302,-1304';
$omezeni['27850_1'] = 'X';
$omezeni['27851_1'] = 'X';
$omezeni['27852_1'] = 'X6';
$omezeni['27853_1'] = 'X';
$omezeni['27855_1'] = 'X6';
$omezeni['27860_1'] = '25';
$omezeni['27862_1'] = 'X';
$omezeni['27863_1'] = '25';
$omezeni['27865_1'] = 'X';
$omezeni['27866_1'] = 'X';
$omezeni['27867_1'] = 'X';
$omezeni['27885_1'] = 'X,-2312,-2712,-2812,-2912,-3012,-0302,-1304';
$omezeni['27890_1'] = 'X2345,-2312,-2712,-2812,-2912,-3012,-0301,-0302,-1304,-1804,-0205,-0905';
$omezeni['27891_1'] = 'X1234,-2212,-2712,-2812,-2912,-0201,-0202,-1204,-1304';
$omezeni['7891_1'] = '6';
$omezeni['7891_2'] = '1,0301,1804,0205,0905,-2612,-0201,-1704,-0105,-0805';
$omezeni['7892_1'] = 'X5,2212,0202,1204,-2312,-3012,-0302';
$omezeni['7894_1'] = '6';

$trasa['127812_1'] = ['Rokycany;5:30','Příkosice;5:52'];
$trasa['127812_2'] = ['Rokycany;5:30','Příkosice;5:52'];
$trasa['127816_1'] = ['Mirošov;6:47','Příkosice;6:56'];
$trasa['127818_1'] = ['Rokycany;7:30','Mirošov;7:43'];
$trasa['127835_1'] = ['Příkosice;16:59','Rokycany;17:21'];
$trasa['27890_1'] = ['Mirošov;6:24','Příkosice;6:31'];
$trasa['7891_1'] = ['Plzeň hl.n.;4:55','Rokycany;5:16'];
$trasa['7891_2'] = ['Plzeň hl.n.;4:55','Rokycany;5:16'];
$trasa['7892_1'] = ['Rokycany;17:30','Plzeň hl.n.;17:55'];
$trasa['7894_1'] = ['Mirošov;14:14','Plzeň hl.n.;15:01'];
$trasa['27800_1'] = ['Mirošov;3:55', 'Nezvěstice;4:30'];
$trasa['27801_1'] = ['Nezvěstice;21:33', 'Mirošov;22:05'];
$trasa['27815_1'] = ['Příkosice;6:37', 'Rokycany;7:01'];
$trasa['27832_1'] = ['Rokycany;15:56', 'Příkosice;16:18'];
$trasa['27850_1'] = ['Příkosice;5:02', 'Nezvěstice;5:25'];
$trasa['27851_1'] = ['Nezvěstice;4:34', 'Příkosice;4:57'];
$trasa['27852_1'] = ['Příkosice;6:02', 'Nezvěstice;6:25'];
$trasa['27853_1'] = ['Nezvěstice;5:34', 'Příkosice;5:57'];
$trasa['27854_1'] = ['Příkosice;7:02', 'Nezvěstice;7:25'];
$trasa['27855_1'] = ['Nezvěstice;6:33', 'Příkosice;6:56'];
$trasa['27857_1'] = ['Nezvěstice;8:33', 'Příkosice;8:56'];
$trasa['27858_1'] = ['Příkosice;11:02', 'Nezvěstice;11:25'];
$trasa['27860_1'] = ['Příkosice;13:02', 'Nezvěstice;13:25'];
$trasa['27861_1'] = ['Nezvěstice;12:33', 'Příkosice;12:56'];
$trasa['27862_1'] = ['Příkosice;14:02', 'Nezvěstice;14:25'];
$trasa['27863_1'] = ['Nezvěstice;13:33', 'Příkosice;13:56'];
$trasa['27864_1'] = ['Příkosice;15:02', 'Nezvěstice;15:25'];
$trasa['27865_1'] = ['Nezvěstice;14:33', 'Příkosice;14:56'];
$trasa['27866_1'] = ['Příkosice;16:02', 'Nezvěstice;16:25'];
$trasa['27867_1'] = ['Nezvěstice;15:33', 'Příkosice;15:56'];
$trasa['27868_1'] = ['Příkosice;17:02', 'Nezvěstice;17:25'];
$trasa['27869_1'] = ['Nezvěstice;16:33', 'Příkosice;16:56'];
$trasa['27870_1'] = ['Příkosice;19:02', 'Nezvěstice;19:25'];
$trasa['27871_1'] = ['Nezvěstice;18:33', 'Příkosice;18:56'];
$trasa['27885_1'] = ['Mirošov;10:07', 'Rokycany;10:21'];
$trasa['27891_1'] = ['Příkosice;16:24', 'Mirošov;16:30'];

$poznamkaObehu['127818_1'] = ['pk', 'postrk'];
$poznamkaObehu['127835_1'] = ['pk', 'postrk'];

$poznamkaObehu['127812_1'] = ['vl', 'vlaková'];
$poznamkaObehu['127816_1'] = ['vl', 'vlaková'];
$poznamkaObehu['127812_2'] = ['vl', 'vlaková'];

$typ['7891_1'] = 'Sv';
$typ['7891_2'] = 'Sv';
$typ['27890_1'] = 'Sv';
$typ['7892_1'] = 'Sv';
$typ['7894_1'] = 'Sv';
$typ['27891_1'] = 'Sv';

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts813 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


