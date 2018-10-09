<?php 
$zacatekPlatnosti = '2.7.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['13451_1', '13448_1', '13403_1', '13453_1', '13452_1', '13405_1', '13455_1', '13454_1', '13457_1', '13456_1', '13459_1', '13458_1', '13461_1', '13460_1', '13463_1', '13462_1', '13465_1', '13464_1', '13467_1', '13466_1', '13469_1', '13468_1', '13471_1', '13470_1', '13473_1', '13472_1', '13475_1', '13474_1', '13477_1', '13476_1', '13479_1', '13478_1', '13481_1', '13480_1', '13483_1', '13482_1', '13485_1', '13484_1', '13487_1', '13486_1', '13489_1', '13488_1'];
$obeh[2] = ['3516_1', '3517_1', '3522_1', '3523_1', '3474_1', '3475_1', '3476_1', '3472_1'];
$obeh[3] = ['3461_1', '3514_1', '3500_1', '3503_1', '3514_2', '3515_1', '3520_1', '3521_1', '3526_1', '3527_1', '1135_1', '3590_1', '3507_1'];
$obeh[4] = ['103500_1', '3510_1', '3511_1', '1134_1', '3512_1', '3513_1', '3513_2', '3518_1', '3519_1', '3524_1', '3525_1', '23482_1', '23483_1', '23484_1', '23485_1'];

$omezeni['1134_1'] = '6';
$omezeni['1135_1'] = '1,2,3,4,6,T';
$omezeni['3461_1'] = 'X';
$omezeni['3472_1'] = 'T';
$omezeni['3474_1'] = 'X';
$omezeni['3475_1'] = 'X';
$omezeni['3476_1'] = 'X6';
$omezeni['3500_1'] = '25';
$omezeni['3503_1'] = '25';
$omezeni['3507_1'] = '5';
$omezeni['3510_1'] = 'X';
$omezeni['3511_1'] = 'X';
$omezeni['3512_1'] = 'X6';
$omezeni['3513_2'] = 'T';
$omezeni['3513_1'] = 'X6';
$omezeni['3514_2'] = '25';
$omezeni['3514_1'] = 'X';
$omezeni['3590_1'] = '5';
$omezeni['13403_1'] = '6';
$omezeni['13405_1'] = '7';
$omezeni['13448_1'] = 'X';
$omezeni['13451_1'] = 'X';
$omezeni['13452_1'] = 'X6';
$omezeni['13453_1'] = 'X6';
$omezeni['103500_1'] = 'X';

$trasa['1134_1'] = ['Bruntál;5:34','Valšov;5:42'];
$trasa['1135_1'] = ['Valšov;20:14','Bruntál;20:23'];
$trasa['3590_1'] = ['Valšov;20:25','Moravský Beroun;20:45'];
$trasa['13403_1'] = ['Opava východ;4:42','Kravaře ve Slezsku;4:55'];
$trasa['13405_1'] = ['Opava východ;5:42','Kravaře ve Slezsku;5:55'];
$trasa['103500_1'] = ['Bruntál;4:14','Valšov;4:22'];
$trasa['13448_1'] = ['Chuchelná;4:34', 'Kravaře ve Slezsku;4:51'];
$trasa['13451_1'] = ['Opava východ;4:02', 'Chuchelná;4:29'];
$trasa['13452_1'] = ['Chuchelná;5:35', 'Kravaře ve Slezsku;5:52'];
$trasa['13453_1'] = ['Kravaře ve Slezsku;5:00', 'Chuchelná;5:16'];
$trasa['13454_1'] = ['Chuchelná;6:35', 'Kravaře ve Slezsku;6:52'];
$trasa['13455_1'] = ['Kravaře ve Slezsku;6:00', 'Chuchelná;6:16'];
$trasa['13456_1'] = ['Chuchelná;7:35', 'Kravaře ve Slezsku;7:52'];
$trasa['13457_1'] = ['Kravaře ve Slezsku;7:00', 'Chuchelná;7:16'];
$trasa['13458_1'] = ['Chuchelná;8:35', 'Kravaře ve Slezsku;8:52'];
$trasa['13459_1'] = ['Kravaře ve Slezsku;8:00', 'Chuchelná;8:16'];
$trasa['13460_1'] = ['Chuchelná;9:35', 'Kravaře ve Slezsku;9:52'];
$trasa['13461_1'] = ['Kravaře ve Slezsku;9:00', 'Chuchelná;9:16'];
$trasa['13462_1'] = ['Chuchelná;10:35', 'Kravaře ve Slezsku;10:52'];
$trasa['13463_1'] = ['Kravaře ve Slezsku;10:00', 'Chuchelná;10:16'];
$trasa['13464_1'] = ['Chuchelná;11:35', 'Kravaře ve Slezsku;11:52'];
$trasa['13465_1'] = ['Kravaře ve Slezsku;11:00', 'Chuchelná;11:16'];
$trasa['13466_1'] = ['Chuchelná;12:35', 'Kravaře ve Slezsku;12:52'];
$trasa['13467_1'] = ['Kravaře ve Slezsku;12:00', 'Chuchelná;12:16'];
$trasa['13468_1'] = ['Chuchelná;13:35', 'Kravaře ve Slezsku;13:52'];
$trasa['13469_1'] = ['Kravaře ve Slezsku;13:00', 'Chuchelná;13:16'];
$trasa['13470_1'] = ['Chuchelná;14:35', 'Kravaře ve Slezsku;14:52'];
$trasa['13471_1'] = ['Kravaře ve Slezsku;14:00', 'Chuchelná;14:16'];
$trasa['13472_1'] = ['Chuchelná;15:35', 'Kravaře ve Slezsku;15:52'];
$trasa['13473_1'] = ['Kravaře ve Slezsku;15:00', 'Chuchelná;15:16'];
$trasa['13474_1'] = ['Chuchelná;16:35', 'Kravaře ve Slezsku;16:52'];
$trasa['13475_1'] = ['Kravaře ve Slezsku;16:00', 'Chuchelná;16:16'];
$trasa['13476_1'] = ['Chuchelná;17:35', 'Kravaře ve Slezsku;17:52'];
$trasa['13477_1'] = ['Kravaře ve Slezsku;17:00', 'Chuchelná;17:16'];
$trasa['13478_1'] = ['Chuchelná;18:35', 'Kravaře ve Slezsku;18:52'];
$trasa['13479_1'] = ['Kravaře ve Slezsku;18:00', 'Chuchelná;18:16'];
$trasa['13480_1'] = ['Chuchelná;19:35', 'Kravaře ve Slezsku;19:52'];
$trasa['13481_1'] = ['Kravaře ve Slezsku;19:00', 'Chuchelná;19:16'];
$trasa['13482_1'] = ['Chuchelná;20:35', 'Kravaře ve Slezsku;20:52'];
$trasa['13483_1'] = ['Kravaře ve Slezsku;20:00', 'Chuchelná;20:16'];
$trasa['13484_1'] = ['Chuchelná;21:35', 'Kravaře ve Slezsku;21:52'];
$trasa['13485_1'] = ['Kravaře ve Slezsku;21:00', 'Chuchelná;21:16'];
$trasa['13486_1'] = ['Chuchelná;22:35', 'Kravaře ve Slezsku;22:52'];
$trasa['13487_1'] = ['Kravaře ve Slezsku;22:00', 'Chuchelná;22:16'];
$trasa['13488_1'] = ['Chuchelná;23:20', 'Opava východ;23:45'];
$trasa['13489_1'] = ['Kravaře ve Slezsku;23:00', 'Chuchelná;23:16'];
$trasa['23482_1'] = ['Opava východ;20:40', 'Hradec nad Moravicí;20:54'];
$trasa['23483_1'] = ['Hradec nad Moravicí;21:06', 'Opava východ;21:20'];
$trasa['23484_1'] = ['Opava východ;21:46', 'Hradec nad Moravicí;22:00'];
$trasa['23485_1'] = ['Hradec nad Moravicí;22:15', 'Opava východ;22:29'];
$trasa['3461_1'] = ['Krnov;3:35', 'Opava východ;4:12'];
$trasa['3472_1'] = ['Opava východ;20:23', 'Krnov;21:00'];
$trasa['3474_1'] = ['Opava východ;21:26', 'Krnov;22:05'];
$trasa['3475_1'] = ['Krnov;22:09', 'Opava východ;22:40'];
$trasa['3476_1'] = ['Opava východ;22:46', 'Krnov;23:27'];
$trasa['3500_1'] = ['Krnov;3:40', 'Moravský Beroun;4:47'];
$trasa['3503_1'] = ['Moravský Beroun;6:33', 'Bruntál;7:04'];
$trasa['3507_1'] = ['Moravský Beroun;21:34', 'Bruntál;22:05'];
$trasa['3510_1'] = ['Valšov;4:25', 'Rýmařov;4:50'];
$trasa['3511_1'] = ['Rýmařov;4:55', 'Valšov;5:20'];
$trasa['3512_1'] = ['Valšov;5:46', 'Rýmařov;6:11'];
$trasa['3513_1'] = ['Rýmařov;6:17', 'Opava východ;8:23'];
$trasa['3513_2'] = ['Bruntál;7:08', 'Opava východ;8:23'];
$trasa['3514_1'] = ['Opava východ;5:19', 'Rýmařov;7:41'];
$trasa['3514_2'] = ['Bruntál;7:06', 'Rýmařov;7:41'];
$trasa['3515_1'] = ['Rýmařov;8:24', 'Opava východ;10:23'];
$trasa['3516_1'] = ['Opava východ;7:39', 'Rýmařov;9:41'];
$trasa['3517_1'] = ['Rýmařov;10:24', 'Opava východ;12:23'];
$trasa['3518_1'] = ['Opava východ;9:39', 'Rýmařov;11:41'];
$trasa['3519_1'] = ['Rýmařov;12:24', 'Opava východ;14:26'];
$trasa['3520_1'] = ['Opava východ;11:39', 'Rýmařov;13:41'];
$trasa['3521_1'] = ['Rýmařov;14:24', 'Opava východ;16:23'];
$trasa['3522_1'] = ['Opava východ;13:39', 'Rýmařov;15:41'];
$trasa['3523_1'] = ['Rýmařov;16:24', 'Opava východ;18:23'];
$trasa['3524_1'] = ['Opava východ;15:39', 'Rýmařov;17:41'];
$trasa['3525_1'] = ['Rýmařov;18:24', 'Opava východ;20:20'];
$trasa['3526_1'] = ['Opava východ;17:39', 'Rýmařov;19:41'];
$trasa['3527_1'] = ['Rýmařov;19:45', 'Valšov;20:11'];
//sem patri stazene trasy


$poznamkaObehu['13403_1'] = ['pk', 'postrk'];
$poznamkaObehu['13405_1'] = ['pk', 'postrk'];
$poznamkaObehu['1135_1'] = ['pk', 'postrk'];
$poznamkaObehu['1134_1'] = ['pk', 'postrk'];


$typ['3590_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts854 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


