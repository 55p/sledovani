<?php 
$zacatekPlatnosti = '1.4.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('3781_1', '3782_1', '5032_1', '7177_1', '7160', '7141_1', '7144_1', '5073_1');

$omezeni['7160'] = '1804';
$omezeni['3781_1'] = 'X';
$omezeni['3782_1'] = 'X';
$omezeni['5032_1'] = '1704';
$omezeni['5073_1'] = '1804';
$omezeni['7141_1'] = '1804';
$omezeni['7144_1'] = '1804';
$omezeni['7177_1'] = '1704';

$trasa['3781_1'] = array('Česká Třebová;14:26', 'Zábřeh na Moravě;15:00');
$trasa['3782_1'] = array('Zábřeh na Moravě;15:27', 'Česká Třebová;16:06');
$trasa['5032_1'] = array('Česká Třebová;21:47', 'Ústí nad Orlicí;21:58');
$trasa['5073_1'] = array('Ústí nad Orlicí;8:41', 'Česká Třebová;8:55');
$trasa['7141_1'] = array('Ústí nad Orlicí;4:42', 'Lichkov;5:59');
$trasa['7144_1'] = array('Lichkov;6:44', 'Ústí nad Orlicí;7:33');
$trasa['7160'] = array('Letohrad;4:02', 'Ústí nad Orlicí;4:23');
$trasa['7177_1'] = array('Ústí nad Orlicí;22:45', 'Letohrad;23:05');


@$ts103 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>