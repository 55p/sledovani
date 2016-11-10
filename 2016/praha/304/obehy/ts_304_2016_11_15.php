<?php 
$zacatekPlatnosti = '14.11.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('178_1', '173_1', '172_1', '179_1');
$obeh[2] = array('176_1', '379_1');
$obeh[3] = array('378_1', '177_1');
$obeh['1a'] = array('459_1', '174_1', '175_1', '458_1');
$obeh['1b'] = array('476_1', '171_1', '170_1', '477_1');


$trasa['458'] = array('Praha hl.n.;18:27','Leipzig Hbf;22:26');
$trasa['170_1'] = array('Praha hl.n.;16:27','Dresden Hbf;18:44');
$trasa['172_1'] = array('Praha hl.n.;14:27','Dresden Hbf;16:44');
$trasa['378'] = array('Praha hl.n.;12:27','Dresden Hbf;14:44');
$trasa['174_1'] = array('Praha hl.n.;10:27','Dresden Hbf;12:44');
$trasa['176_1'] = array('Praha hl.n.;8:27','Dresden Hbf;10:44');
$trasa['178_1'] = array('Praha hl.n.;6:27','Dresden Hbf;8:44');
$trasa['476_1'] = array('Praha hl.n.;4:27','Dresden Hbf;6:44');

$trasa['171_1'] = array('Dresden Hbf;9:08','Praha hl.n.;11:28');
$trasa['173_1'] = array('Dresden Hbf;11:08','Praha hl.n.;13:28');
$trasa['379'] = array('Dresden Hbf;13:08','Praha hl.n.;15:28');
$trasa['175_1'] = array('Dresden Hbf;15:08','Praha hl.n.;17:28');
$trasa['177_1'] = array('Dresden Hbf;17:08','Praha hl.n.;19:28');
$trasa['179_1'] = array('Dresden Hbf;19:08','Praha hl.n.;21:28');
$trasa['477'] = array('Dresden Hbf;21:08','Praha hl.n.;23:28');
$trasa['459'] = array('Leipzig Hbf;5:57','Praha hl.n.;9:28');

$typ[170] = 'EC';
$typ[171] = 'EC';
$typ[172] = 'EC';
$typ[173] = 'EC';
$typ[174] = 'EC';
$typ[175] = 'EC';
$typ[176] = 'EC';
$typ[177] = 'EC';
$typ[178] = 'EC';
$typ[179] = 'EC';
$typ[378] = 'EC';
$typ[379] = 'EC';
$typ[458] = 'EN';
$typ[459] = 'EN';
$typ[476] = 'EN';
$typ[477] = 'EN';


@$ts304 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>