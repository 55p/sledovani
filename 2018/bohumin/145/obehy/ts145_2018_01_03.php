<?php 
$zacatekPlatnosti = '3.1.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3302_1', '3302_2', '3860_1', '3817_1', '3820_1', '3821_1', '3826_1', '3831_1', '3836_1', '3862_1', '3827_1', '3834_1', '3861_1', '3868_1', '3869_1'];
$obeh[2] = ['3840_1', '3813_1', '3714_1', '3721_1', '3726_1', '3846_1', '3721_2', '3726_2', '3737_1', '3742_1'];
$obeh[3] = ['3709_1', '3815_1', '3818_1', '3819_1', '3822_1', '3826_2', '3832_1', '3835_1', '3838_1', '3867_1'];
$obeh[4] = ['3301_1', '3304_1', '3232_1', '3848_1', '3714_2', '3823_1', '3828_1', '3833_1'];
$obeh[5] = ['4034_1', '3862_2', '3827_2', '3834_2', '3861_2', '3868_2', '3817_2', '3820_2', '3821_2', '3826_3', '3831_2', '3836_2', '3865_1', '3839_1'];
$obeh[6] = ['3812_1', '3710_1', '13039_1', '3727_1', '3727_2', '3732_1', '3732_2', '13045_1', '13040_1'];
$obeh[7] = ['3713_1', '3718_1', '3729_1', '3734_1', '3743_1'];
$obeh[8] = ['4030_1', '3307_1', '3306_1'];
$obeh[9] = ['3330_1', '4033_1', '4032_1', '103822_1', '1621_1', '1622_1', '1623_1', '1624_1', '103835_1', '3223_1', '3224_1', '3239_1', '3236_1'];
$obeh[10] = ['3301_2', '2941_1', '2992_1'];

$omezeni['103822_1'] = 'X';
$omezeni['103835_1'] = 'X';
$omezeni['13039_1'] = 'X';
$omezeni['1621_1'] = 'X';
$omezeni['1622_1'] = 'X';
$omezeni['1623_1'] = 'X';
$omezeni['1624_1'] = 'X';
$omezeni['2941_1'] = 'X';
$omezeni['2992_1'] = 'X5';
$omezeni['3223_1'] = '25';
$omezeni['3224_1'] = '25';
$omezeni['3232_1'] = 'X';
$omezeni['3236_1'] = '25';
$omezeni['3239_1'] = '25';
$omezeni['3301_1'] = 'X';
$omezeni['3302_1'] = 'X';
$omezeni['3302_2'] = '25';
$omezeni['3304_1'] = 'X';
$omezeni['3330_1'] = 'X';
$omezeni['3714_1'] = 'X';
$omezeni['3714_2'] = '25';
$omezeni['3721_1'] = 'X';
$omezeni['3721_2'] = '25';
$omezeni['3726_1'] = 'X';
$omezeni['3726_2'] = '25';
$omezeni['3727_1'] = 'X';
$omezeni['3727_2'] = '25';
$omezeni['3732_1'] = 'X';
$omezeni['3732_2'] = '25';
$omezeni['3813_1'] = 'X';
$omezeni['3817_1'] = 'X';
$omezeni['3817_2'] = '25';
$omezeni['3820_1'] = 'X';
$omezeni['3820_2'] = '25';
$omezeni['3821_1'] = 'X';
$omezeni['3821_2'] = '25';
$omezeni['3826_1'] = 'X';
$omezeni['3826_3'] = '25';
$omezeni['3827_1'] = '25';
$omezeni['3827_2'] = 'X';
$omezeni['3831_1'] = 'X';
$omezeni['3831_2'] = '25';
$omezeni['3834_1'] = '25';
$omezeni['3834_2'] = 'X';
$omezeni['3836_1'] = 'X';
$omezeni['3836_2'] = '25';
$omezeni['3840_1'] = 'X1';
$omezeni['3846_1'] = '6';
$omezeni['3848_1'] = 'X';
$omezeni['3860_1'] = 'X';
$omezeni['3861_1'] = '25';
$omezeni['3861_2'] = 'X';
$omezeni['3862_1'] = '25';
$omezeni['3862_2'] = 'X';
$omezeni['3868_1'] = '25';
$omezeni['3868_2'] = 'X';
$omezeni['3869_1'] = 'X5,T';
$omezeni['4030_1'] = 'X';
$omezeni['4032_1'] = 'X';
$omezeni['4033_1'] = 'X';
$omezeni['4034_1'] = 'X';

$trasa['103822_1'] = ['Přerov;13:05','Olomouc hl.n.;13:24'];
$trasa['103835_1'] = ['Olomouc hl.n.;18:33','Přerov;18:52'];
$trasa['2992_1'] = ['Návsí;15:43','Bohumín;16:32'];
$trasa['13039_1'] = ['Kouty nad Desnou;12:28', 'Šumperk;13:05'];
$trasa['13040_1'] = ['Šumperk;22:37', 'Kouty nad Desnou;23:13'];
$trasa['13045_1'] = ['Kouty nad Desnou;18:50', 'Šumperk;19:27'];
$trasa['1621_1'] = ['Olomouc hl.n.;14:06', 'Prostějov hl.n.;14:22'];
$trasa['1622_1'] = ['Prostějov hl.n.;15:35', 'Olomouc hl.n.;15:52'];
$trasa['1623_1'] = ['Olomouc hl.n.;16:06', 'Prostějov hl.n.;16:22'];
$trasa['1624_1'] = ['Prostějov hl.n.;17:35', 'Olomouc hl.n.;17:52'];
$trasa['2941_1'] = ['Bohumín;14:13', 'Návsí;15:20'];
$trasa['3223_1'] = ['Hranice na Moravě;6:35', 'Vsetín;7:26'];
$trasa['3224_1'] = ['Vsetín;8:18', 'Přerov;9:31'];
$trasa['3232_1'] = ['Hranice na Moravě;11:07', 'Přerov;11:30'];
$trasa['3236_1'] = ['Valašské Meziříčí;22:05', 'Přerov;23:00'];
$trasa['3239_1'] = ['Přerov;19:26', 'Valašské Meziříčí;20:20'];
$trasa['3301_1'] = ['Přerov;4:25', 'Bohumín;5:50'];
$trasa['3302_1'] = ['Návsí;4:12', 'Přerov;6:50'];
$trasa['3302_2'] = ['Návsí;4:12', 'Bohumín;5:18'];
$trasa['3304_1'] = ['Bohumín;6:11', 'Hranice na Moravě;7:15'];
$trasa['3306_1'] = ['Bohumín;14:16', 'Hranice na Moravě;15:27'];
$trasa['3307_1'] = ['Přerov;6:05', 'Bohumín;7:25'];
$trasa['3330_1'] = ['Hranice na Moravě;4:19', 'Přerov;4:42'];
$trasa['3709_1'] = ['Kouty nad Desnou;4:50', 'Olomouc hl.n.;6:22'];
$trasa['3710_1'] = ['Olomouc hl.n.;6:33', 'Kouty nad Desnou;8:06'];
$trasa['3713_1'] = ['Kouty nad Desnou;5:50', 'Nezamyslice;8:18'];
$trasa['3714_1'] = ['Nezamyslice;7:40', 'Olomouc hl.n.;8:26'];
$trasa['3714_2'] = ['Nezamyslice;7:40', 'Olomouc hl.n.;8:26'];
$trasa['3718_1'] = ['Nezamyslice;9:40', 'Kouty nad Desnou;12:06'];
$trasa['3721_1'] = ['Olomouc hl.n.;12:33', 'Nezamyslice;13:18'];
$trasa['3721_2'] = ['Olomouc hl.n.;12:33', 'Prostějov hl.n.;12:58'];
$trasa['3726_1'] = ['Nezamyslice;13:40', 'Kouty nad Desnou;16:04'];
$trasa['3726_2'] = ['Prostějov hl.n.;14:00', 'Kouty nad Desnou;16:04'];
$trasa['3727_1'] = ['Šumperk;13:29', 'Nezamyslice;15:18'];
$trasa['3727_2'] = ['Kouty nad Desnou;12:50', 'Prostějov hl.n.;14:58'];
$trasa['3729_1'] = ['Kouty nad Desnou;13:46', 'Nezamyslice;16:18'];
$trasa['3732_1'] = ['Nezamyslice;15:40', 'Kouty nad Desnou;18:04'];
$trasa['3732_2'] = ['Prostějov hl.n.;16:00', 'Kouty nad Desnou;18:04'];
$trasa['3734_1'] = ['Nezamyslice;16:40', 'Kouty nad Desnou;19:06'];
$trasa['3737_1'] = ['Kouty nad Desnou;16:50', 'Nezamyslice;19:18'];
$trasa['3742_1'] = ['Nezamyslice;19:40', 'Kouty nad Desnou;22:13'];
$trasa['3743_1'] = ['Kouty nad Desnou;19:48', 'Nezamyslice;22:48'];
$trasa['3812_1'] = ['Nezamyslice;5:23', 'Olomouc hl.n.;6:24'];
$trasa['3813_1'] = ['Olomouc hl.n.;5:33', 'Nezamyslice;6:32'];
$trasa['3815_1'] = ['Olomouc hl.n.;6:33', 'Nezamyslice;7:32'];
$trasa['3817_1'] = ['Olomouc hl.n.;8:33', 'Nezamyslice;9:29'];
$trasa['3817_2'] = ['Olomouc hl.n.;8:33', 'Nezamyslice;9:29'];
$trasa['3818_1'] = ['Nezamyslice;8:28', 'Olomouc hl.n.;9:24'];
$trasa['3819_1'] = ['Olomouc hl.n.;10:33', 'Nezamyslice;11:29'];
$trasa['3820_1'] = ['Nezamyslice;10:24', 'Olomouc hl.n.;11:24'];
$trasa['3820_2'] = ['Nezamyslice;10:24', 'Olomouc hl.n.;11:24'];
$trasa['3821_1'] = ['Olomouc hl.n.;12:33', 'Nezamyslice;13:33'];
$trasa['3821_2'] = ['Olomouc hl.n.;12:33', 'Nezamyslice;13:33'];
$trasa['3822_1'] = ['Nezamyslice;12:24', 'Olomouc hl.n.;13:24'];
$trasa['3823_1'] = ['Olomouc hl.n.;13:34', 'Nezamyslice;14:34'];
$trasa['3826_1'] = ['Nezamyslice;14:24', 'Olomouc hl.n.;15:24'];
$trasa['3826_2'] = ['Nezamyslice;14:24', 'Olomouc hl.n.;15:24'];
$trasa['3826_3'] = ['Nezamyslice;14:24', 'Olomouc hl.n.;15:24'];
$trasa['3827_1'] = ['Olomouc hl.n.;15:34', 'Nezamyslice;16:34'];
$trasa['3827_2'] = ['Olomouc hl.n.;15:34', 'Nezamyslice;16:34'];
$trasa['3831_1'] = ['Olomouc hl.n.;16:33', 'Nezamyslice;17:34'];
$trasa['3831_2'] = ['Olomouc hl.n.;16:33', 'Nezamyslice;17:34'];
$trasa['3832_1'] = ['Nezamyslice;16:24', 'Olomouc hl.n.;17:24'];
$trasa['3833_1'] = ['Olomouc hl.n.;17:34', 'Nezamyslice;18:34'];
$trasa['3834_1'] = ['Nezamyslice;17:24', 'Olomouc hl.n.;18:24'];
$trasa['3834_2'] = ['Nezamyslice;17:24', 'Olomouc hl.n.;18:24'];
$trasa['3835_1'] = ['Olomouc hl.n.;18:33', 'Nezamyslice;19:34'];
$trasa['3836_1'] = ['Nezamyslice;18:24', 'Olomouc hl.n.;19:24'];
$trasa['3836_2'] = ['Nezamyslice;18:24', 'Olomouc hl.n.;19:24'];
$trasa['3838_1'] = ['Nezamyslice;20:28', 'Olomouc hl.n.;21:24'];
$trasa['3839_1'] = ['Přerov;22:40', 'Nezamyslice;23:08'];
$trasa['3840_1'] = ['Přerov;4:37', 'Olomouc hl.n.;4:56'];
$trasa['3846_1'] = ['Přerov;10:05', 'Olomouc hl.n.;10:24'];
$trasa['3848_1'] = ['Přerov;12:05', 'Olomouc hl.n.;12:24'];
$trasa['3860_1'] = ['Přerov;7:05', 'Olomouc hl.n.;7:24'];
$trasa['3861_1'] = ['Olomouc hl.n.;19:34', 'Přerov;19:53'];
$trasa['3861_2'] = ['Olomouc hl.n.;19:34', 'Přerov;19:53'];
$trasa['3862_1'] = ['Přerov;14:05', 'Olomouc hl.n.;14:24'];
$trasa['3862_2'] = ['Přerov;14:05', 'Olomouc hl.n.;14:24'];
$trasa['3865_1'] = ['Olomouc hl.n.;21:34', 'Přerov;21:53'];
$trasa['3867_1'] = ['Olomouc hl.n.;22:37', 'Přerov;22:56'];
$trasa['3868_1'] = ['Přerov;20:05', 'Olomouc hl.n.;20:24'];
$trasa['3868_2'] = ['Přerov;20:05', 'Olomouc hl.n.;20:24'];
$trasa['3869_1'] = ['Olomouc hl.n.;23:07', 'Přerov;23:26'];
$trasa['4030_1'] = ['Nezamyslice;4:51', 'Přerov;5:19'];
$trasa['4032_1'] = ['Nezamyslice;6:07', 'Přerov;6:37'];
$trasa['4033_1'] = ['Přerov;5:20', 'Nezamyslice;5:48'];
$trasa['3301_2'] = ['Přerov;4:25', 'Bohumín;5:50'];
$trasa['3828_1'] = ['Nezamyslice;15:24', 'Olomouc hl.n.;16:24'];
$trasa['4034_1'] = ['Nezamyslice;6:40', 'Přerov;7:12'];

$typ['2992_1'] = 'Sv';

$poznamkaObehu['103822_1'] = ['pk', 'postrk'];
$poznamkaObehu['103835_1'] = ['pk', 'postrk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts145 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


