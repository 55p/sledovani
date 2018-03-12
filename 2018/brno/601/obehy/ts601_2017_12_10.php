<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['809_1', '806_1', '1775_1', '1772_1', '805_1', '810_1', '811_1', '804_1', '1777_1', '101777_1'];
$obeh[2] = ['1778_1', '801_1', '814_1', '807_1', '808_1', '1773_1', '1776_1', '815_1', '800_1', '803_1', '812_1', '809_2', '806_2', '815_2', '800_2'];
$obeh[3] = ['1779_1', '1772_2', '805_2', '810_2', '1771_1', '1774_1', '801_2', '814_2', '807_2', '808_2', '813_1', '802_1'];

$omezeni['800_2'] = 'T';
$omezeni['800_1'] = 'X';
$omezeni['801_2'] = '6';
$omezeni['801_1'] = 'X';
$omezeni['803_1'] = '25';
$omezeni['804_1'] = '25';
$omezeni['805_1'] = '25';
$omezeni['805_2'] = 'X';
$omezeni['806_2'] = '25';
$omezeni['806_1'] = 'X';
$omezeni['807_1'] = 'X';
$omezeni['807_2'] = '25';
$omezeni['808_1'] = 'X';
$omezeni['808_2'] = '25';
$omezeni['809_1'] = 'X';
$omezeni['809_2'] = '25';
$omezeni['810_2'] = 'X';
$omezeni['810_1'] = '25';
$omezeni['811_1'] = '25';
$omezeni['812_1'] = '25';
$omezeni['814_2'] = '25';
$omezeni['814_1'] = 'X';
$omezeni['815_2'] = '25';
$omezeni['815_1'] = 'X';
$omezeni['1771_1'] = 'X';
$omezeni['1772_2'] = 'X';
$omezeni['1772_1'] = '6';
$omezeni['1773_1'] = 'X';
$omezeni['1774_1'] = 'X';
$omezeni['1775_1'] = 'X';
$omezeni['1776_1'] = 'X';
$omezeni['1777_1'] = 'T';
$omezeni['1778_1'] = 'X';
$omezeni['1779_1'] = 'X';
$omezeni['101777_1'] = 'T';

$trasa['1777_1'] = ['Brno hl.n.;19:35','Břeclav;20:15'];
$trasa['101777_1'] = ['Břeclav;20:21','Hodonín;20:33'];
$trasa['1771_1'] = ['Brno hl.n.;13:36', 'Hodonín;14:33'];
$trasa['1772_1'] = ['Hodonín;7:28', 'Brno hl.n.;8:24'];
$trasa['1772_2'] = ['Hodonín;7:28', 'Brno hl.n.;8:24'];
$trasa['1773_1'] = ['Brno hl.n.;15:35', 'Hodonín;16:33'];
$trasa['1774_1'] = ['Hodonín;15:28', 'Brno hl.n.;16:24'];
$trasa['1775_1'] = ['Brno hl.n.;17:35', 'Hodonín;18:33'];
$trasa['1776_1'] = ['Hodonín;17:28', 'Brno hl.n.;18:24'];
$trasa['1778_1'] = ['Hodonín;4:15', 'Břeclav;4:30'];
$trasa['1779_1'] = ['Břeclav;6:10', 'Hodonín;6:24'];
$trasa['800_1'] = ['Olomouc hl.n.;21:11', 'Břeclav;22:27'];
$trasa['800_2'] = ['Olomouc hl.n.;21:11', 'Břeclav;22:27'];
$trasa['801_1'] = ['Břeclav;5:30', 'Olomouc hl.n.;6:46'];
$trasa['801_2'] = ['Břeclav;5:30', 'Olomouc hl.n.;6:46'];
$trasa['802_1'] = ['Olomouc hl.n.;19:11', 'Brno hl.n.;21:24'];
$trasa['803_1'] = ['Brno hl.n.;6:36', 'Olomouc hl.n.;8:46'];
$trasa['804_1'] = ['Olomouc hl.n.;17:11', 'Brno hl.n.;19:24'];
$trasa['805_1'] = ['Brno hl.n.;8:36', 'Olomouc hl.n.;10:46'];
$trasa['805_2'] = ['Brno hl.n.;8:36', 'Olomouc hl.n.;10:46'];
$trasa['806_1'] = ['Olomouc hl.n.;15:11', 'Brno hl.n.;17:24'];
$trasa['806_2'] = ['Olomouc hl.n.;15:11', 'Brno hl.n.;17:24'];
$trasa['807_1'] = ['Brno hl.n.;10:36', 'Olomouc hl.n.;12:46'];
$trasa['807_2'] = ['Brno hl.n.;10:36', 'Olomouc hl.n.;12:46'];
$trasa['808_1'] = ['Olomouc hl.n.;13:11', 'Brno hl.n.;15:24'];
$trasa['808_2'] = ['Olomouc hl.n.;13:11', 'Brno hl.n.;15:24'];
$trasa['809_1'] = ['Brno hl.n.;12:36', 'Olomouc hl.n.;14:46'];
$trasa['809_2'] = ['Brno hl.n.;12:36', 'Olomouc hl.n.;14:46'];
$trasa['810_1'] = ['Olomouc hl.n.;11:11', 'Brno hl.n.;13:24'];
$trasa['810_2'] = ['Olomouc hl.n.;11:11', 'Brno hl.n.;13:24'];
$trasa['811_1'] = ['Brno hl.n.;14:36', 'Olomouc hl.n.;16:46'];
$trasa['812_1'] = ['Olomouc hl.n.;9:11', 'Brno hl.n.;11:24'];
$trasa['813_1'] = ['Brno hl.n.;16:36', 'Olomouc hl.n.;18:46'];
$trasa['814_1'] = ['Olomouc hl.n.;7:11', 'Brno hl.n.;9:24'];
$trasa['814_2'] = ['Olomouc hl.n.;7:11', 'Brno hl.n.;9:24'];
$trasa['815_1'] = ['Brno hl.n.;18:35', 'Olomouc hl.n.;20:46'];
$trasa['815_2'] = ['Brno hl.n.;18:35', 'Olomouc hl.n.;20:46'];
//sem patri stazene trasy


$poznamkaObehu['101777_1'] = ['pk', 'postrk'];




if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts601 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


