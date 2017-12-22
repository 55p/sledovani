<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['23352_1', '23353_1', '23355_1', '23356_1', '23357_1', '21964_1', '23358_1', '23359_1', '23360_1', '23361_1', '23362_1', '23363_1', '23364_1', '23365_1', '23366_1', '23367_1', '23368_1', '23369_1', '23371_1', '23372_1', '23373_1', '23374_1', '23375_1', '121967_1'];

$omezeni['121967_1'] = '6';
$omezeni['21964_1'] = '7';
$omezeni['23352_1'] = 'X';
$omezeni['23353_1'] = 'X';
$omezeni['23355_1'] = 'X';
$omezeni['23356_1'] = 'X6';
$omezeni['23357_1'] = 'X6';
$omezeni['23365_1'] = 'X';
$omezeni['23366_1'] = 'X';
$omezeni['23369_1'] = 'X';

$trasa['121967_1'] = ['Suchdol nad Odrou;20:59','Bohumín;21:46'];
$trasa['21964_1'] = ['Bohumín;6:16','Suchdol nad Odrou;7:02'];
$trasa['23352_1'] = ['Suchdol nad Odrou;4:33', 'Fulnek;4:45'];
$trasa['23353_1'] = ['Fulnek;4:49', 'Suchdol nad Odrou;5:01'];
$trasa['23355_1'] = ['Fulnek;5:38', 'Suchdol nad Odrou;5:50'];
$trasa['23356_1'] = ['Suchdol nad Odrou;5:57', 'Fulnek;6:09'];
$trasa['23357_1'] = ['Fulnek;6:16', 'Suchdol nad Odrou;6:28'];
$trasa['23358_1'] = ['Suchdol nad Odrou;7:15', 'Fulnek;7:27'];
$trasa['23359_1'] = ['Fulnek;8:38', 'Suchdol nad Odrou;8:50'];
$trasa['23360_1'] = ['Suchdol nad Odrou;9:15', 'Fulnek;9:27'];
$trasa['23361_1'] = ['Fulnek;10:38', 'Suchdol nad Odrou;10:50'];
$trasa['23362_1'] = ['Suchdol nad Odrou;11:15', 'Fulnek;11:27'];
$trasa['23363_1'] = ['Fulnek;12:30', 'Suchdol nad Odrou;12:42'];
$trasa['23364_1'] = ['Suchdol nad Odrou;13:15', 'Fulnek;13:27'];
$trasa['23365_1'] = ['Fulnek;13:38', 'Suchdol nad Odrou;13:50'];
$trasa['23366_1'] = ['Suchdol nad Odrou;14:15', 'Fulnek;14:27'];
$trasa['23367_1'] = ['Fulnek;14:38', 'Suchdol nad Odrou;14:50'];
$trasa['23368_1'] = ['Suchdol nad Odrou;15:15', 'Fulnek;15:27'];
$trasa['23369_1'] = ['Fulnek;15:38', 'Suchdol nad Odrou;15:50'];
$trasa['23371_1'] = ['Fulnek;16:38', 'Suchdol nad Odrou;16:50'];
$trasa['23372_1'] = ['Suchdol nad Odrou;17:15', 'Fulnek;17:27'];
$trasa['23373_1'] = ['Fulnek;18:38', 'Suchdol nad Odrou;18:50'];
$trasa['23374_1'] = ['Suchdol nad Odrou;19:15', 'Fulnek;19:27'];
$trasa['23375_1'] = ['Fulnek;20:30', 'Suchdol nad Odrou;20:42'];


$poznamkaObehu['121967_1'] = ['pk', 'postrk'];


$typ['21964_1'] = 'Sv';
$typ['121967_1'] = 'Sv';

$poznamkaObehu['121967_1'] = ['','Sv pk'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts843 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


