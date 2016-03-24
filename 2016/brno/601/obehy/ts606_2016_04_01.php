<?php 
$zacatekPlatnosti = '1.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('874_1', '867_1', '864_1', '899_1', '872_1', '869_1', '862_1', '862_2');
$obeh[2] = array('898_1', '865_1', '866_1');
$obeh[3] = array('876_1', '863_1', '868_1', '873_1');
$obeh[4] = array('874_2', '867_2', '864_2', '899_2', '877_1', '872_2', '869_2', '862_3');
$obeh[5] = array('861_1', '861_2', '861_3', '870_1', '871_1', '875_1');

$omezeni['861_1'] = 'X1';
$omezeni['861_2'] = 'X2345,6';
$omezeni['861_3'] = 'T';
$omezeni['862_1'] = 'X';
$omezeni['862_2'] = '6';
$omezeni['862_3'] = 'T';
$omezeni['864_1'] = 'T';
$omezeni['864_2'] = 'X6';
$omezeni['866_1'] = 'X1234,6';
$omezeni['867_1'] = 'T';
$omezeni['867_2'] = 'X6';
$omezeni['869_1'] = 'X6';
$omezeni['869_2'] = 'T';
$omezeni['870_1'] = 'X1,X2,X3,X5,25';
$omezeni['871_1'] = 'X1,X2,X3,6';
$omezeni['872_1'] = 'X6';
$omezeni['872_2'] = 'T';
$omezeni['874_1'] = 'T';
$omezeni['874_2'] = 'X6';
$omezeni['875_1'] = 'X5';
$omezeni['876_1'] = '6';
$omezeni['877_1'] = '6';
$omezeni['898_1'] = 'X';
$omezeni['899_1'] = 'T';
$omezeni['899_2'] = 'X1234';


$trasa['861_1'] = array('Praha hl.n.;5:55', 'Brno hl.n.;9:02');
$trasa['861_2'] = array('Pardubice hl.n.;7:04', 'Brno hl.n.;9:02');
$trasa['861_3'] = array('Česká Třebová;7:48', 'Brno hl.n.;9:02');
$trasa['862_1'] = array('Brno hl.n.;18:57', 'Pardubice hl.n.;20:54');
$trasa['862_2'] = array('Brno hl.n.;18:57', 'Praha hl.n.;22:04');
$trasa['862_3'] = array('Brno hl.n.;18:57', 'Praha hl.n.;22:04');
$trasa['863_1'] = array('Praha hl.n.;7:55', 'Brno hl.n.;11:02');
$trasa['864_1'] = array('Brno hl.n.;16:55', 'Praha hl.n.;20:04');
$trasa['864_2'] = array('Brno hl.n.;16:55', 'Praha hl.n.;20:04');
$trasa['865_1'] = array('Praha hl.n.;9:55', 'Brno hl.n.;13:02');
$trasa['866_1'] = array('Brno hl.n.;14:57', 'Praha hl.n.;18:04');
$trasa['867_1'] = array('Praha hl.n.;11:55', 'Brno hl.n.;15:02');
$trasa['867_2'] = array('Praha hl.n.;11:55', 'Brno hl.n.;15:02');
$trasa['868_1'] = array('Brno hl.n.;12:57', 'Praha hl.n.;16:04');
$trasa['869_1'] = array('Praha hl.n.;13:55', 'Brno hl.n.;17:02');
$trasa['869_2'] = array('Praha hl.n.;13:55', 'Brno hl.n.;17:02');
$trasa['870_1'] = array('Brno hl.n.;10:57', 'Praha hl.n.;14:04');
$trasa['871_1'] = array('Praha hl.n.;15:55', 'Brno hl.n.;19:02');
$trasa['872_1'] = array('Brno hl.n.;8:57', 'Praha hl.n.;12:04');
$trasa['872_2'] = array('Brno hl.n.;8:57', 'Praha hl.n.;12:04');
$trasa['873_1'] = array('Praha hl.n.;17:55', 'Brno hl.n.;21:02');
$trasa['874_1'] = array('Brno hl.n.;6:55', 'Praha hl.n.;10:04');
$trasa['874_2'] = array('Brno hl.n.;6:55', 'Praha hl.n.;10:04');
$trasa['875_1'] = array('Praha hl.n.;20:03', 'Česká Třebová;21:52');
$trasa['876_1'] = array('Svitavy;5:00', 'Praha hl.n.;7:04');
$trasa['877_1'] = array('Praha hl.n.;20:55', 'Česká Třebová;22:38');
$trasa['898_1'] = array('Pardubice hl.n.;5:01', 'Praha hl.n.;6:06');
$trasa['899_1'] = array('Praha hl.n.;22:02', 'Pardubice hl.n.;23:07');
$trasa['899_2'] = array('Praha hl.n.;22:02', 'Pardubice hl.n.;23:07');

@$ts606 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>