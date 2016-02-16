<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4901_1', '4600_1', '4950_1', '4903_1', '4905_1', '4906_1', '4907_1', '4908_1', '4910_1', '4911_1', '4912_1', '4913_1', '4916_1', '4918_1', '4949_1', '4667_1');

$omezeni['4600_1'] = 'T';
$omezeni['4667_1'] = '6';
$omezeni['4901_1'] = 'X';
$omezeni['4903_1'] = '6';
$omezeni['4905_1'] = 'T';
$omezeni['4906_1'] = 'X';
$omezeni['4907_1'] = 'X';
$omezeni['4908_1'] = '6';
$omezeni['4910_1'] = 'T';
$omezeni['4911_1'] = 'T';
$omezeni['4912_1'] = 'X';
$omezeni['4913_1'] = 'X';
$omezeni['4916_1'] = 'T';
$omezeni['4918_1'] = 'X';
$omezeni['4949_1'] = '6';
$omezeni['4950_1'] = '6';

$trasa['4600_1'] = array('Břeclav;4:45', 'Žďár nad Sázavou;7:26');
$trasa['4667_1'] = array('Vranovice;23:45', 'Břeclav;0:21');
$trasa['4901_1'] = array('Křižanov;4:30', 'Šakvice;6:19');
$trasa['4903_1'] = array('Žďár nad Sázavou;6:34', 'Vranovice;8:44');
$trasa['4905_1'] = array('Žďár nad Sázavou;8:34', 'Vranovice;10:44');
$trasa['4906_1'] = array('Šakvice;7:05', 'Žďár nad Sázavou;9:26');
$trasa['4907_1'] = array('Žďár nad Sázavou;10:34', 'Vranovice;12:44');
$trasa['4908_1'] = array('Vranovice;9:16', 'Brno hl.n.;9:49');
$trasa['4910_1'] = array('Vranovice;11:16', 'Žďár nad Sázavou;13:26');
$trasa['4911_1'] = array('Žďár nad Sázavou;14:34', 'Vranovice;16:44');
$trasa['4912_1'] = array('Vranovice;13:16', 'Žďár nad Sázavou;15:26');
$trasa['4913_1'] = array('Žďár nad Sázavou;16:34', 'Vranovice;18:44');
$trasa['4916_1'] = array('Vranovice;17:16', 'Křižanov;19:01');
$trasa['4918_1'] = array('Vranovice;19:16', 'Křižanov;21:01');
$trasa['4949_1'] = array('Brno hl.n.;23:10', 'Vranovice;23:40');
$trasa['4950_1'] = array('Křižanov;4:48', 'Žďár nad Sázavou;5:12');





@$ts203 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>