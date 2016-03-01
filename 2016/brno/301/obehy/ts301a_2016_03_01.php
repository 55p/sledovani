<?php 
$zacatekPlatnosti = '1.3.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1638_1', '907_1', '908_1', '863_1', '909_1', '908_2', '866_1', '875_1', '914_1', '917_1');
$obeh[2] = array('876_1', '865_1', '911_1', '904_1', '862_1', '862_2', '861_1', '907_2', '906_1', '864_1');
$obeh[3] = array('914_2', '861_2', '861_3', '917_2', '907_3', '906_2', '864_2', '877_1');

$omezeni['1638_1'] = 'X';
$omezeni['861_1'] = 'T';
$omezeni['861_2'] = 'X1';
$omezeni['861_3'] = 'X2345,6';
$omezeni['862_1'] = 'X';
$omezeni['862_2'] = '6';
$omezeni['863_1'] = 'T';
$omezeni['864_1'] = 'T';
$omezeni['864_2'] = '6';
$omezeni['865_1'] = 'X6';
$omezeni['866_1'] = 'XT';
$omezeni['875_1'] = 'XT';
$omezeni['876_1'] = 'X6';
$omezeni['877_1'] = '6';
$omezeni['904_1'] = 'X6';
$omezeni['906_1'] = 'T';
$omezeni['906_2'] = '6';
$omezeni['907_1'] = 'X';
$omezeni['907_2'] = 'T';
$omezeni['907_3'] = '6';
$omezeni['908_1'] = 'X';
$omezeni['908_2'] = 'T';
$omezeni['909_1'] = 'T';
$omezeni['911_1'] = 'X6';
$omezeni['914_1'] = '6';
$omezeni['914_2'] = 'T';
$omezeni['917_1'] = '6';
$omezeni['917_2'] = 'XT';

$trasa['1638_1'] = array('Šumperk;4:53', 'Brno hl.n.;7:46');
$trasa['861_1'] = array('Česká Třebová;7:48', 'Brno hl.n.;9:02');
$trasa['861_2'] = array('Praha hl.n.;5:55', 'Brno hl.n.;9:02');
$trasa['861_3'] = array('Pardubice hl.n.;7:04', 'Brno hl.n.;9:02');
$trasa['862_1'] = array('Brno hl.n.;18:57', 'Pardubice hl.n.;20:54');
$trasa['862_2'] = array('Brno hl.n.;18:57', 'Praha hl.n.;22:04');
$trasa['863_1'] = array('Praha hl.n.;7:55', 'Brno hl.n.;11:02');
$trasa['864_1'] = array('Brno hl.n.;16:55', 'Praha hl.n.;20:04');
$trasa['864_2'] = array('Brno hl.n.;16:55', 'Praha hl.n.;20:04');
$trasa['865_1'] = array('Praha hl.n.;9:55', 'Brno hl.n.;13:02');
$trasa['866_1'] = array('Brno hl.n.;14:57', 'Praha hl.n.;18:04');
$trasa['875_1'] = array('Praha hl.n.;20:03', 'Česká Třebová;21:52');
$trasa['876_1'] = array('Svitavy;5:00', 'Praha hl.n.;7:04');
$trasa['877_1'] = array('Praha hl.n.;20:55', 'Česká Třebová;22:38');
$trasa['904_1'] = array('Šumperk;16:09', 'Brno hl.n.;18:42');
$trasa['906_1'] = array('Šumperk;14:09', 'Brno hl.n.;16:43');
$trasa['906_2'] = array('Šumperk;14:09', 'Brno hl.n.;16:43');
$trasa['907_1'] = array('Brno hl.n.;9:18', 'Šumperk;11:39');
$trasa['907_2'] = array('Brno hl.n.;9:18', 'Šumperk;11:39');
$trasa['907_3'] = array('Brno hl.n.;9:18', 'Šumperk;11:39');
$trasa['908_1'] = array('Šumperk;12:09', 'Brno hl.n.;14:43');
$trasa['908_2'] = array('Olomouc hl.n.;13:07', 'Brno hl.n.;14:43');
$trasa['909_1'] = array('Brno hl.n.;11:18', 'Olomouc hl.n.;12:51');
$trasa['911_1'] = array('Brno hl.n.;13:18', 'Šumperk;15:39');
$trasa['914_1'] = array('Šumperk;6:09', 'Brno hl.n.;8:42');
$trasa['914_2'] = array('Olomouc hl.n.;7:07', 'Brno hl.n.;8:42');
$trasa['917_1'] = array('Brno hl.n.;19:18', 'Olomouc hl.n.;20:51');
$trasa['917_2'] = array('Brno hl.n.;19:18', 'Šumperk;21:40');


@$ts301a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>