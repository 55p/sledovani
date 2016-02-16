<?php 
$zacatekPlatnosti = '10.8.2015';
$konecPlatnosti = '31.8.2015 23:59:59';

$obeh['18/17'] = array('1904_1', '10430_1', '10429_1');

$omezeni['10429_1'] = 'X';
$omezeni['10430_1'] = 'X';
$omezeni['1904_1'] = 'X';

$typ[1904] = $typ[10430] = $typ[10429] = 'Sp';

$trasa[1904] = array('Nymburk hl.n.;5:59', 'Poříčany;6:21');
$trasa[10430] = array('Poříčany;7:20', 'Praha Masarykovo nádraží;7:54');
$trasa[10429] = array('Praha Masarykovo nádraží;15:18', 'Nymburk hl.n.;16:28');

@$ts442 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);

?>