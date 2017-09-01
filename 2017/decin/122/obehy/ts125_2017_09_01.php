<?php 
$zacatekPlatnosti = '1.9.2017';
$konecPlatnosti = '30.10.2017 23:59:59';

$obeh[1] = ['1174_1', '11161_1', '11172_1', '11163_1', '11170_1', '11165_1', '11168_1', '11167_1', '11166_1', '11169_1', '11164_1', '11171_1', '11162_1', '11173_1', '11160_1', '11175_1'];

$omezeni['11175_1'] = 'XT';
$omezeni['1174_1'] = 'X6';

$trasa['11160_1'] = ['Děčín východ;20:22', 'Ústí nad Labem hl.n.;20:42'];
$trasa['11161_1'] = ['Ústí nad Labem hl.n.;7:14', 'Děčín východ;7:32'];
$trasa['11162_1'] = ['Děčín východ;18:22', 'Ústí nad Labem hl.n.;18:42'];
$trasa['11163_1'] = ['Ústí nad Labem hl.n.;9:14', 'Děčín východ;9:32'];
$trasa['11164_1'] = ['Děčín východ;16:22', 'Ústí nad Labem hl.n.;16:42'];
$trasa['11165_1'] = ['Ústí nad Labem hl.n.;11:14', 'Děčín východ;11:32'];
$trasa['11166_1'] = ['Děčín východ;14:22', 'Ústí nad Labem hl.n.;14:42'];
$trasa['11167_1'] = ['Ústí nad Labem hl.n.;13:14', 'Děčín východ;13:32'];
$trasa['11168_1'] = ['Děčín východ;12:22', 'Ústí nad Labem hl.n.;12:42'];
$trasa['11169_1'] = ['Ústí nad Labem hl.n.;15:14', 'Děčín východ;15:32'];
$trasa['11170_1'] = ['Děčín východ;10:22', 'Ústí nad Labem hl.n.;10:42'];
$trasa['11171_1'] = ['Ústí nad Labem hl.n.;17:14', 'Děčín východ;17:32'];
$trasa['11172_1'] = ['Děčín východ;8:22', 'Ústí nad Labem hl.n.;8:42'];
$trasa['11173_1'] = ['Ústí nad Labem hl.n.;19:14', 'Děčín východ;19:32'];
$trasa['1174_1'] = ['Děčín hl.n.;6:48', 'Ústí nad Labem hl.n.;7:04'];
$trasa['11175_1'] = ['Ústí nad Labem hl.n.;21:19', 'Děčín hl.n.;21:35'];

$typ['11160_1'] = 'R';
$typ['11161_1'] = 'R';
$typ['11162_1'] = 'R';
$typ['11163_1'] = 'R';
$typ['11164_1'] = 'R';
$typ['11165_1'] = 'R';
$typ['11166_1'] = 'R';
$typ['11167_1'] = 'R';
$typ['11168_1'] = 'R';
$typ['11169_1'] = 'R';
$typ['11170_1'] = 'R';
$typ['11171_1'] = 'R';
$typ['11172_1'] = 'R';
$typ['11173_1'] = 'R';
$typ['1174_1'] = 'R';
$typ['11175_1'] = 'R';

if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts125 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


