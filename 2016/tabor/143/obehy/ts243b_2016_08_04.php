<?php 
$zacatekPlatnosti = '4.8.2016';
$konecPlatnosti = '22.8.2016 23:59:59';

$obeh[1] = array('19002_1', '19015_1', '19014_1', '19019_1', '19018_1', '19023_1', '19022_1', '19027_1', '19026_1', '19031_1', '19030_1', '19035_1', '19034_1', '19005_1');

$omezeni['19002_1'] = 'X5, 6, N';
$omezeni['19005_1'] = 'X5, 6, N';
$omezeni['19014_1'] = 'X5, 6, N';
$omezeni['19015_1'] = 'X5, 6, N';
$omezeni['19018_1'] = 'X5, 6, N';
$omezeni['19019_1'] = 'X5, 6, N';
$omezeni['19022_1'] = 'X5, 6, N';
$omezeni['19023_1'] = 'X5, 6, N';
$omezeni['19026_1'] = 'X5, 6, N';
$omezeni['19027_1'] = 'X5, 6, N';
$omezeni['19030_1'] = 'X5, 6, N';
$omezeni['19031_1'] = 'X5, 6, N';
$omezeni['19034_1'] = 'X5, 6, N';
$omezeni['19035_1'] = 'X5, 6, N';


$trasa['19002_1'] = array('České Budějovice;11:11', 'Lipno nad Vltavou;12:53');
$trasa['19005_1'] = array('Lipno nad Vltavou;22:53', 'České Budějovice;0:27');
$trasa['19014_1'] = array('Vyšší Brod klášter;13:37', 'Lipno nad Vltavou;14:02');
$trasa['19015_1'] = array('Lipno nad Vltavou;13:11', 'Vyšší Brod klášter;13:31');
$trasa['19018_1'] = array('Vyšší Brod klášter;14:47', 'Lipno nad Vltavou;15:12');
$trasa['19019_1'] = array('Lipno nad Vltavou;14:21', 'Vyšší Brod klášter;14:41');
$trasa['19022_1'] = array('Vyšší Brod klášter;15:57', 'Lipno nad Vltavou;16:22');
$trasa['19023_1'] = array('Lipno nad Vltavou;15:31', 'Vyšší Brod klášter;15:51');
$trasa['19026_1'] = array('Vyšší Brod klášter;17:07', 'Lipno nad Vltavou;17:32');
$trasa['19027_1'] = array('Lipno nad Vltavou;16:41', 'Vyšší Brod klášter;17:01');
$trasa['19030_1'] = array('Vyšší Brod klášter;18:17', 'Lipno nad Vltavou;18:42');
$trasa['19031_1'] = array('Lipno nad Vltavou;17:51', 'Vyšší Brod klášter;18:11');
$trasa['19034_1'] = array('Vyšší Brod klášter;20:21', 'Lipno nad Vltavou;20:45');
$trasa['19035_1'] = array('Lipno nad Vltavou;19:01', 'Vyšší Brod klášter;19:21');


@$ts243b -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>