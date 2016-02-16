<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('28401_1', '28402_1', '28405_1', '28418_1', '28420_1');

$omezeni['28401_1'] = 'X';
$omezeni['28402_1'] = 'X';
$omezeni['28405_1'] = 'X';
$omezeni['28418_1'] = 'X1234';
$omezeni['28420_1'] = 'T';

$trasa['28401_1'] = array('Bechyně;4:16', 'Tábor;5:05');
$trasa['28402_1'] = array('Tábor;5:38', 'Bechyně;6:28');
$trasa['28405_1'] = array('Bechyně;6:41', 'Tábor;7:30');
$trasa['28418_1'] = array('Tábor;21:07', 'Bechyně;21:55');
$trasa['28420_1'] = array('Tábor;22:35', 'Bechyně;23:23');

$typ[28401] = 'Os';
$typ[28402] = 'Os';
$typ[28405] = 'Os';
$typ[28418] = 'Os';
$typ[28420] = 'Os';

@$ts143 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>