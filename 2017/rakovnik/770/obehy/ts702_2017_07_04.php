<?php 
$zacatekPlatnosti = '4.7.2017';
$konecPlatnosti = null; //'x.x.2017 23:59:59';

$obeh[1] = ['9011_1', '9016_1'];
$obeh[2] = ['1651_1', '1650_1'];

$omezeni['1650_1'] = 'X';
$omezeni['1651_1'] = 'X';
$omezeni['9011_1'] = 'X';
$omezeni['9016_1'] = 'X';

$trasa['1650_1'] = ['Praha Holešovice;16:26', 'Louny;18:20'];
$trasa['1651_1'] = ['Louny;5:29', 'Praha Holešovice;7:27'];
$trasa['9011_1'] = ['Praha hl.n.;14:25', 'Čerčany;16:54'];
$trasa['9016_1'] = ['Čerčany;17:06', 'Praha hl.n.;19:05'];

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts702 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


