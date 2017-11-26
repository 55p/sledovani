<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['778_1', '757_1', '770_1', '767_1', '758_1', '777_1'];
$obeh[2] = ['751_1', '774_1', '353_1', '354_1', '359_1', '552_1'];
$obeh[3] = ['553_1', '358_1', '765_1', '760_1', '779_1', '750_1'];

$omezeni['751_1'] = 'X';
$omezeni['778_1'] = 'X';

$trasa['353_1'] = ['Plzeň hl.n.;11:01','Praha hl.n.;12:31'];
$trasa['354_1'] = ['Praha hl.n.;13:33','Plzeň hl.n.;14:58'];
$trasa['358_1'] = ['Praha hl.n.;9:33','Plzeň hl.n.;10:58'];
$trasa['359_1'] = ['Plzeň hl.n.;17:01','Praha hl.n.;18:31'];
$trasa['760_1'] = ['Praha hl.n.;16:03','Klatovy;18:41'];
$trasa['767_1'] = ['Klatovy;13:17','Praha hl.n.;16:01'];
$trasa['770_1'] = ['Praha hl.n.;10:03','Klatovy;12:41'];
$trasa['779_1'] = ['Klatovy;19:17','Praha hl.n.;22:01'];

$trasa['552_1'] = ['Praha hl.n.;19:33', 'Plzeň hl.n.;20:58'];
$trasa['553_1'] = ['Plzeň hl.n.;7:01', 'Praha hl.n.;8:31'];
$trasa['750_1'] = ['Praha hl.n.;23:35', 'Plzeň hl.n.;1:09'];
$trasa['751_1'] = ['Plzeň hl.n.;4:13', 'Praha hl.n.;6:01'];
$trasa['757_1'] = ['Plzeň hl.n.;7:13', 'Praha hl.n.;9:01'];
$trasa['758_1'] = ['Praha hl.n.;17:03', 'Plzeň hl.n.;18:45'];
$trasa['765_1'] = ['Plzeň hl.n.;13:13', 'Praha hl.n.;15:01'];
$trasa['774_1'] = ['Praha hl.n.;7:03', 'Plzeň hl.n.;8:45'];
$trasa['777_1'] = ['Plzeň hl.n.;19:13', 'Praha hl.n.;21:01'];
$trasa['778_1'] = ['Praha hl.n.;5:03', 'Plzeň hl.n.;6:45'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts301 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


