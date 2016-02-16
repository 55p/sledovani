<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('809_1', '806_1', '1775_1', '101772_1', '805_1', '810_1', '811_1', '804_1', '1777_1');
$obeh[2] = array('1778_1', '801_1', '814_1', '807_1', '808_1', '1773_1', '1776_1', '803_1', '812_1', '809_2', '806_2', '815', '800_1');
$obeh[3] = array('1779_1', '1772_1', '805_2', '810_2', '1771_1', '1774_1', '801_2', '814_3', '807_2', '808_2', 813, 802);

$omezeni['101772_1'] = '6';
$omezeni['1771_1'] = 'X';
$omezeni['1772_1'] = 'X';
$omezeni['1773_1'] = 'X';
$omezeni['1774_1'] = 'X';
$omezeni['1775_1'] = 'X';
$omezeni['1776_1'] = 'X';
$omezeni['1777_1'] = 'T';
$omezeni['1778_1'] = 'X';
$omezeni['1779_1'] = 'X';
$omezeni['800_1'] = 'X,T';
$omezeni['801_1'] = 'X';
$omezeni['801_2'] = '6';
$omezeni['803_1'] = '25';
$omezeni['804_1'] = '25';
$omezeni['805_1'] = '25';
$omezeni['805_2'] = 'X';
$omezeni['806_1'] = 'X';
$omezeni['806_2'] = '25';
$omezeni['807_1'] = 'X';
$omezeni['807_2'] = '25';
$omezeni['808_1'] = 'X';
$omezeni['808_2'] = '25';
$omezeni['809_1'] = 'X';
$omezeni['809_2'] = '25';
$omezeni['810_1'] = '25';
$omezeni['810_2'] = 'X';
$omezeni['811_1'] = '25';
$omezeni['812_1'] = '25';
$omezeni['814_1'] = 'X';
$omezeni['814_3'] = '25';


$poznamkaObehu['101772_1'] = array('pk Bv-Br', 'postrk Břeclav - Brno');
$poznamkaObehu['1777_1'] = array('pk Bv-Ho', 'postrk Břeclav - Hodonín');

$trasa['1771_1'] = array('Brno hl.n.;13:36', 'Hodonín;14:41');
$trasa['1772_1'] = array('Hodonín;7:17', 'Brno hl.n.;8:24');
$trasa['1773_1'] = array('Brno hl.n.;15:36', 'Hodonín;16:41');
$trasa['1774_1'] = array('Hodonín;15:17', 'Brno hl.n.;16:24');
$trasa['1775_1'] = array('Brno hl.n.;17:36', 'Hodonín;18:41');
$trasa['1776_1'] = array('Hodonín;17:17', 'Brno hl.n.;18:24');
$trasa['1777_1'] = array('Brno hl.n.;19:36', 'Hodonín;20:41');
$trasa['1778_1'] = array('Hodonín;4:16', 'Břeclav;4:31');
$trasa['1779_1'] = array('Břeclav;6:09', 'Hodonín;6:24');
$trasa['800_1'] = array('Olomouc hl.n.;21:10', 'Břeclav;22:30');
$trasa['801_1'] = array('Břeclav;5:28', 'Olomouc hl.n.;6:46');
$trasa['801_2'] = array('Břeclav;5:28', 'Olomouc hl.n.;6:46');
$trasa['802'] = array('Olomouc hl.n.;19:10', 'Brno hl.n.;21:24');
$trasa['803_1'] = array('Brno hl.n.;6:36', 'Olomouc hl.n.;8:46');
$trasa['804_1'] = array('Olomouc hl.n.;17:10', 'Brno hl.n.;19:24');
$trasa['805'] = array('Brno hl.n.;8:36', 'Olomouc hl.n.;10:46');
$trasa['806_1'] = array('Olomouc hl.n.;15:10', 'Brno hl.n.;17:24');
$trasa['806_2'] = array('Olomouc hl.n.;15:10', 'Brno hl.n.;17:24');
$trasa['807_1'] = array('Brno hl.n.;10:36', 'Olomouc hl.n.;12:46');
$trasa['807_2'] = array('Brno hl.n.;10:36', 'Olomouc hl.n.;12:46');
$trasa['808_1'] = array('Olomouc hl.n.;13:10', 'Brno hl.n.;15:24');
$trasa['808_2'] = array('Olomouc hl.n.;13:10', 'Brno hl.n.;15:24');
$trasa['809_1'] = array('Brno hl.n.;12:36', 'Olomouc hl.n.;14:46');
$trasa['809_2'] = array('Brno hl.n.;12:36', 'Olomouc hl.n.;14:46');
$trasa['810_1'] = array('Olomouc hl.n.;11:10', 'Brno hl.n.;13:24');
$trasa['810_2'] = array('Olomouc hl.n.;11:10', 'Brno hl.n.;13:24');
$trasa['811_1'] = array('Brno hl.n.;14:36', 'Olomouc hl.n.;16:46');
$trasa['812_1'] = array('Olomouc hl.n.;9:10', 'Brno hl.n.;11:24');
$trasa['814_1'] = array('Olomouc hl.n.;7:10', 'Brno hl.n.;9:24');
$trasa['814_3'] = array('Olomouc hl.n.;7:10', 'Brno hl.n.;9:24');
$trasa['813'] = array('Brno hl.n.;16:36', 'Olomouc hl.n.;18:46');
$trasa['815'] = array('Brno hl.n.;18:36', 'Olomouc hl.n.;20:46');
$trasa['1772'] = array('Hodonín;7:17', 'Brno hl.n.;8:24');

@$ts601 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>