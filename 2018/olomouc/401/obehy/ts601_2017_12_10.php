<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['3700_1', '3700_2', '3715_1', '3716_1', '3725_1', '3728_1', '3739_1', '3746_1', '3747_1'];
$obeh[2] = ['3704_1', '3704_2', '3717_1', '3722_1', '3731_1', '3736_1', '3731_2', '3736_2', '3753_1', '3754_1'];
$obeh[3] = ['3703_1', '3712_1', '3712_2', '3719_1', '3724_1', '3733_1', 3750, '3755_1', '3755_2'];

$omezeni['3700_1'] = 'X6';
$omezeni['3700_2'] = 'T,-2512,-0101';
$omezeni['3703_1'] = 'X';
$omezeni['3704_1'] = 'X';
$omezeni['3704_2'] = '25';
$omezeni['3712_1'] = 'X';
$omezeni['3712_2'] = '25';
$omezeni['3731_1'] = 'X';
$omezeni['3731_2'] = '25';
$omezeni['3736_1'] = 'X';
$omezeni['3736_2'] = '25';
$omezeni['3747_1'] = 'zX';
$omezeni['3754_1'] = '6';
$omezeni['3755_1'] = 'zX';
$omezeni['3755_2'] = 'z25';

$trasa['3700_1'] = ['Olomouc hl.n.;4:33', 'Kouty nad Desnou;6:06'];
$trasa['3700_2'] = ['Šumperk;5:30', 'Kouty nad Desnou;6:06'];
$trasa['3703_1'] = ['Zábřeh na Moravě;4:18', 'Nezamyslice;5:51'];
$trasa['3704_1'] = ['Nezamyslice;4:40', 'Kouty nad Desnou;7:06'];
$trasa['3704_2'] = ['Olomouc hl.n.;5:33', 'Kouty nad Desnou;7:06'];
$trasa['3712_1'] = ['Nezamyslice;6:37', 'Kouty nad Desnou;9:06'];
$trasa['3712_2'] = ['Prostějov hl.n.;7:00', 'Kouty nad Desnou;9:06'];
$trasa['3715_1'] = ['Kouty nad Desnou;6:50', 'Olomouc hl.n.;8:22'];
$trasa['3716_1'] = ['Olomouc hl.n.;8:33', 'Kouty nad Desnou;10:06'];
$trasa['3717_1'] = ['Kouty nad Desnou;7:50', 'Nezamyslice;10:18'];
$trasa['3719_1'] = ['Kouty nad Desnou;9:50', 'Nezamyslice;12:18'];
$trasa['3722_1'] = ['Nezamyslice;11:40', 'Kouty nad Desnou;14:04'];
$trasa['3724_1'] = ['Nezamyslice;12:40', 'Kouty nad Desnou;15:06'];
$trasa['3725_1'] = ['Kouty nad Desnou;11:50', 'Nezamyslice;14:18'];
$trasa['3728_1'] = ['Nezamyslice;14:40', 'Kouty nad Desnou;17:06'];
$trasa['3731_1'] = ['Kouty nad Desnou;14:50', 'Nezamyslice;17:18'];
$trasa['3731_2'] = ['Kouty nad Desnou;14:50', 'Prostějov hl.n.;16:58'];
$trasa['3733_1'] = ['Kouty nad Desnou;15:48', 'Olomouc hl.n.;17:25'];
$trasa['3736_1'] = ['Nezamyslice;17:40', 'Kouty nad Desnou;20:04'];
$trasa['3736_2'] = ['Prostějov hl.n.;18:00', 'Kouty nad Desnou;20:04'];
$trasa['3739_1'] = ['Kouty nad Desnou;17:48', 'Nezamyslice;20:18'];
$trasa['3746_1'] = ['Nezamyslice;21:55', 'Prostějov hl.n.;22:14'];
$trasa['3747_1'] = ['Prostějov hl.n.;23:03', 'Nezamyslice;23:21'];
$trasa['3750'] = ['Olomouc hl.n.;19:33', 'Kouty nad Desnou;21:07'];
$trasa['3753_1'] = ['Kouty nad Desnou;20:51', 'Olomouc hl.n.;22:42'];
$trasa['3754_1'] = ['Olomouc hl.n.;23:07', 'Šumperk;24:00'];
$trasa['3755_1'] = ['Kouty nad Desnou;21:57', 'Mohelnice;23:05'];
$trasa['3755_2'] = ['Kouty nad Desnou;21:57', 'Olomouc hl.n.;23:30'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts601 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


