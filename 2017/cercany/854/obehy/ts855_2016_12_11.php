<?php 
$zacatekPlatnosti = '11.12.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('19101_1', '19104_1', '19143_1', '19142_1', '19111_1', '19116_1', '19145_1', '19144_1', '19117_1', '19124_1', '19123_1', '19125_1');
$obeh[2] = array('19102_1', '19103_1', '19108_1', '19110_1', '19111_2', '19116_2', '19115_1', '19122_1', '19119_1', '19128_1', '19121_1', '19130_1', '19127_1', '19129_1');
$obeh[3] = array('19100_1', '19141_1', '19104_2', '19140_1', '19107_1', '19112_1', '19113_1', '19118_1', '19147_1', '19117_2', '19146_1', '19121_2', '19126_1', '19130_2');

$omezeni['19100_1'] = 'X';
$omezeni['19101_1'] = 'X';
$omezeni['19104_1'] = 'X';
$omezeni['19104_2'] = '25';
$omezeni['19108_1'] = 'X';
$omezeni['19110_1'] = '25';
$omezeni['19111_1'] = 'X';
$omezeni['19111_2'] = '25';
$omezeni['19116_1'] = 'X';
$omezeni['19116_2'] = '25';
$omezeni['19117_1'] = 'X';
$omezeni['19117_2'] = '25';
$omezeni['19119_1'] = 'X';
$omezeni['19121_1'] = '25';
$omezeni['19121_2'] = 'X';
$omezeni['19123_1'] = '25,-2412,-3112';
$omezeni['19124_1'] = 'X';
$omezeni['19125_1'] = 'X';
$omezeni['19126_1'] = '25,-2412,-3112';
$omezeni['19127_1'] = 'X1234,-1304,-0407,-2709,-1611';
$omezeni['19128_1'] = 'X';
$omezeni['19129_1'] = 'X5,25,1304,0407,2709,1611,-2412,-3112';
$omezeni['19130_1'] = '25,-2412,-3112';
$omezeni['19130_2'] = 'X';
$omezeni['19140_1'] = 'X';
$omezeni['19141_1'] = 'X';
$omezeni['19142_1'] = 'X';
$omezeni['19143_1'] = 'X';
$omezeni['19144_1'] = 'X';
$omezeni['19145_1'] = 'X';
$omezeni['19146_1'] = 'X';
$omezeni['19147_1'] = 'X';

$trasa['19100_1'] = ['Trhový Štěpánov;3:57','Benešov u Prahy;4:49'];
$trasa['19101_1'] = ['Benešov u Prahy;4:18','Trhový Štěpánov;5:34'];
$trasa['19102_1'] = ['Trhový Štěpánov;4:53','Benešov u Prahy;5:45'];
$trasa['19103_1'] = ['Benešov u Prahy;6:14','Trhový Štěpánov;7:07'];
$trasa['19104_1'] = ['Trhový Štěpánov;5:53','Benešov u Prahy;6:45'];
$trasa['19104_2'] = ['Trhový Štěpánov;5:53','Benešov u Prahy;6:45'];
$trasa['19107_1'] = ['Benešov u Prahy;8:14','Trhový Štěpánov;9:07'];
$trasa['19108_1'] = ['Trhový Štěpánov;7:28','Benešov u Prahy;8:45'];
$trasa['19110_1'] = ['Trhový Štěpánov;7:53','Benešov u Prahy;8:45'];
$trasa['19111_1'] = ['Benešov u Prahy;10:14','Trhový Štěpánov;11:07'];
$trasa['19111_2'] = ['Benešov u Prahy;10:14','Trhový Štěpánov;11:07'];
$trasa['19112_1'] = ['Trhový Štěpánov;9:53','Benešov u Prahy;10:45'];
$trasa['19113_1'] = ['Benešov u Prahy;12:14','Trhový Štěpánov;13:07'];
$trasa['19115_1'] = ['Benešov u Prahy;14:14','Trhový Štěpánov;15:07'];
$trasa['19116_1'] = ['Trhový Štěpánov;11:53','Benešov u Prahy;12:45'];
$trasa['19116_2'] = ['Trhový Štěpánov;11:53','Benešov u Prahy;12:45'];
$trasa['19117_1'] = ['Benešov u Prahy;16:14','Trhový Štěpánov;17:07'];
$trasa['19117_2'] = ['Benešov u Prahy;16:14','Trhový Štěpánov;17:07'];
$trasa['19118_1'] = ['Trhový Štěpánov;13:53','Benešov u Prahy;14:45'];
$trasa['19119_1'] = ['Benešov u Prahy;17:17','Trhový Štěpánov;18:07'];
$trasa['19121_1'] = ['Benešov u Prahy;18:14','Trhový Štěpánov;19:07'];
$trasa['19121_2'] = ['Benešov u Prahy;18:14','Trhový Štěpánov;19:07'];
$trasa['19122_1'] = ['Trhový Štěpánov;15:53','Benešov u Prahy;16:45'];
$trasa['19123_1'] = ['Benešov u Prahy;20:04','Trhový Štěpánov;21:07'];
$trasa['19124_1'] = ['Trhový Štěpánov;17:33','Benešov u Prahy;18:45'];
$trasa['19125_1'] = ['Benešov u Prahy;21:04','Trhový Štěpánov;22:05'];
$trasa['19126_1'] = ['Trhový Štěpánov;17:53','Benešov u Prahy;18:45'];
$trasa['19127_1'] = ['Benešov u Prahy;22:14','Trhový Štěpánov;23:05'];
$trasa['19128_1'] = ['Trhový Štěpánov;18:33','Benešov u Prahy;19:45'];
$trasa['19129_1'] = ['Benešov u Prahy;22:44','Trhový Štěpánov;23:35'];
$trasa['19130_1'] = ['Trhový Štěpánov;19:53','Benešov u Prahy;20:45'];
$trasa['19130_2'] = ['Trhový Štěpánov;19:53','Benešov u Prahy;20:45'];
$trasa['19140_1'] = ['Vlašim;6:59','Benešov u Prahy;7:35'];
$trasa['19141_1'] = ['Benešov u Prahy;5:14','Vlašim;5:30'];
$trasa['19142_1'] = ['Vlašim;9:09','Benešov u Prahy;9:45'];
$trasa['19143_1'] = ['Benešov u Prahy;7:04','Vlašim;7:41'];
$trasa['19144_1'] = ['Vlašim;15:09','Benešov u Prahy;15:45'];
$trasa['19145_1'] = ['Benešov u Prahy;13:14','Vlašim;13:51'];
$trasa['19146_1'] = ['Vlašim;17:09','Benešov u Prahy;17:45'];
$trasa['19147_1'] = ['Benešov u Prahy;15:14','Vlašim;15:51'];






@$ts855 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>