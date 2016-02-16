<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('477_1', '276_1');
$obeh[2] = array('273_1', '272_1');
$obeh[3] = array('100477_1', '725_1', '726_1');


$trasa['100477_1'] = array('Praha hl.n.;0:00','Bratislava hl.st.;5:36');
$trasa['477_1'] = array('Bratislava hl.st.;5:48','Budapest-Keleti;8:35');
$trasa['725_1'] = array('Bratislava hl.st.;14:39','Leopoldov;15:28');
$trasa['726_1'] = array('Leopoldov;18:43','Bratislava hl.st.;19:33');

$trasa['272_1'] = array('Budapest-Keleti;15:25', 'Praha hl.n.;22:08');
$trasa['273_1'] = array('Praha hl.n.;5:52', 'Budapest-Keleti;12:35');
$trasa['276_1'] = array('Budapest-Keleti;11:25', 'Praha hl.n.;18:08');

$typ[272] = 'EC';
$typ[273] = 'EC';
$typ[276] = 'EC';
$typ[477] = 'EN';
$typ[725] = 'REx';
$typ[726] = 'REx';


@$ts301 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>