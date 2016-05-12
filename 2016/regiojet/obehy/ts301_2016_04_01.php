<?php 
$zacatekPlatnosti = '1.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('1003_1', '408_1');
$obeh[2] = array('401_1', '404_1', '409_1');
$obeh[3] = array('400_1', '405_1', '1020_1');


$trasa['1003_1'] = array('Praha hl.n.;7:46', 'Košice;15:44');
$trasa['1020_1'] = array('Košice;21:22', 'Praha hl.n.;5:58');

$trasa['400_1'] = array('Košice;5:17','Bratislava hl.st.;10:25');
$trasa['401_1'] = array('Bratislava hl.st.;5:35','Košice;10:43');
$trasa['404_1'] = array('Košice;11:17','Bratislava hl.st.;16:25');
$trasa['405_1'] = array('Bratislava hl.st.;11:35','Košice;16:43');
$trasa['408_1'] = array('Košice;17:17','Bratislava hl.st.;22:25');
$trasa['409_1'] = array('Bratislava hl.st.;17:35','Košice;22:43');


@$ts301 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>