<?php 
$zacatekPlatnosti = '1.8.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('4827_1', '4834_1', '1643_1', '1644_1', '3175_1', '1646_1', '104856_2');

$omezeni['4827_1'] = 'X';
$omezeni['4834_1'] = 'X';

$omezeni['1643_1'] = '6';
$omezeni['1644_1'] = '6';
$omezeni['1646_1'] = 'T';
$omezeni['3175_1'] = 'T';
$omezeni['4827_1'] = 'X';
$omezeni['4834_1'] = 'X';
$omezeni['104856_2'] = 'T';
$omezeni['70101_1'] = 'X5';

$trasa['70100_1'] = array('Brno hl.n.;21:45','Okříšky;0:37');
$trasa['70101_1'] = array('Náměšť nad Oslavou;16:23','Brno-Horní Heršpice;19:50');

$trasa['1643_1'] = array('Brno hl.n.;8:02', 'Frenštát pod Radhoštěm;10:51');
$trasa['1644_1'] = array('Frenštát pod Radhoštěm;11:31', 'Valašské Meziříčí;12:02');
$trasa['1646_1'] = array('Frenštát pod Radhoštěm;18:30', 'Brno hl.n.;21:22');
$trasa['3175_1'] = array('Valašské Meziříčí;17:23', 'Frenštát pod Radhoštěm;17:53');

$trasa['4827_1'] = array('Náměšť nad Oslavou;5:44', 'Brno hl.n.;6:37');
$trasa['4834_1'] = array('Brno hl.n.;14:39', 'Náměšť nad Oslavou;15:43');


$trasa['104856_2'] = ['Brno hl.n.;22:41', 'Náměšť nad Oslavou;23:40'];
$poznamkaObehu['104856_2'] = ['pk', 'postrk'];

@$ts704 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>