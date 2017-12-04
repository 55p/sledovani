<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['2993_1', '3400_1', '1603_1', '1604_1', '1609_1', '1608_1', '1613_1', '1612_1', '1617_1', '2996_1', '28912_1', '2853_1', '2854_1', '2855_1', '2856_1', '2841_1', '2858_1', '2845_1', '2860_1', '3421_1', '2862_1', '2857_1', '2864_1', '28909_1', '3423_1', '3430_1', '3431_1', '2840_1', '28919_1'];

$omezeni['1603_1'] = 'X';
$omezeni['1604_1'] = 'X';
$omezeni['1608_1'] = 'X';
$omezeni['1609_1'] = 'X';
$omezeni['1612_1'] = 'X';
$omezeni['1613_1'] = 'X';
$omezeni['1617_1'] = 'X';
$omezeni['2840_1'] = 'T';
$omezeni['2841_1'] = '25';
$omezeni['2845_1'] = '25';
$omezeni['2853_1'] = '25';
$omezeni['2854_1'] = '25';
$omezeni['2855_1'] = '25';
$omezeni['2856_1'] = '25';
$omezeni['2857_1'] = '6';
$omezeni['2858_1'] = '25';
$omezeni['2860_1'] = '25';
$omezeni['2862_1'] = '6';
$omezeni['2864_1'] = '6';
$omezeni['28909_1'] = '6';
$omezeni['28912_1'] = '25';
$omezeni['28919_1'] = 'T';
$omezeni['2993_1'] = 'X13';
$omezeni['2996_1'] = 'X25';
$omezeni['3400_1'] = 'X';
$omezeni['3421_1'] = '6';
$omezeni['3423_1'] = 'T';
$omezeni['3430_1'] = 'T';
$omezeni['3431_1'] = 'T';

$trasa['28909_1'] = ['Ostrava-Svinov;19:46','Bohumín;20:00'];
$trasa['28912_1'] = ['Bohumín;7:17','Ostrava-Svinov;7:41'];
$trasa['28919_1'] = ['Ostrava-Svinov;22:55','Bohumín;23:08'];
$trasa['2993_1'] = ['Bohumín;3:27','Český Těšín;4:01'];
$trasa['2996_1'] = ['Český Těšín;19:55','Bohumín;20.29'];
$trasa['3421_1'] = ['Ostrava-Svinov;15.50','Havířov;16.16'];
$trasa['3423_1'] = ['Ostrava-Svinov;16.20','Český Těšín;17.11'];
$trasa['1603_1'] = ['Opava východ;6:15', 'Český Těšín;7:41'];
$trasa['1604_1'] = ['Český Těšín;8:10', 'Opava východ;9:36'];
$trasa['1608_1'] = ['Český Těšín;12:10', 'Opava východ;13:36'];
$trasa['1609_1'] = ['Opava východ;10:15', 'Český Těšín;11:41'];
$trasa['1612_1'] = ['Třinec;16:01', 'Opava východ;17:36'];
$trasa['1613_1'] = ['Opava východ;14:15', 'Třinec;15:48'];
$trasa['1617_1'] = ['Opava východ;18:15', 'Český Těšín;19:43'];
$trasa['2840_1'] = ['Český Těšín;21:56', 'Ostrava-Svinov;22:46'];
$trasa['2841_1'] = ['Ostrava-Svinov;11:50', 'Havířov;12:18'];
$trasa['2845_1'] = ['Ostrava-Svinov;13:50', 'Havířov;14:16'];
$trasa['2853_1'] = ['Ostrava-Svinov;7:50', 'Havířov;8:16'];
$trasa['2854_1'] = ['Havířov;8:46', 'Ostrava-Svinov;9:09'];
$trasa['2855_1'] = ['Ostrava-Svinov;9:50', 'Havířov;10:17'];
$trasa['2856_1'] = ['Havířov;10:43', 'Ostrava-Svinov;11:04'];
$trasa['2857_1'] = ['Ostrava-Svinov;17:50', 'Havířov;18:16'];
$trasa['2858_1'] = ['Havířov;12:43', 'Ostrava-Svinov;13:05'];
$trasa['2860_1'] = ['Havířov;14:43', 'Ostrava-Svinov;15:05'];
$trasa['2862_1'] = ['Havířov;16:43', 'Ostrava-Svinov;17:04'];
$trasa['2864_1'] = ['Havířov;18:43', 'Ostrava-Svinov;19:04'];
$trasa['3400_1'] = ['Český Těšín;4:11', 'Opava východ;5:31'];
$trasa['3430_1'] = ['Český Těšín;17:46', 'Opava východ;19:14'];
$trasa['3431_1'] = ['Opava východ;19:46', 'Český Těšín;21:11'];

$typ['2993_1'] = 'Sv';
$typ['2996_1'] = 'Sv';
$typ['28912_1'] = 'Sv';
$typ['28909_1'] = 'Sv';
$typ['28919_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts443 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


