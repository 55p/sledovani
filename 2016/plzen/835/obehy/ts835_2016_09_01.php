<?php 
$zacatekPlatnosti = '1.9.2016';
$konecPlatnosti = null; //'x.x.201x 23:59:59';

$obeh[1] = array('8031_1', '7903_1', '7903_2', '7904_1', '7909_2', '7910_1', '7957_1', '7954_1', '7915_1', '7948_1', '7913_1', '7946_1', '7910_2', '7915_2', '7948_2', '7903_3', '7904_2', '7909_1', '7910_3');
$obeh[2] = array('7941_1', '7900_1', '7905_1', '7906_1', '7911_1', '7912_1', '7959_1', '7914_1', '7933_1', '7941_2', '7900_2', '7905_2', '7906_2', '7953_1', '7950_1', '7955_1', '7952_1', '7957_2', '7954_2', '7915_3', '7948_3', '7900_3', '7905_3', '7906_3', '7953_2', '7950_2', '7913_2', '7914_2', '107933_1');
$obeh[3] = array('7930_1', '7901_1', '7902_1', '7907_1', '7908_1', '7913_3', '7946_2', '7945_1', '7901_2', '7902_2', '7907_2', '7908_2', '7911_2', '7912_2', '7933_2', '7959_2', '107914_1');
$obeh[4] = array('7943_1', '7944_1', '17904_1', '7942_1', '17950_1', '17904_2', '17924_1', '17917_1', '7934_1', '7961_1', '7956_1');

$omezeni['107914_1'] = 'T';
$omezeni['107933_1'] = 'T';
$omezeni['17904_1'] = 'X1';
$omezeni['17904_2'] = '25';
$omezeni['17917_1'] = 'X';
$omezeni['17924_1'] = 'X';
$omezeni['17950_1'] = 'X2,X3,X4,X5';
$omezeni['7909_2'] = 'X';
$omezeni['7900_1'] = 'X';
$omezeni['7900_2'] = '6';
$omezeni['7900_3'] = 'T';
$omezeni['7901_1'] = 'X';
$omezeni['7901_2'] = 'vX,T';
$omezeni['7902_1'] = 'X';
$omezeni['7902_2'] = '25';
$omezeni['7903_1'] = 'X';
$omezeni['7903_2'] = 'X';
$omezeni['7903_3'] = '25';
$omezeni['7904_1'] = 'X';
$omezeni['7904_2'] = '25';
$omezeni['7905_1'] = 'X';
$omezeni['7905_2'] = '6';
$omezeni['7905_3'] = 'T';
$omezeni['7906_1'] = 'X';
$omezeni['7906_2'] = '6';
$omezeni['7906_3'] = 'T';
$omezeni['7907_1'] = 'X';
$omezeni['7907_2'] = '25';
$omezeni['7908_1'] = 'X';
$omezeni['7908_2'] = '25';
$omezeni['7909_1'] = '25';
$omezeni['7910_1'] = 'X';
$omezeni['7910_2'] = 'T';
$omezeni['7910_3'] = '25';
$omezeni['7911_1'] = 'X';
$omezeni['7911_2'] = '25';
$omezeni['7912_1'] = 'X';
$omezeni['7912_2'] = '25';
$omezeni['7913_1'] = '6';
$omezeni['7913_2'] = 'T';
$omezeni['7913_3'] = 'X';
$omezeni['7914_1'] = 'X';
$omezeni['7914_2'] = 'T';
$omezeni['7915_1'] = 'X';
$omezeni['7915_2'] = 'T';
$omezeni['7915_3'] = '6';
$omezeni['7930_1'] = 'X';
$omezeni['7933_1'] = 'X';
$omezeni['7933_2'] = '25';
$omezeni['7934_1'] = 'X';
$omezeni['7941_1'] = 'X';
$omezeni['7941_2'] = '6';
$omezeni['7942_1'] = 'vX,T';
$omezeni['7943_1'] = 'X';
$omezeni['7944_1'] = 'X1';
$omezeni['7945_1'] = 'X1';
$omezeni['7946_1'] = '6';
$omezeni['7946_2'] = 'X';
$omezeni['7948_1'] = 'X';
$omezeni['7948_2'] = 'T';
$omezeni['7948_3'] = '6';
$omezeni['7950_1'] = '6';
$omezeni['7950_2'] = 'T';
$omezeni['7952_1'] = '6';
$omezeni['7953_1'] = '6';
$omezeni['7953_2'] = 'T';
$omezeni['7954_1'] = 'X';
$omezeni['7954_2'] = '6';
$omezeni['7955_1'] = '6';
$omezeni['7956_1'] = 'X';
$omezeni['7957_1'] = 'X';
$omezeni['7957_2'] = '6';
$omezeni['7959_1'] = 'X';
$omezeni['7959_2'] = 'T';
$omezeni['7961_1'] = 'X';
$omezeni['8031_1'] = 'X';

$trasa['107914_1'] = array('Písek;21:09','Protivín;21:24');

$poznamkaObehu['107933_1'] = array('pk', 'postrk');
$poznamkaObehu['107914_1'] = array('pk', 'postrk');
$poznamkaObehu['17904_1'] = array('pk', 'postrk');
$poznamkaObehu['17950_1'] = array('pk', 'postrk');


$trasa['17904_1'] = array('Březnice;7:18', 'Strakonice;8:45');
$trasa['17904_2'] = array('Blatná;8:04', 'Strakonice;8:45');
$trasa['17917_1'] = array('Strakonice;19:10', 'Březnice;20:30');
$trasa['17924_1'] = array('Blatná;18:04', 'Strakonice;18:45');
$trasa['17950_1'] = array('Březnice;7:11', 'Blatná;7:41');
$trasa['7900_1'] = array('Zdice;4:48', 'Protivín;7:23');
$trasa['7900_2'] = array('Zdice;4:48', 'Protivín;7:23');
$trasa['7900_3'] = array('Březnice;6:01', 'Protivín;7:23');
$trasa['7901_1'] = array('Písek;5:00', 'Březnice;5:47');
$trasa['7901_2'] = array('Březnice;5:56', 'Zdice;6:52');
$trasa['7902_1'] = array('Zdice;7:08', 'Protivín;9:24');
$trasa['7902_2'] = array('Zdice;7:08', 'Protivín;9:24');
$trasa['7903_1'] = array('České Budějovice;4:58', 'Beroun;8:28');
$trasa['7903_2'] = array('České Budějovice;4:58', 'Beroun;8:28');
$trasa['7903_3'] = array('Protivín;5:52', 'Beroun;8:28');
$trasa['7904_1'] = array('Beroun;8:58', 'Protivín;11:24');
$trasa['7904_2'] = array('Beroun;8:58', 'Protivín;11:24');
$trasa['7905_1'] = array('Protivín;8:35', 'Beroun;10:55');
$trasa['7905_2'] = array('Protivín;8:35', 'Beroun;10:55');
$trasa['7905_3'] = array('Protivín;8:35', 'Beroun;10:55');
$trasa['7906_1'] = array('Beroun;11:04', 'Protivín;13:24');
$trasa['7906_2'] = array('Beroun;11:04', 'Protivín;13:24');
$trasa['7906_3'] = array('Beroun;11:04', 'Protivín;13:24');
$trasa['7907_1'] = array('Protivín;10:35', 'Beroun;12:55');
$trasa['7907_2'] = array('Protivín;10:35', 'Beroun;12:55');
$trasa['7908_1'] = array('Beroun;12:58', 'Protivín;15:24');
$trasa['7908_2'] = array('Beroun;12:58', 'Březnice;14:12');
$trasa['7909_1'] = array('Protivín;12:35', 'Beroun;14:55');
$trasa['7910_1'] = array('Beroun;14:58', 'Protivín;17:24');
$trasa['7910_2'] = array('Beroun;14:58', 'Protivín;17:24');
$trasa['7910_3'] = array('Beroun;14:58', 'Protivín;17:24');
$trasa['7911_1'] = array('Protivín;14:35', 'Beroun;16:55');
$trasa['7911_2'] = array('Březnice;15:43', 'Beroun;16:55');
$trasa['7912_1'] = array('Beroun;16:58', 'Protivín;19:24');
$trasa['7912_2'] = array('Beroun;16:58', 'Protivín;19:24');
$trasa['7913_1'] = array('Březnice;17:43', 'Beroun;18:55');
$trasa['7913_2'] = array('Protivín;16:35', 'Beroun;18:55');
$trasa['7913_3'] = array('Protivín;16:35', 'Beroun;18:55');
$trasa['7914_1'] = array('Písek;21:09', 'Protivín;21:24');
$trasa['7914_2'] = array('Beroun;18:58', 'Protivín;21:24');
$trasa['7915_1'] = array('Protivín;18:35', 'Beroun;20:56');
$trasa['7915_2'] = array('Protivín;18:35', 'Beroun;20:56');
$trasa['7915_3'] = array('Protivín;18:35', 'Beroun;20:56');
$trasa['7930_1'] = array('Březnice;4:07', 'Písek;4:55');
$trasa['7933'] = array('Protivín;22:13', 'Březnice;23:15');
$trasa['7934_1'] = array('Březnice;21:40', 'Protivín;22:45');
$trasa['7941_1'] = array('Březnice;3:51', 'Zdice;4:45');
$trasa['7941_2'] = array('Březnice;3:51', 'Zdice;4:45');
$trasa['7942_1'] = array('Zdice;5:56', 'Březnice;7:05');
$trasa['7943_1'] = array('Březnice;4:57', 'Zdice;5:53');
$trasa['7944_1'] = array('Zdice;5:56', 'Březnice;7:05');
$trasa['7945_1'] = array('Březnice;5:49', 'Zdice;6:45');
$trasa['7946_1'] = array('Beroun;19:56', 'Březnice;21:02');
$trasa['7946_2'] = array('Beroun;19:56', 'Březnice;21:02');
$trasa['7948_1'] = array('Beroun;21:58', 'Březnice;23:02');
$trasa['7948_2'] = array('Beroun;21:58', 'Březnice;23:02');
$trasa['7948_3'] = array('Beroun;21:58', 'Březnice;23:02');
$trasa['7950_1'] = array('Písek;15:09', 'Protivín;15:24');
$trasa['7950_2'] = array('Písek;15:09', 'Protivín;15:24');
$trasa['7952_1'] = array('Písek;17:09', 'Protivín;17:24');
$trasa['7953_1'] = array('Protivín;14:35', 'Písek;14:49');
$trasa['7953_2'] = array('Protivín;14:35', 'Písek;14:49');
$trasa['7954_1'] = array('Písek;18:09', 'Protivín;18:24');
$trasa['7954_2'] = array('Písek;18:09', 'Protivín;18:24');
$trasa['7955_1'] = array('Protivín;16:35', 'Písek;16:49');
$trasa['7956_1'] = array('Písek;23:43', 'Protivín;23:58');
$trasa['7957_1'] = array('Protivín;17:43', 'Písek;17:57');
$trasa['7957_2'] = array('Protivín;17:43', 'Písek;17:57');
$trasa['7959_1'] = array('Protivín;20:35', 'Písek;20:49');
$trasa['7959_2'] = array('Protivín;20:35', 'Písek;20:49');
$trasa['7961_1'] = array('Protivín;23:25', 'Písek;23:40');
$trasa['8031_1'] = array('Protivín;4:09', 'České Budějovice;4:52');
$trasa['7909_2'] = array('Protivín;12:35', 'Beroun;14:55');



@$ts835 -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>