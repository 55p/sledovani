<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

/*
$obeh['Kouřim'] = array('84230_1', '84231_1');
$obeh['Uhl. Janovice'] = array('84270_1', '84271_1');
$obeh['Čáslav'] = array('84241_1', '84240_1');
$obeh['Čáslav + 236'] = array('84200_1', '84263_1', '84264_1', '84265_1', '84266_1', '84267_1', '84268_1', '84201_1');
$obeh['Kutná Kora'] = array('99999_1');
*/
$obeh['1'] = array('84230_1', '84231_1');
$obeh['2'] = array('84270_1', '84271_1');
$obeh['3'] = array('84241_1', /*'84265_2', '84266_2', */'84240_1');
$obeh['4'] = array('84201_1', '84251', '84263_1', '84264_1', '84265_1', '84266_1', '84267_1', '84268_1', '84200_1', '84240_2');
$obeh['5'] = array('99999_1');
$obeh[6] = array('99998_1');
$obeh[7] = array('99997_1');
$obeh[8] = array('99996_1');

$omezeni['84230_1'] = '2,4,-0507,-1711';
$omezeni['84231_1'] = '2,4,-0507,-1711';
$omezeni[84251] = '6';
$omezeni['84240_2'] = 6;
$omezeni['84240_1'] = '1,3,5,-0607,-2809,-2810';
$omezeni['84241_1'] = '1,3,5,-0607,-2809,-2810';
$omezeni['84270_1'] = '1,3,5,-0607,-2809,-2810';
$omezeni['84271_1'] = '1,3,5,-0607,-2809,-2810';

$omezeni['84200_1'] = 'X';
$omezeni['84201_1'] = 'X';
$omezeni['84263_1'] = 'X';
$omezeni['84264_1'] = 'X';
$omezeni['84265_1'] = 'X6';
$omezeni['84266_1'] = 'X6';
$omezeni['84265_2'] = '6';
$omezeni['84266_2'] = '6';
$omezeni['84267_1'] = 'X';
$omezeni['84268_1'] = 'X';

$trasa['84230_1'] = array('Kolín seř.n.;6:14','Kouřim;9:16');
$trasa['84231_1'] = array('Kouřim;10:27','Kolín seř.n.;13:13');
$trasa['84240'] = array('Čáslav;16:06','Kolín seř.n.;16:27');
$trasa['84241_1'] = array('Kolín seř.n.;12:06','Čáslav;13:37');
//$trasa['84241_1'] = array('Kolín seř.n.;7:57','Čáslav;8:25');
$trasa['84270_1'] = array('Kolín;06:47','Uhlířské Janovice;08:00');
$trasa['84271_1'] = array('Uhlířské Janovice;09:00','Kolín;10:14');
$trasa['99996_1'] = array('mimořádný oběh;00:00;23:59');
$trasa['99997_1'] = array('mimořádný oběh;00:00;23:59');
$trasa['99998_1'] = array('mimořádný oběh;00:00;23:59');
$trasa['99999_1'] = array('záloha Kutná Hora hl.n.;00:00;23:59');

$trasa['84201_1'] = array('Kolín seř.n.;5:21','Čáslav;5:55');
$trasa['84251'] = array('Kolín seř.n.;7:57','Čáslav;8:25');
$trasa['84200_1'] = array('Čáslav;19:53','Kolín seř.n.;20:15');
$trasa['84263_1'] = array('Čáslav místní n.;7:39','Skovice;7:58');
$trasa['84264_1'] = array('Skovice;8:49','Čáslav místní n.;9:07');
$trasa['84265'] = array('Čáslav místní n.;9:32','Skovice;9:51');
$trasa['84266'] = array('Skovice;10:48','Čáslav místní n.;11:06');
$trasa['84267_1'] = array('Čáslav místní n.;17:33','Skovice;17:52');
$trasa['84268_1'] = array('Skovice;18:48','Čáslav místní n.;19:06');




@$ts799 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>