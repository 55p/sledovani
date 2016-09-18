<?php 
$zacatekPlatnosti = '4.8.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('18850_1', '18803_1', '18803_2', '18852_1', '18853_1', '18854_1', '18855_1', '18856_1', '18857_1', '18856_2', '18857_2', '18858_1', '18859_1', '18860_1', '18861_1', '18862_1', '18863_1', '18864_1', '18865_1', '18864_2', '18865_2', '18866_1');

$omezeni['18803_1'] = 'X';
$omezeni['18850_1'] = 'X';
$omezeni['18856_1'] = 'X1234';
$omezeni['18856_2'] = 'X5, 6, N';
$omezeni['18857_1'] = 'X1234';
$omezeni['18857_2'] = 'X5, 6, N';
$omezeni['18864_1'] = 'X1234';
$omezeni['18864_2'] = 'X5, 6, N';
$omezeni['18865_1'] = 'X1234';
$omezeni['18865_2'] = 'X5, 6, N';


$trasa['18803_1'] = array('Lipno nad Vltavou;5:28', 'České Budějovice;7:20');
$trasa['18803_2'] = array('Lipno nad Vltavou;5:28', 'České Budějovice;7:20');
$trasa['18850_1'] = array('Vyšší Brod klášter;4:53', 'Lipno nad Vltavou;5:14');
$trasa['18852_1'] = array('Rybník;7:02', 'Lipno nad Vltavou;7:43');
$trasa['18853_1'] = array('Lipno nad Vltavou;8:10', 'Rybník;8:50');
$trasa['18854_1'] = array('Rybník;9:02', 'Lipno nad Vltavou;9:43');
$trasa['18855_1'] = array('Lipno nad Vltavou;10:10', 'Rybník;10:50');
$trasa['18856_1'] = array('Rybník;11:02', 'Vyšší Brod klášter;11:22');
$trasa['18856_2'] = array('Rybník;11:02', 'Lipno nad Vltavou;11:43');
$trasa['18857_1'] = array('Vyšší Brod klášter;12:29', 'Rybník;12:50');
$trasa['18857_2'] = array('Lipno nad Vltavou;12:10', 'Rybník;12:50');
$trasa['18858_1'] = array('Rybník;13:02', 'Vyšší Brod klášter;13:22');
$trasa['18859_1'] = array('Vyšší Brod klášter;14:29', 'Rybník;14:50');
$trasa['18860_1'] = array('Rybník;15:02', 'Vyšší Brod klášter;15:22');
$trasa['18861_1'] = array('Vyšší Brod klášter;16:33', 'Rybník;16:54');
$trasa['18862_1'] = array('Rybník;17:02', 'Vyšší Brod klášter;17:22');
$trasa['18863_1'] = array('Vyšší Brod klášter;18:29', 'Rybník;18:50');
$trasa['18864_1'] = array('Rybník;19:02', 'Vyšší Brod klášter;19:22');
$trasa['18864_2'] = array('Rybník;19:02', 'Lipno nad Vltavou;19:43');
$trasa['18865_1'] = array('Vyšší Brod klášter;20:49', 'Rybník;21:10');
$trasa['18865_2'] = array('Lipno nad Vltavou;20:30', 'Rybník;21:10');
$trasa['18866_1'] = array('Rybník;21:18', 'Vyšší Brod klášter;21:39');





@$ts243 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>