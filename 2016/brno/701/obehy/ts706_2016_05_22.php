<?php 
$zacatekPlatnosti = '22.5.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1727_1', '4382_1', '4316_1', '1736_1');

$omezeni['1727_1'] = 'X5';
$omezeni['1736_1'] = 'T';
$omezeni['4316_1'] = 'T';
$omezeni['4382_1'] = 'X5';


$trasa['1727_1'] = array('Brno hl.n.;12:49', 'Vlárský průsmyk;16:03');
$trasa['1736_1'] = array('Veselí nad Moravou;19:45', 'Brno hl.n.;21:03');

$trasa['4316_1'] = array('Bylnice;18:05', 'Veselí nad Moravou;19:44');
$trasa['4382_1'] = array('Vlárský průsmyk;16:11', 'Bylnice;16:22');


@$ts706 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>