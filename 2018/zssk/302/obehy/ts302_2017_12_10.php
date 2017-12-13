<?php 
$zacatekPlatnosti = '10.12.2017';
$konecPlatnosti = null; //'x.x.2018 23:59:59';

$obeh[1] = ['601_1', '610_1', '719_1'];
$obeh[2] = ['767_1', '608_1', '717_1'];
$obeh[3] = ['702_1', '704_1', '605_1', '17762_1', '762_1'];
$obeh[4] = ['11093_1', '700_1', '16702_1', '603_1', '612_1'];

$omezeni['11093_1'] = '1';
$omezeni['16702_1'] = '6,2712,2812,2912,0201,0301,0401,0501,3003,0105,0805,0507,2908,0109,-3112';
$omezeni['17762_1'] = '7,0101,0204,-2412,-3112,-0104';
$omezeni['700_1'] = 'X';
$omezeni['702_1'] = 'X,-2312,-2412,-2512,-2612,-2712,-2812,-2912,-3012,-3112,-0101,-0201,-0301,-0401,-0501,-0601,-0701';
$omezeni['704_1'] = '25,2312,2412,2512,2612,2712,2812,2912,3012,3112,0101,0201,0301,0401,0501,0601,0701';
$omezeni['719_1'] = 'XT,-2412,-2512,-3112,-0601,-3003,-0104,-0109,-1509,-1711';
$omezeni['762_1'] = 'X6';

$trasa['11093_1'] = ['Bratislava hl. st.;2:50','Trenčín;4:18'];
$trasa['16702_1'] = ['Trenčín;5:34','Bratislava hl. st.;6:57'];
$trasa['17762_1'] = ['Košice;18:07','Bratislava hl. st.;0:10'];
$trasa['601_1'] = ['Bratislava hl. st.;6:03','Košice;11:53'];
$trasa['603_1'] = ['Bratislava hl. st.;8:03','Košice;13:53'];
$trasa['605_1'] = ['Bratislava hl. st.;10:03','Košice;15:53'];
$trasa['608_1'] = ['Košice;12:07','Bratislava hl. st.;17:57'];
$trasa['610_1'] = ['Košice;14:07','Bratislava hl. st.;19:57'];
$trasa['612_1'] = ['Košice;16:07','Bratislava hl. st.;21:57'];
$trasa['700_1'] = ['Trenčín;4:34','Bratislava hl. st.;5:57'];
$trasa['702_1'] = ['Žilina;4:26','Bratislava hl. st.;6:57'];
$trasa['704_1'] = ['Žilina;5:22','Bratislava hl. st.;7:57'];
$trasa['717_1'] = ['Bratislava hl. st.;20:03','Žilina;22:34'];
$trasa['719_1'] = ['Bratislava hl. st.;22:03','Trenčín;23:24'];
$trasa['762_1'] = ['Košice;18:07','Trenčín;23:08'];
$trasa['767_1'] = ['Trenčín;5:10','Košice;9:53'];



$typ['11093_1'] = 'Sv';


if (empty($jmenaVlaku)) $jmenaVlaku = [];
if (empty($zeme)) $zeme = [];

@$ts302 -> obeh (new Obeh2($obeh, ['trasa' => $trasa, 'omezeni' => $omezeni, 'typ' => $typ, 'poznamka' => $poznamkaObehu, 'jmenaVlaku' => $jmenaVlaku, 'zeme' => $zeme], $zacatekPlatnosti, $konecPlatnosti)); 

unset($obeh); 
unset($trasa); 
unset($omezeni); 
unset($zacatekPlatnosti); 
unset($konecPlatnosti);


