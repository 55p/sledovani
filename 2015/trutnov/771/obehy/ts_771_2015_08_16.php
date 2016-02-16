<?php 
$zacatekPlatnosti = null; //'x.x.201x';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('932_1', '923_1', '926_1', '929_1', '920_1');
$obeh[2] = array('1780_1', '930_1', '925_1', '924_1', '935_1');
$obeh[3] = array('934_1', '921_1', '928_1', '927_1', '922_1');
$obeh[4] = array('931_1');

$typ[1780] = 'Sp';
$typ[-1] = 'R';

$trasa['1780_1'] = array('Hradec Králové hl.n.;6:01', 'Trutnov hl.n.;7:20');
$trasa['920_1'] = array('Trutnov hl.n.;18:40', 'Hradec Králové hl.n.;19:55');
$trasa['921_1'] = array('Hradec Králové hl.n.;8:04', 'Trutnov hl.n.;9:20');
$trasa['922_1'] = array('Trutnov hl.n.;16:40', 'Hradec Králové hl.n.;17:55');
$trasa['923_1'] = array('Hradec Králové hl.n.;10:04', 'Trutnov hl.n.;11:20');
$trasa['924_1'] = array('Trutnov hl.n.;14:40', 'Hradec Králové hl.n.;15:55');
$trasa['925_1'] = array('Hradec Králové hl.n.;12:04', 'Trutnov hl.n.;13:20');
$trasa['926_1'] = array('Trutnov hl.n.;12:40', 'Hradec Králové hl.n.;13:55');
$trasa['927_1'] = array('Hradec Králové hl.n.;14:04', 'Trutnov hl.n.;15:20');
$trasa['928_1'] = array('Trutnov hl.n.;10:40', 'Hradec Králové hl.n.;11:55');
$trasa['929_1'] = array('Hradec Králové hl.n.;16:04', 'Trutnov hl.n.;17:20');
$trasa['930_1'] = array('Trutnov hl.n.;8:40', 'Hradec Králové hl.n.;9:55');
$trasa['931_1'] = array('Hradec Králové hl.n.;18:04', 'Trutnov hl.n.;19:20');
$trasa['932_1'] = array('Trutnov hl.n.;6:40', 'Hradec Králové hl.n.;7:55');
$trasa['934_1'] = array('Letohrad;5:34', 'Hradec Králové hl.n.;6:55');
$trasa['935_1'] = array('Hradec Králové hl.n.;17:05', 'Letohrad;18:31');

@$ts771 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


 ?>