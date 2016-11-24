<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8802_1', '8807_1', '8810_1', '8815_1', '8818_1', '8823_1');
$obeh[2] = array('8806_1', '8811_1', '8814_1', '8819_1');

$omezeni['8802_1'] = 'X';
$omezeni['8806_1'] = 'X';
$omezeni['8807_1'] = 'X';
$omezeni['8810_1'] = 'X';
$omezeni['8811_1'] = 'X';
$omezeni['8814_1'] = 'X';
$omezeni['8815_1'] = 'X';
$omezeni['8818_1'] = 'X';
$omezeni['8819_1'] = 'X';
$omezeni['8823_1'] = 'X';

$trasa['8802_1'] = array('Praha hlavní nádraží; 4:17','Beroun; 5:07');
$trasa['8806_1'] = array('Praha hlavní nádraží; 5:17','Beroun; 6:07');
$trasa['8807_1'] = array('Beroun; 5:15','Praha hlavní nádraží; 6:06');
$trasa['8810_1'] = array('Praha hlavní nádraží; 6:17','Beroun; 7:07');
$trasa['8811_1'] = array('Beroun; 6:15','Praha hlavní nádraží; 7:06');
$trasa['8814_1'] = array('Praha hlavní nádraží; 7:17','Beroun; 8:07');
$trasa['8815_1'] = array('Beroun; 7:15','Praha hlavní nádraží; 8:06');
$trasa['8818_1'] = array('Praha hlavní nádraží; 8:17','Beroun; 9:07');
$trasa['8819_1'] = array('Beroun; 8:15','Praha hlavní nádraží; 9:06');
$trasa['8823_1'] = array('Beroun; 9:15','Praha hlavní nádraží; 10:06');

$poznamkaObehu['8802_1'] = array('pk', 'postrk');
$poznamkaObehu['8810_1'] = array('pk', 'postrk');
$poznamkaObehu['8818_1'] = array('pk', 'postrk');
$poznamkaObehu['8806_1'] = array('pk', 'postrk');
$poznamkaObehu['8814_1'] = array('pk', 'postrk');





@$ts111 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>