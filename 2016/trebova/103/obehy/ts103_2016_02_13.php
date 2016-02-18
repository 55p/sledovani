<?php 
$zacatekPlatnosti = '13.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('3781_1', '3782_1', '3785_1', '13022_1', '3753_1', '3753_2');
$obeh[2] = array('3840_1', '4033_1', '3814_1', '3817_1', '3820_1', '3821_1', '3826_1', '3831_1', '3836_1', '3750_1', '3863_1', '3752_1');
$obeh[3] = array('3709_1', '3815_1', '3818_1', '3819_1', '3822_1', '3825_1', '3832_1', '3835_1', '3838_1', '3867_1');
$obeh[4] = array('3706_1', '3842_1', '3823_1', '3828_1', '3833_1');
$obeh[5] = array('4032_1');
$obeh[6] = array(2970, 2973, 2972, 2975);
$obeh[7] = array('3301_1', '3302_1', '3862_1', '3827_1', '3834_1', '3861_1', '3868_1', '3865_1', '4045_1');
$obeh[8] = array('4030_1', '3307_1', '3306_1');
$obeh[9] = array('3223_1', '3224_1', '3846_1', '1621_1', '1622_1', '1623_1', '1624_1', '3863_2');
$obeh[10] = array('3840_2', '3813_1', '3714_1', '3719_1', '3724_1', '3731_1', '3736_1', '3743_1');
$obeh[11] = array('3812_1', '3710_1', '3717_1', '3722_1', '3729_1', '3734_1', 13023, '3786_1');


$omezeni['2970'] = 'X';
$omezeni['2973'] = 'X';
$omezeni['2972'] = 'X';
$omezeni['2975'] = 'X';

$omezeni['1621_1'] = 'X';
$omezeni['1622_1'] = 'X';
$omezeni['1623_1'] = 'X';
$omezeni['1624_1'] = 'X';
$omezeni['2941_1'] = 'X';
$omezeni['2964_1'] = 'X1234';
$omezeni['2974_1'] = 'X';
$omezeni['2990_1'] = 'X5';
$omezeni['3385_1'] = 'X1234';
$omezeni['3706_1'] = '25';
$omezeni['3731_1'] = 'X';
$omezeni['3736_1'] = 'X';
$omezeni['3750_1'] = 'X';
$omezeni['3752_1'] = '25';
$omezeni['3753_1'] = 'XT';
$omezeni['3753_2'] = '6';
$omezeni['3781_1'] = 'X';
$omezeni['3782_1'] = 'X';
$omezeni['3813_1'] = 'X';
$omezeni['3814_1'] = 'X';
$omezeni['3840_1'] = '6';
$omezeni['3840_2'] = 'X';
$omezeni['3842_1'] = 'X';
$omezeni['3846_1'] = 'X';
$omezeni['3863_1'] = '25';
$omezeni['3863_2'] = 'X';
$omezeni['4030_1'] = 'X';
$omezeni['4032_1'] = 'X';
$omezeni['4033_1'] = 'X';

$typ[-1] = 'Os';
$typ[2990] = 'Sv';

$trasa['2970'] = array('Návsí;5:11', 'Český Těšín;5:35');
$trasa['2972'] = array('Návsí;6:47', 'Český Těšín;7:11');
$trasa['2973'] = array('Český Těšín;5:53', 'Návsí;6:17');
$trasa['2975'] = array('Český Těšín;14:08', 'Návsí;14:32');


$trasa['13023'] = array('Šumperk;18:50', 'Zábřeh na Moravě;19:06');
$trasa['13022_1'] = array('Zábřeh na Moravě;20:51', 'Šumperk;21:09');
$trasa['1621_1'] = array('Olomouc hl.n.;14:07', 'Prostějov hl.n.;14:23');
$trasa['1622_1'] = array('Prostějov hl.n.;15:35', 'Olomouc hl.n.;15:51');
$trasa['1623_1'] = array('Olomouc hl.n.;16:07', 'Prostějov hl.n.;16:23');
$trasa['1624_1'] = array('Prostějov hl.n.;17:35', 'Olomouc hl.n.;17:51');
$trasa['2941_1'] = array('Bohumín;14:13', 'Návsí;15:15');
$trasa['2964_1'] = array('Český Těšín;21:39', 'Ostrava-Svinov;22:32');
$trasa['2974_1'] = array('Návsí;15:41', 'Český Těšín;16:05');
$trasa['2990_1'] = array('Český Těšín;16:12','Bohumín;16:44');
$trasa['3223_1'] = array('Hranice na Moravě;6:36', 'Vsetín;7:27');
$trasa['3224_1'] = array('Vsetín;8:20', 'Přerov;9:35');
$trasa['3301_1'] = array('Přerov;4:25', 'Ostrava-Svinov;5:30');
$trasa['3302_1'] = array('Ostrava-Svinov;5:41', 'Přerov;6:50');
$trasa['3306_1'] = array('Ostrava hl.n.;14:27', 'Hranice na Moravě;15:30');
$trasa['3307_1'] = array('Přerov;6:05', 'Ostrava-Svinov;7:11');
$trasa['3385_1'] = array('Ostrava-Svinov;23:09', 'Bohumín;23:24');
$trasa['3706_1'] = array('Nezamyslice;5:00', 'Olomouc hl.n.;5:55');
$trasa['3709_1'] = array('Šumperk;5:29', 'Olomouc hl.n.;6:22');
$trasa['3710_1'] = array('Olomouc hl.n.;6:30', 'Šumperk;7:29');
$trasa['3714_1'] = array('Nezamyslice;7:40', 'Šumperk;9:25');
$trasa['3717_1'] = array('Šumperk;8:26', 'Nezamyslice;10:18');
$trasa['3719_1'] = array('Šumperk;10:30', 'Nezamyslice;12:18');
$trasa['3722_1'] = array('Nezamyslice;11:40', 'Šumperk;13:26');
$trasa['3724_1'] = array('Nezamyslice;12:40', 'Šumperk;14:26');
$trasa['3729_1'] = array('Šumperk;14:30', 'Nezamyslice;16:18');
$trasa['3731_1'] = array('Šumperk;15:29', 'Nezamyslice;17:18');
$trasa['3734_1'] = array('Nezamyslice;16:40', 'Šumperk;18:26');
$trasa['3736_1'] = array('Nezamyslice;17:40', 'Šumperk;19:26');
$trasa['3743_1'] = array('Šumperk;20:28', 'Nezamyslice;22:48');
$trasa['3750_1'] = array('Olomouc hl.n.;19:30', 'Šumperk;20:27');
$trasa['3752_1'] = array('Přerov;22:06', 'Šumperk;23:25');
$trasa['3753_1'] = array('Šumperk;21:30', 'Přerov;23:26');
$trasa['3753_2'] = array('Šumperk;21:30', 'Olomouc hl.n.;22:43');
$trasa['3781_1'] = array('Česká Třebová;14:26', 'Zábřeh na Moravě;15:00');
$trasa['3782_1'] = array('Zábřeh na Moravě;15:27', 'Česká Třebová;16:06');
$trasa['3785_1'] = array('Česká Třebová;18:26', 'Zábřeh na Moravě;19:04');
$trasa['3786_1'] = array('Zábřeh na Moravě;19:27', 'Česká Třebová;20:06');
$trasa['3812_1'] = array('Nezamyslice;5:23', 'Olomouc hl.n.;6:25');
$trasa['3813_1'] = array('Olomouc hl.n.;5:32', 'Nezamyslice;6:32');
$trasa['3814_1'] = array('Nezamyslice;6:08', 'Olomouc hl.n.;7:25');
$trasa['3815_1'] = array('Olomouc hl.n.;6:32', 'Nezamyslice;7:32');
$trasa['3817_1'] = array('Olomouc hl.n.;8:32', 'Nezamyslice;9:34');
$trasa['3818_1'] = array('Nezamyslice;8:23', 'Olomouc hl.n.;9:25');
$trasa['3819_1'] = array('Olomouc hl.n.;10:32', 'Nezamyslice;11:34');
$trasa['3820_1'] = array('Nezamyslice;10:23', 'Olomouc hl.n.;11:25');
$trasa['3821_1'] = array('Olomouc hl.n.;12:32', 'Nezamyslice;13:34');
$trasa['3822_1'] = array('Nezamyslice;12:23', 'Olomouc hl.n.;13:25');
$trasa['3823_1'] = array('Olomouc hl.n.;13:32', 'Nezamyslice;14:34');
$trasa['3823_2'] = array('Olomouc hl.n.;13:32', 'Nezamyslice;14:34');
$trasa['3825_1'] = array('Olomouc hl.n.;14:32', 'Nezamyslice;15:34');
$trasa['3826_1'] = array('Nezamyslice;14:23', 'Olomouc hl.n.;15:25');
$trasa['3827_1'] = array('Olomouc hl.n.;15:32', 'Nezamyslice;16:34');
$trasa['3828_1'] = array('Nezamyslice;15:23', 'Olomouc hl.n.;16:25');
$trasa['3831_1'] = array('Olomouc hl.n.;16:32', 'Nezamyslice;17:34');
$trasa['3832_1'] = array('Nezamyslice;16:23', 'Olomouc hl.n.;17:25');
$trasa['3833_1'] = array('Olomouc hl.n.;17:32', 'Nezamyslice;18:34');
$trasa['3834_1'] = array('Nezamyslice;17:23', 'Olomouc hl.n.;18:25');
$trasa['3835_1'] = array('Olomouc hl.n.;18:32', 'Nezamyslice;19:34');
$trasa['3836_1'] = array('Nezamyslice;18:23', 'Olomouc hl.n.;19:25');
$trasa['3838_1'] = array('Nezamyslice;20:23', 'Olomouc hl.n.;21:25');
$trasa['3840_1'] = array('Přerov;4:03', 'Olomouc hl.n.;4:22');
$trasa['3840_2'] = array('Přerov;4:03', 'Olomouc hl.n.;4:22');
$trasa['3842_1'] = array('Přerov;5:06', 'Olomouc hl.n.;5:25');
$trasa['3846_1'] = array('Přerov;10:06', 'Olomouc hl.n.;10:25');
$trasa['3861_1'] = array('Olomouc hl.n.;19:32', 'Přerov;19:51');
$trasa['3862_1'] = array('Přerov;14:06', 'Olomouc hl.n.;14:25');
$trasa['3863_1'] = array('Olomouc hl.n.;20:32', 'Přerov;20:51');
$trasa['3863_2'] = array('Olomouc hl.n.;20:32', 'Přerov;20:51');
$trasa['3865_1'] = array('Olomouc hl.n.;21:32', 'Přerov;21:51');
$trasa['3867_1'] = array('Olomouc hl.n.;22:32', 'Přerov;22:51');
$trasa['3868_1'] = array('Přerov;20:10', 'Olomouc hl.n.;20:29');
$trasa['4030_1'] = array('Nezamyslice;4:52', 'Přerov;5:21');
$trasa['4032_1'] = array('Nezamyslice;6:40', 'Přerov;7:14');
$trasa['4033_1'] = array('Přerov;5:20', 'Nezamyslice;5:48');
$trasa['4045_1'] = array('Přerov;22:40', 'Nezamyslice;23:08');




@$ts103 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>