<?php 
$zacatekPlatnosti = '10.6.2018';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['11093_1', '767_1', '608_1', '717_1'];
$obeh[2] = ['200443_1', '606_1', '613_1'];
$obeh[3] = ['600_1', '607_1'];
$obeh[4] = ['602_1', '609_1', '200442_1'];
$obeh[5] = ['615_1', '604_1', '611_1', '614_1', '17614_1'];
$obeh[6] = ['702_1', '704_1', '605_1', '17762_1', '762_1'];

$omezeni['614_1'] = 'zX,-2903,-0104,-3004,-0705,-0407,-2808,-3110';
$omezeni['702_1'] = 'X';
$omezeni['704_1'] = '25';
$omezeni['762_1'] = 'X6,0101,-0204';
$omezeni['11093_1'] = '1';
$omezeni['17614_1'] = 'z25,2903,0104,3004,0705,0407,2808,3110';
$omezeni['17762_1'] = '7,0204,-0104';

$trasa['200442_1'] = ['Košice;22:07','Žilina;1:16'];
$trasa['200443_1'] = ['Žilina;5:00','Košice;8:25'];
$trasa['600_1'] = ['Košice;4:07','Bratislava hl. st.;9:57'];
$trasa['602_1'] = ['Košice;6:07','Bratislava hl. st.;11:57'];
$trasa['604_1'] = ['Košice;8:07','Bratislava hl. st.;13:57'];
$trasa['605_1'] = ['Bratislava hl. st.;10:03','Košice;15:53'];
$trasa['606_1'] = ['Košice;10:07','Bratislava hl. st.;15:57'];
$trasa['607_1'] = ['Bratislava hl. st.;12:03','Košice;17:53'];
$trasa['608_1'] = ['Košice;12:07','Bratislava hl. st.;17:57'];
$trasa['609_1'] = ['Bratislava hl. st.;14:03','Košice;19:53'];
$trasa['611_1'] = ['Bratislava hl. st.;16:03','Košice;21:53'];
$trasa['613_1'] = ['Bratislava hl. st.;18:03','Košice;23:53'];
$trasa['614_1'] = ['Košice;23:45','Žilina;2:51'];
$trasa['615_1'] = ['Žilina;2:34','Košice;5:44'];
$trasa['702_1'] = ['Žilina;4:26','Bratislava hl. st.;6:57'];
$trasa['704_1'] = ['Žilina;5:22','Bratislava hl. st.;7:57'];
$trasa['717_1'] = ['Bratislava hl. st.;20:03','Žilina;22:34'];
$trasa['762_1'] = ['Košice;18:07','Trenčín;23:08'];
$trasa['767_1'] = ['Trenčín;5:10','Košice;9:53'];
$trasa['11093_1'] = ['Bratislava hl. st.;2:50','Trenčín;4:18'];
$trasa['17614_1'] = ['Košice;23:45','Žilina;2:51'];
$trasa['17762_1'] = ['Košice;18:07','Bratislava hl. st.;0:10'];
//sem patri stazene trasy




$typ['11093_1'] = 'Sv';
$typ['200442_1'] = 'EN';
$typ['200443_1'] = 'EN';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts302 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti); 
unset($poznamkaObehu);


