<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['4973_1', '1974_1', '4762_1', '1973_1', '905_1', '910_1', '911_1', '904_1', '4763_1'];
$obeh[2] = ['4766_1', '5077_1', '1977_1', '1976_1', '905_2', '910_2', '911_2', '904_2', '21970_1', '4762_2', '4763_2'];
$obeh[3] = ['4760_1', '1973_2', '905_3', '910_3', '912_1', '909_1', '906_1', '913_1', '902_1', '917_1'];
$obeh[4] = ['901_1', '912_2', '911_3', '904_3', '903_1', '914_1', '907_1', '906_2', '915_1', '900_1'];

$omezeni['1973_1'] = '6';
$omezeni['1973_2'] = 'X';
$omezeni['1974_1'] = 'X';
$omezeni['1976_1'] = 'X';
$omezeni['1977_1'] = 'X';
$omezeni['21970_1'] = 'T';
$omezeni['4760_1'] = 'X';
$omezeni['4762_1'] = 'T';
$omezeni['4762_2'] = '6';
$omezeni['4763_1'] = 'XT';
$omezeni['4763_2'] = '6';
$omezeni['4766_1'] = 'X';
$omezeni['4973_1'] = 'X';
$omezeni['5077_1'] = 'X';
$omezeni['900_1'] = 'T';
$omezeni['901_1'] = 'X';
$omezeni['903_1'] = '6';
$omezeni['904_1'] = '4';
$omezeni['904_2'] = 'T';
$omezeni['904_3'] = 'X';
$omezeni['905_1'] = '6';
$omezeni['905_2'] = 'T';
$omezeni['905_3'] = 'X';
$omezeni['906_1'] = 'T';
$omezeni['906_2'] = 'T';
$omezeni['907_1'] = 'T';
$omezeni['909_1'] = 'T';
$omezeni['910_1'] = '6';
$omezeni['910_2'] = 'T';
$omezeni['910_3'] = 'X';
$omezeni['911_1'] = '6';
$omezeni['911_2'] = 'T';
$omezeni['911_3'] = 'X';
$omezeni['912_1'] = 'T';
$omezeni['912_2'] = 'X';
$omezeni['914_1'] = 'T';
$omezeni['915_1'] = 'T';
$omezeni['917_1'] = '6';

$trasa['21970_1'] = ['Brno hl.n.;18:50','Česká Třebová;19:50'];
$trasa['1973_1'] = ['Česká Třebová;5:40', 'Brno hl.n.;7:14'];
$trasa['1973_2'] = ['Česká Třebová;5:40', 'Brno hl.n.;7:14'];
$trasa['1974_1'] = ['Hrušovany u Brna;15:15', 'Česká Třebová;17:19'];
$trasa['1976_1'] = ['Hrušovany u Brna;17:16', 'Česká Třebová;19:18'];
$trasa['1977_1'] = ['Česká Třebová;14:50', 'Hrušovany u Brna;16:45'];
$trasa['4760_1'] = ['Letovice;4:29', 'Česká Třebová;5:10'];
$trasa['4762_1'] = ['Letovice;5:28', 'Česká Třebová;6:10'];
$trasa['4762_2'] = ['Letovice;5:28', 'Česká Třebová;6:10'];
$trasa['4763_1'] = ['Česká Třebová;19:05', 'Letovice;19:53'];
$trasa['4763_2'] = ['Česká Třebová;19:05', 'Letovice;19:53'];
$trasa['4766_1'] = ['Letovice;6:31', 'Ústí nad Orlicí;7:34'];
$trasa['4973_1'] = ['Brno hl.n.;14:27', 'Hrušovany u Brna;14:45'];
$trasa['5077_1'] = ['Ústí nad Orlicí;10:23', 'Česká Třebová;10:35'];
$trasa['900_1'] = ['Šumperk;20:15', 'Brno hl.n.;22:36'];
$trasa['901_1'] = ['Brno hl.n.;5:23', 'Šumperk;7:41'];
$trasa['902_1'] = ['Šumperk;18:09', 'Brno hl.n.;20:38'];
$trasa['903_1'] = ['Brno hl.n.;6:28', 'Šumperk;8:41'];
$trasa['904_1'] = ['Šumperk;16:09', 'Brno hl.n.;18:43'];
$trasa['904_2'] = ['Šumperk;16:09', 'Brno hl.n.;18:43'];
$trasa['904_3'] = ['Šumperk;16:09', 'Brno hl.n.;18:43'];
$trasa['905_1'] = ['Brno hl.n.;7:18', 'Šumperk;9:41'];
$trasa['905_2'] = ['Brno hl.n.;7:18', 'Šumperk;9:41'];
$trasa['905_3'] = ['Brno hl.n.;7:18', 'Šumperk;9:41'];
$trasa['906_1'] = ['Šumperk;14:09', 'Brno hl.n.;16:43'];
$trasa['906_2'] = ['Šumperk;14:09', 'Brno hl.n.;16:43'];
$trasa['907_1'] = ['Brno hl.n.;9:18', 'Šumperk;11:41'];
$trasa['909_1'] = ['Brno hl.n.;11:18', 'Olomouc hl.n.;12:52'];
$trasa['910_1'] = ['Šumperk;10:09', 'Brno hl.n.;12:42'];
$trasa['910_2'] = ['Šumperk;10:09', 'Brno hl.n.;12:42'];
$trasa['910_3'] = ['Šumperk;10:09', 'Brno hl.n.;12:42'];
$trasa['911_1'] = ['Brno hl.n.;13:18', 'Šumperk;15:41'];
$trasa['911_2'] = ['Brno hl.n.;13:18', 'Šumperk;15:41'];
$trasa['911_3'] = ['Brno hl.n.;13:18', 'Šumperk;15:41'];
$trasa['912_1'] = ['Šumperk;8:09', 'Brno hl.n.;10:42'];
$trasa['912_2'] = ['Šumperk;8:09', 'Brno hl.n.;10:42'];
$trasa['913_1'] = ['Brno hl.n.;15:18', 'Šumperk;17:41'];
$trasa['914_1'] = ['Olomouc hl.n.;7:06', 'Brno hl.n.;8:42'];
$trasa['915_1'] = ['Brno hl.n.;17:18', 'Šumperk;19:42'];
$trasa['917_1'] = ['Brno hl.n.;19:18', 'Olomouc hl.n.;20:52'];

$typ['21970_1'] = 'Sv';

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


