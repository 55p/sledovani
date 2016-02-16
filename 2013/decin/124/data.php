<?php
//do pole obeh se pisi cisla vlaku
$obeh[1] = array("6451_1", 6490, "6451_2", 6452, 6453, 6454, 6940, "6403_1", "6406_1", 6409, 6410, 6413, 6414, 6417, "6418_1", "6418_2");
$obeh[2] = array(6430, "6403_2", "6406_2", 6411, 6412, 6415, 6416, 6419);
$obeh[3] = array("6402_1", 6407, 6400, 6405, 6408, 6455, 6456, 6457, 6458, 6431);
$obeh[4] = array(6401, 6404, 6443, "6402_2", 6960, 6882, 6805, 6808, 6813, 6816, 6821, 6824, 6829, 6955);

$TS["TS 124"] = $obeh;

$omezeni ["6402_1"] = $omezeni[6407] = $omezeni ["6406_1"] = $omezeni ["6403_1"] = "6, T";
$omezeni [6405] = $omezeni [6400] = $omezeni [6430] = $omezeni ["6406_2"] = $omezeni ["6403_2"] = $omezeni [6960] = "X";
$omezeni ["6940"] = $omezeni ["6403_1"] = "6, T";
$omezeni [6455] = $omezeni [6456] = $omezeni [6457] = $omezeni [6458] = "X";
$omezeni [6452] = $omezeni [6453] = $omezeni [6454] = $omezeni ["6451_2"] = "34";
$omezeni [6431] = "X1,X2,X3,X4";
$omezeni [6443] = "X2,X3,X4,X5";
$omezeni [6401] = $omezeni [6404] = "X1";
$omezeni ["6402_2"] = "X2,X3,X4,X5";
$omezeni [6882] = $omezeni [6805] = "6, T";
$omezeni [6808] = $omezeni [6813] = $omezeni [6821] = $omezeni [6816] = $omezeni [6829] = $omezeni [6824] = "6,T";
$omezeni [6955] = "5,6";
$omezeni ["6418_1"] = "49";
$omezeni ["6418_2"] = "_49";
$omezeni [6490] = $omezeni ["6451_1"] = "_34";

$typ [-1] = "Os";
$typ [6490] = "Sv";

$trasa [6490] = array("Ústí nad Labem - Střekov;5:43", "Ústí nad Labem západ;5:47");
$trasa ["6451_1"] = array("Děčín hl.n.;4:48", "Ústí nad Labem - Střekov;5:25");
$trasa ["6451_2"] = array("Děčín hl.n.;4:48", "Litoměřice město;5:44");
$trasa [6940] = array("Roudnice nad Labem;4:39", "Ústí nad Labem hl.n.;5:20");
$trasa [6453] = array("Ústí nad Labem západ;6:29", "Litoměřice město;6:50");
$trasa [6452] = array("Litoměřice město;5:56","Ústí nad Labem západ;6:22");
$trasa [6454] = array("Litoměřice město;7:02","Ústí nad Labem západ;7:27");

$trasa [6401] = array("Ústí nad Labem západ;5:03", "Lysá nad Labem;6:37");
$trasa ["6403_1"] = array("Ústí nad Labem západ;6:03", "Lysá nad Labem;7:37");
$trasa ["6403_2"] = array("Ústí nad Labem západ;6:03", "Lysá nad Labem;7:37");
$trasa [6405] = array("Ústí nad Labem západ;7:03", "Lysá nad Labem;8:37");
$trasa [6407] = array("Ústí nad Labem západ;8:03", "Lysá nad Labem;9:37");
$trasa [6409] = array("Ústí nad Labem západ;10:03", "Lysá nad Labem;11:37");
$trasa [6411] = array("Ústí nad Labem západ;12:03", "Lysá nad Labem;13:37");
$trasa [6413] = array("Ústí nad Labem západ;14:03", "Lysá nad Labem;15:37");
$trasa [6415] = array("Ústí nad Labem západ;16:03", "Lysá nad Labem;17:37");
$trasa [6417] = array("Ústí nad Labem západ;18:03", "Lysá nad Labem;19:37");
$trasa [6419] = array("Ústí nad Labem západ;20:03", "Lysá nad Labem;21:37");
$trasa [6443] = array("Mělník;5:04", "Lysá nad Labem;5:37");
$trasa [6455] = array("Ústí nad Labem západ;13:03", "Štětí;13:51");
$trasa [6457] = array("Ústí nad Labem západ;15:03", "Štětí;15:51");
$trasa [6431] = array("Ústí nad Labem západ;17:03", "Mělník;18:03");

$trasa [6430] = array("Mělník;4:51", "Ústí nad Labem západ;5:52");
    $trasa [6400] = array("Lysá nad Labem;4:58", "Ústí nad Labem západ;6:52");
$trasa ["6402_1"] = array("Lysá nad Labem;6:18", "Ústí nad Labem západ;7:52");
$trasa ["6402_2"] = array("Lysá nad Labem;6:18", "Ústí nad Labem západ;7:52");
    $trasa [6404] = array("Lysá nad Labem;6:57", "Ústí nad Labem západ;8:52");
$trasa ["6406_1"] = array("Lysá nad Labem;8:18", "Ústí nad Labem západ;9:52");
$trasa ["6406_2"] = array("Lysá nad Labem;8:18", "Ústí nad Labem západ;9:52");
    $trasa [6408] = array("Lysá nad Labem;10:18", "Ústí nad Labem západ;11:52");
    $trasa [6410] = array("Lysá nad Labem;12:18", "Ústí nad Labem západ;13:52");
    $trasa [6412] = array("Lysá nad Labem;14:18", "Ústí nad Labem západ;15:52");
    $trasa [6414] = array("Lysá nad Labem;16:18", "Ústí nad Labem západ;17:52");
    $trasa [6416] = array("Lysá nad Labem;18:18", "Ústí nad Labem západ;19:52");
$trasa ["6418_1"] = array("Lysá nad Labem;20:18", "Ústí nad Labem západ;21:52");
$trasa ["6418_2"] = array("Lysá nad Labem;20:18", "Mělník;20:50");
    $trasa [6456] = array("Štětí;14:04", "Ústí nad Labem západ;14:52");
    $trasa [6458] = array("Štětí;16:04", "Ústí nad Labem západ;16:52");


$trasa [6960] = array("Ústí nad Labem západ;14:32", "Děčín hl.n.;14:56");

$trasa [6882] = array("Ústí nad Labem hl.n.;4:05", "Most;4:55");
$trasa [6808] = array("Děčín hl.n.;8:28", "Most;9:50");
$trasa [6816] = array("Děčín hl.n.;12:28", "Most;13:50");
$trasa [6824] = array("Děčín hl.n.;16:28", "Most;17:50");
$trasa [6805] = array("Most;6:04", "Děčín hl.n.;7:28");
$trasa [6813] = array("Most;10:04", "Děčín hl.n.;11:28");
$trasa [6821] = array("Most;14:04", "Děčín hl.n.;15:28");
$trasa [6829] = array("Most;18:04", "Děčín hl.n.;19:28");
$trasa [6955] = array("Děčín hl.n.;22:34", "Roudnice nad Labem;23:38");


$lak["najbrt1"] = array(163073, 163100, 163249, 163257, 163260, 162036, 162038, 162039, 162046);
$lak["najbrt2"] = array(162014, 162018, 162040, 163077, 163079);
$lak["seda_lok"] = array(162011, 163094);
$lak["zelena_svetla"] = array(162019, 162020);
$lak["zelena"] = array(163091, 163095, 163096, 163099, 163259);
$lak["sysel_pruh"] = array(961027, 961028, 961031, 961032);
$lak["regionova"] = array(814078, 814185);
?>
