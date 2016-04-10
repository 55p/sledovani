<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('84230_1', '84231_1');
$obeh[2] = array('84241_1', '84240_1');
$obeh[3] = array('84270_1', '84271_1');
$obeh[4] = array('99999_1');
$obeh[5] = array('99998_1');
$obeh[6] = array('99997_1');
$obeh[7] = array('99996_1');

$omezeni['84230_1'] = '2,4,-0507,-1711';
$omezeni['84231_1'] = '2,4,-0507,-1711';
$omezeni['84240_1'] = '1,3,5,-0607,-2809,-2810';
$omezeni['84241_1'] = '1,3,5,-0607,-2809,-2810';
$omezeni['84270_1'] = '1,3,5,-0607,-2809,-2810';
$omezeni['84271_1'] = '1,3,5,-0607,-2809,-2810';

$trasa['84230_1'] = array('Kolín seř.n.;6:14','Kouřim;9:16');
$trasa['84231_1'] = array('Kouřim;10:27','Kolín seř.n.;13:13');
$trasa['84240_1'] = array('Čáslav;16:06','Kolín seř.n.;16:27');
$trasa['84241_1'] = array('Kolín seř.n.;12:06','Čáslav;13:37');
$trasa['84270_1'] = array('Kolín;06:47','Uhlířské Janovice;08:00');
$trasa['84271_1'] = array('Uhlířské Janovice;09:00','Kolín;10:14');
$trasa['99996_1'] = array('mimořádný oběh;00:00;23:59');
$trasa['99997_1'] = array('mimořádný oběh;00:00;23:59');
$trasa['99998_1'] = array('mimořádný oběh;00:00;23:59');
$trasa['99999_1'] = array('záloha Kutná Hora hl.n.;00:00;23:59');





@$ts799 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>