<?php 
$zacatekPlatnosti = '17.11.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('9031_1', '9030_1', '9035_1', '9054_1', '9053_1', '9016_1', '9019_1', '9022_1');

$omezeni['9016_1'] = 'X';
$omezeni['9019_1'] = 'X';
$omezeni['9022_1'] = 'X,-1711';
$omezeni['9030_1'] = '1711,6';
$omezeni['9031_1'] = 'X2345,6,1711,-1811';
$omezeni['9035_1'] = '1711,6';
$omezeni['9053_1'] = '1711,6';
$omezeni['9054_1'] = '1711,6';

$trasa['9016_1'] = array('Čerčany;17:06','Vrané nad Vltavou;18:27');
$trasa['9019_1'] = array('Vrané nad Vltavou;19:28','Čerčany;20:57');
$trasa['9022_1'] = array('Čerčany;22:06','Vrané nad Vltavou;23:31');
$trasa['9030_1'] = array('Čerčany;4:36','Týnec nad Sázavou;4:51');
$trasa['9031_1'] = array('Vrané nad Vltavou;0:51','Čerčany;1:51');
$trasa['9035_1'] = array('Týnec nad Sázavou;5:38','Čerčany;5:57');
$trasa['9053_1'] = array('Vrané nad Vltavo;7:32','Čerčany;8:57');
$trasa['9054_1'] = array('Čerčany;6:26','Vrané nad Vltavou;7:31');





@$ts859 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>