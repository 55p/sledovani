<?php 
$zacatekPlatnosti = '3.6.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['823_1', '834_1', '841_1', '820_1', '827_1', '836_1', '839_1', '822_1'];
$obeh[2] = ['4951_1', '4956_1', '825_1', '838_1', '837_1', '824_1'];
$obeh[3] = ['821_1', '840_1', '833_1', '828_1', '835_1', '826_1', '849_1'];
$obeh[4] = ['848_1', '827_2', '836_2', '839_2', '840_2', '833_2', '828_2', '847_1'];
$obeh[5] = ['842_1', '831_1', '830_1', '845_1'];
$obeh[6] = ['844_1', '829_1', '832_1', '843_1', '846_1', '835_2'];
$obeh[7] = ['846_2', '835_3', '828_3', '844_2', '829_2', '832_2', '834_2', '841_2', '820_2'];

$omezeni['848_1'] = 'X6';
$omezeni['4951_1'] = 'X';
$omezeni['4956_1'] = 'X';
$omezeni['820_1'] = 'X6';
$omezeni['820_2'] = 'T';
$omezeni['821_1'] = 'X6';
$omezeni['822_1'] = 'T';
$omezeni['823_1'] = 'X6';
$omezeni['826_1'] = 'T';
$omezeni['827_1'] = 'T';
$omezeni['827_2'] = 'X6';
$omezeni['828_1'] = 'X6';
$omezeni['828_2'] = 'T';
$omezeni['828_3'] = 'X';
$omezeni['829_1'] = 'XT';
$omezeni['829_2'] = '6';
$omezeni['832_1'] = 'XT';
$omezeni['832_2'] = '6';
$omezeni['833_1'] = 'X6';
$omezeni['833_2'] = 'T';
$omezeni['834_1'] = 'X6';
$omezeni['834_2'] = 'T';
$omezeni['835_1'] = 'T';
$omezeni['835_2'] = '6';
$omezeni['835_3'] = 'X';
$omezeni['836_1'] = 'T';
$omezeni['836_2'] = 'X6';
$omezeni['839_1'] = 'T';
$omezeni['839_2'] = 'X6';
$omezeni['840_1'] = 'X6';
$omezeni['840_2'] = 'T';
$omezeni['841_1'] = 'X6';
$omezeni['841_2'] = 'T';
$omezeni['843_1'] = 'XT';
$omezeni['844_1'] = 'XT';
$omezeni['844_2'] = '6';
$omezeni['846_1'] = '6';
$omezeni['846_2'] = 'X';
$omezeni['847_1'] = 'T';

$trasa['848_1'] = ['Bohumín;4:29', 'Brno hl.n.;6:59'];
$trasa['4951_1'] = ['Brno hl.n.;5:25', 'Hrušovany u Brna;5:46'];
$trasa['4956_1'] = ['Hrušovany u Brna;6:12', 'Brno hl.n.;6:30'];
$trasa['820_1'] = ['Bohumín;20:29', 'Brno hl.n.;22:53'];
$trasa['820_2'] = ['Bohumín;20:29', 'Brno hl.n.;22:53'];
$trasa['821_1'] = ['Brno hl.n.;5:02', 'Bohumín;7:32'];
$trasa['822_1'] = ['Bohumín;19:29', 'Brno hl.n.;21:56'];
$trasa['823_1'] = ['Brno hl.n.;6:02', 'Bohumín;8:32'];
$trasa['824_1'] = ['Bohumín;18:29', 'Brno hl.n.;20:53'];
$trasa['825_1'] = ['Brno hl.n.;7:02', 'Bohumín;9:32'];
$trasa['826_1'] = ['Bohumín;17:29', 'Brno hl.n.;19:57'];
$trasa['827_1'] = ['Brno hl.n.;9:02', 'Bohumín;11:32'];
$trasa['827_2'] = ['Brno hl.n.;9:02', 'Bohumín;11:32'];
$trasa['828_1'] = ['Bohumín;16:29', 'Brno hl.n.;18:59'];
$trasa['828_2'] = ['Bohumín;16:29', 'Brno hl.n.;18:59'];
$trasa['828_3'] = ['Bohumín;16:29', 'Brno hl.n.;18:59'];
$trasa['829_1'] = ['Brno hl.n.;11:02', 'Bohumín;13:32'];
$trasa['829_2'] = ['Brno hl.n.;11:02', 'Bohumín;13:32'];
$trasa['830_1'] = ['Bohumín;15:29', 'Brno hl.n.;17:59'];
$trasa['831_1'] = ['Brno hl.n.;12:02', 'Bohumín;14:32'];
$trasa['832_1'] = ['Bohumín;14:29', 'Brno hl.n.;16:59'];
$trasa['832_2'] = ['Bohumín;14:29', 'Brno hl.n.;16:59'];
$trasa['833_1'] = ['Brno hl.n.;13:02', 'Bohumín;15:32'];
$trasa['833_2'] = ['Brno hl.n.;13:02', 'Bohumín;15:32'];
$trasa['834_1'] = ['Bohumín;13:29', 'Brno hl.n.;15:59'];
$trasa['834_2'] = ['Bohumín;13:29', 'Brno hl.n.;15:59'];
$trasa['835_1'] = ['Brno hl.n.;14:02', 'Bohumín;16:32'];
$trasa['835_2'] = ['Brno hl.n.;14:02', 'Bohumín;16:32'];
$trasa['835_3'] = ['Brno hl.n.;14:02', 'Bohumín;16:32'];
$trasa['836_1'] = ['Bohumín;12:29', 'Brno hl.n.;14:59'];
$trasa['836_2'] = ['Bohumín;12:29', 'Brno hl.n.;14:59'];
$trasa['837_1'] = ['Brno hl.n.;15:02', 'Bohumín;17:32'];
$trasa['838_1'] = ['Bohumín;10:29', 'Brno hl.n.;12:57'];
$trasa['839_1'] = ['Brno hl.n.;16:02', 'Bohumín;18:32'];
$trasa['839_2'] = ['Brno hl.n.;16:02', 'Bohumín;18:32'];
$trasa['840_1'] = ['Bohumín;8:29', 'Brno hl.n.;10:57'];
$trasa['840_2'] = ['Bohumín;8:29', 'Brno hl.n.;10:57'];
$trasa['841_1'] = ['Brno hl.n.;17:02', 'Bohumín;19:32'];
$trasa['841_2'] = ['Brno hl.n.;17:02', 'Bohumín;19:32'];
$trasa['842_1'] = ['Bohumín;7:29', 'Brno hl.n.;9:57'];
$trasa['843_1'] = ['Brno hl.n.;18:02', 'Bohumín;20:32'];
$trasa['844_1'] = ['Bohumín;6:29', 'Brno hl.n.;8:57'];
$trasa['844_2'] = ['Bohumín;6:29', 'Brno hl.n.;8:57'];
$trasa['845_1'] = ['Brno hl.n.;19:02', 'Bohumín;21:32'];
$trasa['846_1'] = ['Bohumín;5:29', 'Brno hl.n.;7:57'];
$trasa['846_2'] = ['Bohumín;5:29', 'Brno hl.n.;7:57'];
$trasa['847_1'] = ['Brno hl.n.;20:02', 'Bohumín;22:32'];
$trasa['849_1'] = ['Brno hl.n.;21:02', 'Bohumín;23:32'];



if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


