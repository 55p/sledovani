<?php 
$zacatekPlatnosti = '7.11.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('178_1', '171_1', '378_1', '175_1', '458_1', '477_1');
$obeh[2] = array('176_1', '173_1', '172_1', '177_1');
$obeh[3] = array('476_1', '459_1', '174_1', '379_1', '170_1', '179_1');


$trasa['170_1'] = array('Praha hl.n.;16:19', 'Děčín hl.n.;17:50');
$trasa['171_1'] = array('Děčín hl.n.;9:56', 'Praha hl.n.;11:28');
$trasa['172_1'] = array('Praha hl.n.;14:27', 'Děčín hl.n.;15:50');
$trasa['173_1'] = array('Děčín hl.n.;11:56', 'Praha hl.n.;13:28');
$trasa['174_1'] = array('Praha hl.n.;10:19', 'Děčín hl.n.;11:50');
$trasa['175_1'] = array('Děčín hl.n.;15:56', 'Praha hl.n.;17:28');
$trasa['176_1'] = array('Praha hl.n.;8:19', 'Děčín hl.n.;9:50');
$trasa['177_1'] = array('Děčín hl.n.;17:56', 'Praha hl.n.;19:28');
$trasa['178_1'] = array('Praha hl.n.;6:19', 'Děčín hl.n.;7:50');
$trasa['179_1'] = array('Děčín hl.n.;19:56', 'Praha hl.n.;21:28');
$trasa['378_1'] = array('Praha hl.n.;12:19', 'Děčín hl.n.;13:50');
$trasa['379_1'] = array('Děčín hl.n.;13:56', 'Praha hl.n.;15:28');
$trasa['458_1'] = array('Praha hl.n.;18:27', 'Děčín hl.n.;19:58');
$trasa['459_1'] = array('Děčín hl.n.;7:56', 'Praha hl.n.;9:28');
$trasa['476_1'] = array('Praha hl.n.;4:27', 'Děčín hl.n.;5:58');
$trasa['477_1'] = array('Děčín hl.n.;21:56', 'Praha hl.n.;23:28');


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