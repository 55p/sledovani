<?php 
$zacatekPlatnosti = '17.2.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('2960_1', '103054_1', '2927_1', '2930_1', '2935_1', '2938_1', '2945_1', '2946_1', '2953_1', '2976_1', '2964_1', '3385_1');

$omezeni['2960_1'] = 'X';
$omezeni['2964_1'] = 'X5,25';
$omezeni['3385_1'] = 'X5,25';

$trasa['2927_1'] = array('Ostrava hl.n.;7:25', 'Mosty u Jablunkova;8:55');
$trasa['2930_1'] = array('Mosty u Jablunkova;9:02', 'Ostrava hl.n.;10:35');
$trasa['2935_1'] = array('Ostrava hl.n.;11:25', 'Mosty u Jablunkova;12:55');
$trasa['2938_1'] = array('Mosty u Jablunkova;13:02', 'Ostrava hl.n.;14:35');
$trasa['2945_1'] = array('Ostrava hl.n.;15:25', 'Mosty u Jablunkova;16:55');
$trasa['2946_1'] = array('Mosty u Jablunkova;17:02', 'Ostrava hl.n.;18:35');
$trasa['2953_1'] = array('Ostrava hl.n.;19:25', 'Mosty u Jablunkova;20:55');
$trasa['2960_1'] = array('Český Těšín;5:30', 'Ostrava hl.n.;6:24');
$trasa['2964_1'] = array('Český Těšín;21:39', 'Ostrava-Svinov;22:40');
$trasa['2976_1'] = array('Mosty u Jablunkova;21:02', 'Český Těšín;21:35');
$trasa['103054_1'] = array('Ostrava hl.n.;6:27', 'Ostrava-Svinov;6:38');
$trasa['3385_1'] = array('Ostrava-Svinov;23:09', 'Bohumín;23:32');


@$ts442a -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>