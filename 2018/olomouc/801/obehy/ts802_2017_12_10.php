<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3622_1', '3621_1', '3680_1', '13722_1', '3682_1', '1701_1', '3681_1', '1630_1', '3640_2', '13735_1', '13738_1', '3645_1', '13740_1', '3647_1'];
$obeh[2] = ['3622_2', '3621_2', '3628_1', '3630_1', '13723_1', '13728_1', '3633_1', '3635_1', '3660_1', '3637_1', '3661_1', '13732_1', '3638_1', '3662_1', '3685_1', '3663_1', '3664_1', '3641_1', '3644_1', '13739_1'];
$obeh[3] = ['3622_3', '13720_1', '3625_1', '3625_2', '3624_1', '3630_2', '3631_2', '3633_2', '13728_2', '3634_1', '3635_2', '3637_2', '3636_1', '3640_1', '3687_1', '13735_2', '3642_1', '13738_2', '13737_1', '3645_2', '13740_2', '3647_2'];

$omezeni['13720_1'] = 'X';
$omezeni['13722_1'] = '6,T';
$omezeni['13723_1'] = 'X';
$omezeni['13728_1'] = 'X';
$omezeni['13728_2'] = '6,T';
$omezeni['13732_1'] = 'X';
$omezeni['13735_1'] = 'X';
$omezeni['13735_2'] = '6,T';
$omezeni['13737_1'] = 'X';
$omezeni['13738_1'] = 'X';
$omezeni['13738_2'] = '6,T';
$omezeni['13740_1'] = '6,T';
$omezeni['13740_2'] = 'X';
$omezeni['1630_1'] = '6,T';
$omezeni['1632_1'] = '6,T';
$omezeni['3640_2'] = 'X';
$omezeni['1701_1'] = '6,T';
$omezeni['3621_1'] = 'X';
$omezeni['3621_2'] = '6,T';
$omezeni['3622_1'] = 'X';
$omezeni['3622_2'] = 'X';
$omezeni['3622_3'] = '6,T';
$omezeni['3624_1'] = 'X';
$omezeni['3625_1'] = '6,T';
$omezeni['3625_2'] = 'X';
$omezeni['3628_1'] = 'T';
$omezeni['3630_1'] = 'X';
$omezeni['3630_2'] = '6,T';
$omezeni['3633_1'] = '6';
$omezeni['3633_2'] = '6,T';
$omezeni['3634_1'] = 'X';
$omezeni['3635_1'] = 'X';
$omezeni['3635_2'] = '6,T';
$omezeni['3636_1'] = 'X';
$omezeni['3637_1'] = '7';
$omezeni['3637_2'] = 'X';
$omezeni['3638_1'] = 'T';
$omezeni['3640_1'] = '6,T';
$omezeni['3641_1'] = 'T';
$omezeni['3642_1'] = 'X';
$omezeni['3645_1'] = 'X';
$omezeni['3645_2'] = '6,T';
$omezeni['3647_1'] = '6,T';
$omezeni['3647_2'] = 'X';
$omezeni['3660_1'] = '6';
$omezeni['3661_1'] = '6';
$omezeni['3631_2'] = 'X';
$omezeni['3662_1'] = '6';
$omezeni['3663_1'] = 'X6';
$omezeni['3664_1'] = 'X6';
$omezeni['3680_1'] = '6,T';
$omezeni['3681_1'] = 'X';
$omezeni['3682_1'] = 'X';
$omezeni['3685_1'] = 'X';
$omezeni['3687_1'] = 'X';


$trasa['13720_1'] = ['Uničov;4:11', 'Olomouc hl.n.;4:49'];
$trasa['13722_1'] = ['Uničov;5:37', 'Olomouc hl.n.;6:20'];
$trasa['13723_1'] = ['Olomouc hl.n.;10:37', 'Uničov;11:17'];
$trasa['13728_1'] = ['Uničov;12:34', 'Olomouc hl.n.;13:17'];
$trasa['13728_2'] = ['Uničov;12:34', 'Olomouc hl.n.;13:17'];
$trasa['13732_1'] = ['Uničov;14:34', 'Olomouc hl.n.;15:17'];
$trasa['13735_1'] = ['Olomouc hl.n.;18:37', 'Uničov;19:17'];
$trasa['13735_2'] = ['Olomouc hl.n.;18:37', 'Uničov;19:17'];
$trasa['13737_1'] = ['Olomouc hl.n.;20:37', 'Uničov;21:17'];
$trasa['13738_1'] = ['Uničov;20:34', 'Olomouc hl.n.;21:17'];
$trasa['13738_2'] = ['Uničov;20:34', 'Olomouc hl.n.;21:17'];
$trasa['13739_1'] = ['Olomouc hl.n.;22:47', 'Uničov;23:27'];
$trasa['13740_1'] = ['Uničov;22:44', 'Olomouc hl.n.;23:27'];
$trasa['13740_2'] = ['Uničov;22:44', 'Olomouc hl.n.;23:27'];
$trasa['1630_1'] = ['Jeseník;15:43', 'Olomouc hl.n.;18:02'];

$trasa['1701_1'] = ['Olomouc hl.n.;6:56', 'Jeseník;8:58'];
$trasa['3621_1'] = ['Uničov;4:34', 'Šumperk;5:14'];
$trasa['3621_2'] = ['Uničov;4:34', 'Šumperk;5:14'];
$trasa['3622_1'] = ['Šumperk;3:56', 'Olomouc hl.n.;5:14'];
$trasa['3622_2'] = ['Šumperk;3:56', 'Olomouc hl.n.;5:14'];
$trasa['3622_3'] = ['Šumperk;3:56', 'Olomouc hl.n.;5:14'];
$trasa['3624_1'] = ['Uničov;6:34', 'Olomouc hl.n.;7:19'];
$trasa['3625_1'] = ['Olomouc hl.n.;5:19', 'Šumperk;7:03'];
$trasa['3625_2'] = ['Olomouc hl.n.;5:19', 'Uničov;6:20'];
$trasa['3628_1'] = ['Šumperk;7:04', 'Olomouc hl.n.;8:27'];
$trasa['3630_1'] = ['Šumperk;8:30', 'Olomouc hl.n.;10:13'];
$trasa['3630_2'] = ['Šumperk;8:30', 'Olomouc hl.n.;10:13'];
$trasa['3633_1'] = ['Olomouc hl.n.;11:37', 'Šumperk;12:59'];
$trasa['3634_1'] = ['Šumperk;13:01', 'Olomouc hl.n.;14:20'];
$trasa['3635_1'] = ['Olomouc hl.n.;13:40', 'Uničov;14:23'];
$trasa['3635_2'] = ['Olomouc hl.n.;13:40', 'Šumperk;15:12'];
$trasa['3636_1'] = ['Šumperk;14:32', 'Olomouc hl.n.;16:17'];
$trasa['3637_1'] = ['Olomouc hl.n.;14:37', 'Uničov;15:17'];
$trasa['3637_2'] = ['Olomouc hl.n.;14:37', 'Uničov;15:17'];
$trasa['3638_1'] = ['Uničov;16:34', 'Olomouc hl.n.;17:17'];
$trasa['3640'] = ['Šumperk;16:30', 'Olomouc hl.n.;18:19'];
$trasa['3641_1'] = ['Olomouc hl.n.;17:37', 'Šumperk;19:10'];
$trasa['3642_1'] = ['Šumperk;18:30', 'Olomouc hl.n.;20:17'];
$trasa['3644_1'] = ['Šumperk;21:00', 'Olomouc hl.n.;22:20'];
$trasa['3645_1'] = ['Olomouc hl.n.;21:57', 'Šumperk;23:32'];
$trasa['3645_2'] = ['Olomouc hl.n.;21:57', 'Šumperk;23:32'];
$trasa['3647_1'] = ['Olomouc hl.n.;23:37', 'Šumperk;0:56'];
$trasa['3647_2'] = ['Olomouc hl.n.;23:37', 'Šumperk;0:56'];
$trasa['3660_1'] = ['Hanušovice;14:18', 'Šumperk;15:02'];
$trasa['3661_1'] = ['Šumperk;15:14', 'Hanušovice;15:54'];
$trasa['3631_2'] = ['Olomouc hl.n.;9:33', 'Šumperk;10:54'];
$trasa['3662_1'] = ['Hanušovice;16:18', 'Šumperk;17:04'];
$trasa['3663_1'] = ['Šumperk;17:12', 'Hanušovice;17:53'];
$trasa['3664_1'] = ['Hanušovice;18:06', 'Šumperk;18:49'];
$trasa['3680_1'] = ['Šumperk;4:34', 'Uničov;5:15'];
$trasa['3681_1'] = ['Olomouc hl.n.;13:59', 'Šumperk;15:12'];
$trasa['3682_1'] = ['Šumperk;5:38', 'Olomouc hl.n.;6:57'];
$trasa['3685_1'] = ['Olomouc hl.n.;15:56', 'Šumperk;17:10'];
$trasa['3687_1'] = ['Olomouc hl.n.;16:56', 'Šumperk;18:10'];
$trasa['3633_2'] = ['Olomouc hl.n.;11:37', 'Šumperk;12:59'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts802 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


