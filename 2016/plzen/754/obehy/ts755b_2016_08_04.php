<?php 
$zacatekPlatnosti = '4.8.2016';
$konecPlatnosti = '22.8.2016 23:59:59';

$obeh[1] = array('8171_1', '8180_1', '8181_1', '8182_1', '8183_1', '8184_1', '8185_1', '8170_1');

$trasa['8170_1'] = array('Nová Pec;18:35', 'České Budějovice;20:25');
$trasa['8171_1'] = array('České Budějovice;9:23', 'Nová Pec;11:05');
$trasa['8180_1'] = array('Nová Pec;12:35', 'Černá v Pošumaví;12:51');
$trasa['8181_1'] = array('Černá v Pošumaví;13:05', 'Nová Pec;13:21');
$trasa['8182_1'] = array('Nová Pec;14:35', 'Černá v Pošumaví;14:51');
$trasa['8183_1'] = array('Černá v Pošumaví;15:05', 'Nová Pec;15:21');
$trasa['8184_1'] = array('Nová Pec;16:35', 'Černá v Pošumaví;16:51');
$trasa['8185_1'] = array('Černá v Pošumaví;17:05', 'Nová Pec;17:21');

$typ[-1] = 'Os';

@$ts755b -> obeh (new Obeh($obeh, $trasa, $omezeni, $typ, $poznamkaObehu, $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


?>