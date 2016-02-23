<?php 
$zacatekPlatnosti = '21.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array(4146, 4151, '1727_1', '4382_1', '4316_1', '1736_1', 4125);

$omezeni['1727_1'] = 'X5';
$omezeni['1736_1'] = 'T';
$omezeni['4316_1'] = 'T';
$omezeni['4382_1'] = 'X5';
$omezeni['4125'] = 'T';
$omezeni['4151'] = 'X1234';
$omezeni['4146'] = 'X1234';


$trasa['1727_1'] = array('Brno hl.n.;12:49', 'Vlárský průsmyk;16:03');
$trasa['1736_1'] = array('Veselí nad Moravou;19:45', 'Brno hl.n.;21:03');

$trasa['4316_1'] = array('Bylnice;18:05', 'Veselí nad Moravou;19:44');
$trasa['4382_1'] = array('Vlárský průsmyk;16:11', 'Bylnice;16:22');

$trasa['4125'] = array('Brno hl.n.;22:40', 'Kyjov;0:08');
$trasa['4146'] = array('Kyjov;5:25', 'Brno hl.n.;6:50');
$trasa['4151'] = array('Brno hl.n.;16:47', 'Kyjov;18:06');


@$ts706 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>