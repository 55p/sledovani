<?php 
$zacatekPlatnosti = '3.6.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['4760_1', '1973_1', '1974_1', '4762_1', '4763_1'];
$obeh[2] = ['4766_1', '5077_1', '1977_1', '1976_1', '4762_2', '4763_2', '905_1', '910_1', '911_1', '904_1', '21970_1', '4765_1'];

$omezeni['1973_1'] = 'X6';
$omezeni['1974_1'] = 'X';
$omezeni['1976_1'] = 'X';
$omezeni['1977_1'] = 'X';
$omezeni['21970_1'] = 'T';
$omezeni['4760_1'] = 'X';
$omezeni['4762_1'] = 'T';
$omezeni['4762_2'] = '6';
$omezeni['4765_1'] = 'zX';
$omezeni['4763_1'] = 'XT';
$omezeni['4763_2'] = '6';
$omezeni['4766_1'] = 'X';
$omezeni['5077_1'] = 'X';
$omezeni['904_1'] = 'T';
$omezeni['905_1'] = 'T';
$omezeni['910_1'] = 'T';
$omezeni['911_1'] = 'T';

$trasa['4765_1'] = ['Česká Třebová;22:10', 'Letovice;23:02'];

$trasa['21970_1'] = ['Brno dolní n.;19:42','Česká Třebová;20:40'];
$trasa['1973_1'] = ['Česká Třebová;5:41', 'Brno dolní nádraží;7:18'];
$trasa['1974_1'] = ['Brno dolní nádraží;15:41', 'Česká Třebová;17:17'];
$trasa['1976_1'] = ['Brno dolní nádraží;17:41', 'Česká Třebová;19:15'];
$trasa['1977_1'] = ['Česká Třebová;14:48', 'Brno dolní nádraží;16:16'];
$trasa['4760_1'] = ['Letovice;4:29', 'Česká Třebová;5:10'];
$trasa['4762_1'] = ['Letovice;5:28', 'Česká Třebová;6:10'];
$trasa['4762_2'] = ['Letovice;5:28', 'Česká Třebová;6:10'];
$trasa['4763_1'] = ['Česká Třebová;19:02', 'Letovice;19:43'];
$trasa['4763_2'] = ['Česká Třebová;19:02', 'Letovice;19:43'];
$trasa['4766_1'] = ['Letovice;6:31', 'Ústí nad Orlicí;7:32'];
$trasa['5077_1'] = ['Ústí nad Orlicí;10:18', 'Česká Třebová;10:32'];
$trasa['904_1'] = ['Šumperk;16:08', 'Brno hl.n.;18:42'];
$trasa['905_1'] = ['Brno hl.n.;7:18', 'Šumperk;9:39'];
$trasa['910_1'] = ['Šumperk;10:08', 'Brno hl.n.;12:42'];
$trasa['911_1'] = ['Brno hl.n.;13:18', 'Šumperk;15:39'];



$typ['21970_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts303 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


