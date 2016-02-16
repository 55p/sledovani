<?php 
$zacatekPlatnosti = '13.12.2015';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('668_1', '661_1', '662_1', '667_1', '620_1');
$obeh[2] = array('623_1', '664_1', '665_1', '622_1');
$obeh[3] = array('4801_1', '4816_1');
$obeh[4] = array('621_1', '666_1', '663_1', '660_1', '669_1');

$omezeni['4801_1'] = 'X';
$omezeni['4816_1'] = 'X';
$omezeni['620_1'] = 'X,T';
$omezeni['621_1'] = 'X6';
$omezeni['663_1'] = 'X5,25';
$omezeni['666_1'] = 'X5,25';

$trasa['4801_1'] = array('Jihlava;4:41', 'Brno hl.n.;7:10');
$trasa['4816_1'] = array('Brno hl.n.;15:39', 'Jihlava;18:23');

$trasa['620_1'] = array('Brno hl.n.;19:20', 'Jihlava;21:17');
$trasa['622_1'] = array('Brno hl.n.;17:20', 'Jihlava;19:18');
$trasa['660_1'] = array('Brno hl.n.;15:20', 'Jihlava;17:18');
$trasa['662_1'] = array('Brno hl.n.;13:20', 'Jihlava;15:18');
$trasa['664_1'] = array('Brno hl.n.;11:20', 'Jihlava;12:18');
$trasa['666_1'] = array('Brno hl.n.;9:20', 'Jihlava;11:18');
$trasa['668_1'] = array('Brno hl.n.;7:20', 'Jihlava;9:18');

$trasa['621_1'] = array('Jihlava;6:39', 'Brno hl.n.;8:36');
$trasa['623_1'] = array('Jihlava;8:39', 'Brno hl.n.;10:36');
$trasa['661_1'] = array('Jihlava;10:39', 'Brno hl.n.;12:36');
$trasa['663_1'] = array('Jihlava;12:39', 'Brno hl.n.;14:36');
$trasa['665_1'] = array('Jihlava;14:39', 'Brno hl.n.;16:36');
$trasa['667_1'] = array('Jihlava;16:39', 'Brno hl.n.;18:36');
$trasa['669_1'] = array('Jihlava;18:39', 'Brno hl.n.;20:36');

$typ[620] = $typ[621] = $typ[622] = $typ[623] = 'R';
for ($i = 660; $i < 670; $i++) {
  $typ[$i] = 'R';
}

@$ts701 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>