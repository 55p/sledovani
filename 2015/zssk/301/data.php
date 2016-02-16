<?php
$debug = 0;

$poznamkaObehu['124_1'] = array('', 'Bečva');
$poznamkaObehu['125_1'] = array('', 'Bečva');
$poznamkaObehu['126_1'] = array('', 'Vsacan');
$poznamkaObehu['127_1'] = array('', 'Vsacan');
$poznamkaObehu['272_1'] = array('', 'Csárdás');
$poznamkaObehu['273_1'] = array('', 'Csárdás');
$poznamkaObehu['276_1'] = array('', 'Slovan');
$poznamkaObehu['277_1'] = array('', 'Slovan');
$poznamkaObehu['442_1'] = array('', 'Bohemia');
$poznamkaObehu['443_1'] = array('', 'Bohemia');
$poznamkaObehu['100442_1'] = array('', 'Bohemia');
$poznamkaObehu['100443_1'] = array('', 'Bohemia');
$poznamkaObehu['476_1'] = array('', 'Metropol');
$poznamkaObehu['100476_1'] = array('', 'Metropol');
$poznamkaObehu['477_1'] = array('', 'Metropol');
$poznamkaObehu['560_1'] = array('', 'Šohaj');
$poznamkaObehu['561_1'] = array('', 'Šohaj');
$poznamkaObehu['1700'] = array('', 'Vršatec');

$trasa['124_1'] = array('Žilina;9:38', 'Praha hl.n.;14:49');
$trasa['125_1'] = array('Praha hl.n.;13:19', 'Žilina;18:22');
$trasa['126_1'] = array('Žilina;7:38', 'Praha hl.n.;12:49');
$trasa['127_1'] = array('Praha hl.n.;15:19', 'Žilina;20:22');
$trasa['272_1'] = array('Budapest-Keleti pu;15:25', 'Praha hl.n.;22:24');
$trasa['273_1'] = array('Praha hl.n.;5:42', 'Budapest-Keleti pu;12:35');
$trasa['276_1'] = array('Budapest-Keleti pu;11:25', 'Praha hl.n.;18:41');
$trasa['277_1'] = array('Praha hl.n.;9:42', 'Budapest-Keleti pu;16:35');
$trasa['442_1'] = array('Košice;22:14', 'Liptovský Mikuláš;0:13');
$trasa['100442_1'] = array('Liptovský Mikuláš;0:15', 'Praha hl.n.;7:52');
$trasa['443_1'] = array('Praha hl.n.;23:08', 'Pardubice hl.n.;0:17');
$trasa['100443_1'] = array('Pardubice hl.n.;0:19', 'Košice;8:11');
$trasa['476_1'] = array('Bratislava hl.st.;22:58', 'Břeclav;23:52');
$trasa['100476_1'] = array('Břeclav;0:19', 'Praha hl.n.;4:10');
$trasa['477_1'] = array('Praha hl.n.;0:00;23:50', 'Budapest-Keleti pu;8:35');
$trasa['560_1'] = array('Staré Město u Uherského Hradiště;7:26', 'Praha hl.n.;10:49');
$trasa['561_1'] = array('Praha hl.n.;17:19', 'Staré Město u Uherského Hradiště;20:33');
$trasa['606_1'] = array('Košice;10:08', 'Bratislava hl.st.;16:05');
$trasa['609_1'] = array('Bratislava hl.st.;13:55', 'Košice;19:46');
$trasa['702'] = array('Žilina;4:25', 'Bratislava hl.st.;7:05');
$trasa['704_1'] = array('Žilina;5:25', 'Bratislava hl.st.;8:05');
$trasa['705'] = array('Bratislava hl.st.;16:55', 'Žilina;19:35');
$trasa['709_1'] = array('Bratislava hl.st.;19:55', 'Žilina;22:35');
$trasa['1700'] = array('Žilina;16:23', 'Bratislava hl.st.;19:18');
$trasa['11091'] = array('Bratislava Nové Mesto;1:07', 'Žilina;3:45');

$omezeni[-1] = '';
$typ[442] = $typ[443] = $typ[609] = $typ[606] = $typ[704] = $typ[709] = $typ[702] = $typ[705] = $typ[1700] = 'R';
$typ[476] = $typ[477] = 'EN';
$typ[560] = $typ[561] = 'IC';
$typ[-1] = 'EC';

$typ[11091] = 'Sv';

$omezeni[702] = $omezeni[705] = 'X';
$omezeni[11091] = '1';
$omezeni[1700] = '7';

// ---------------------------------------------------------------


$obeh[1] = array('609_1', '442_1');
$obeh[2] = array('100442_1', '277_1', '476_1');
$obeh[3] = array('100476_1', '273_1', '272_1');
$obeh[4] = array('477_1', '276_1', '443_1');
$obeh[5] = array('100443_1', '606_1');


$sk = $skupiny[] = new TS('TS 301');
$sk
->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, NULL, NULL));
unset($obeh);


// ---------------------------------------------------------------

$obeh[1] = array('704_1', '709_1');
$obeh[2] = array('126_1', '127_1');
$obeh[3] = array('124_1', '561_1');
$obeh[4] = array('560_1', '125_1');

$sk = $skupiny[] = new TS('TS 304');

$sk
->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, NULL, '13.6.2015 23:59:59'));

unset($obeh);
$obeh[1] = array('704_1', '709_1');
$obeh[2] = array('124_1', '561_1');
$obeh[3] = array('560_1', '125_1');

$sk
->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '14.6.2015'));


unset($obeh);
$sk = $skupiny[] = new TS('TS 310');

$obeh[1] = array('126_1', '127_1');
$obeh[2] = array(11091, 702, 705, 1700);

$sk
->obeh(new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, '14.6.2015'));

@include 'spolecne/laky_vse.php';

?>