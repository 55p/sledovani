<?php 
$typ[-1] = 'EC';

$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('112_1');
$obeh[2] = array('113_1');
$obeh[3] = array('110_1');
$obeh[4] = array('111_1');
$obeh[5] = array('103_1', '102_1');
$obeh[6] = array('116_1', '104_1');
$obeh[7] = array('105_1', '117_1');


$trasa['102_1'] = array('Bohumín;17:20', 'Warszawa Wschodnia;21:31');
$trasa['103_1'] = array('Warszawa Wschodnia;6:44', 'Bohumín;10:40');
$trasa['104_1'] = array('Bohumín;11:20', 'Gdynia Glowna;18:33');
$trasa['105_1'] = array('Gdynia Glowna;9:25', 'Bohumín;16:40');
$trasa['110_1'] = array('Warszawa Wschodnia;17:38', 'Ostrava-Svinov;22:04');
$trasa['111_1'] = array('Ostrava-Svinov;5:49', 'Warszawa Wschodnia;10:17');
$trasa['112_1'] = array('Warszawa Wschodnia;13:39', 'Praha hl.n.;21:39');
$trasa['113_1'] = array('Praha hl.n.;6:24', 'Warszawa Wschodnia;14:16');
$trasa['116_1'] = array('Warszawa Wschodnia;5:29', 'Bohumín;9:41');
$trasa['117_1'] = array('Bohumín;18:10', 'Warszawa Wschodnia;22:26');



@$ts171 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>