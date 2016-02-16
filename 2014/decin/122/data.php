<?php
//do pole obeh se pisi cisla vlaku
$obeh0[1] = array(6943, 6961, 783, 792, 789, 786, 795, 780);
$obeh0[2] = array(781, 794, 787, 788, 793, 782);
$obeh0[3] = array(1690, 1693, 785, 790, 791, 784, 29874, 6962);

$TS["TS 122"] = $obeh0;

$obeh1[1] = array("6451_1", 6490, "6451_2", 6452, 6453, 6454, 6940, "6403_1", "6406_1", 6409, 6410, 6413, 6414, 6417, "6418_1", "6418_2");
$obeh1[2] = array(6430, "6403_2", "6406_2", 6411, 6412, 6415, 6416, 6419);
$obeh1[3] = array("6402_1", 6407, 6400, 6405, 6408, 6455, 6456, 6457, 6458, "6431_1");
$obeh1[4] = array("6401_1", "6404_1", "6443_1", "6402_2", 6960, 6882, 6805, 6955);

$obeh2[1] = array(1689, 6963, "6878_1", "6879_1", "6431_2");
$obeh2[2] = array("6443_2", "6402_3", "6401_2", "6404_2", "6878_2", "6879_2", 1698);

$TS["TS 124"] = $obeh1;
$TS["TS 123"] = $obeh2;

$omezeni ["6403_1"] = $omezeni ["6402_1"] = $omezeni ["6406_1"] = $omezeni[6407] = $omezeni [6943] = $omezeni [6962] = "6, T";
$omezeni [6882] = $omezeni [6805] = $omezeni [6940] = "37";

$omezeni [1689] = $omezeni [1690] = $omezeni [1693] = $omezeni [1698] = $omezeni [6400] = $omezeni ["6403_2"] = $omezeni [6405] = $omezeni ["6406_2"] = 
$omezeni [6430] = $omezeni [6455] = $omezeni [6456] = $omezeni [6457] =  $omezeni [6458] = $omezeni [6960] = $omezeni [6961] = $omezeni [29874] = 
"X";

$omezeni ["6451_2"] = $omezeni [6452] = $omezeni [6453] = $omezeni [6454] = "34_2014";

$omezeni [6419] = "10";

$omezeni ["6431_1"] = "X1,X2,X3,X4";
$omezeni ["6402_2"] = $omezeni ["6443_1"] = "X2,X3,X4,X5";
$omezeni ["6401_2"] = $omezeni ["6404_2"] = "X2,X3,X4,X5";

$omezeni ["6401_1"] = $omezeni ["6402_3"] = $omezeni ["6404_1"] = $omezeni ["6443_2"] = "X1";

$omezeni [6955] = "5,6";
$omezeni ["6418_1"] = "49_2014";
$omezeni ["6418_2"] = "_49_2014";
$omezeni ["6451_1"] = $omezeni [6490] = "_34_2014";

//TS 123
$omezeni ["6431_2"] = "X5";
$omezeni [6963] = "23";
$omezeni ["6878_1"] = $omezeni ["6879_1"] = "34_5_2014";
$omezeni ["6878_2"] = $omezeni ["6879_2"] = "34_X_2014";

//TS 122
$omezeni [780] = $omezeni [795] = "28_2014";
$omezeni [781] = $omezeni [794] = "27_2014";
  
$typ [-1] = "Os";
$typ [6490] = $typ [29874] = "Sv";
$typ [1689] = $typ [1690] = $typ [1693] = $typ [1698] = "Sp";
$typ [780] = $typ [781] = $typ [782] = $typ [783] = $typ [784] = $typ [785] = $typ [786] = $typ [787] = $typ [788] = $typ [789] = $typ [790] = $typ [791] = $typ [792] = $typ [793] = $typ [794] = $typ [795] = "R";


$trasa [6940] = array("Roudnice nad Labem;4:40", "Ústí nad Labem hl.n.;5:20");
$trasa [6943] = array("Děčín hl.n.;4:55","Ústí nad Labem hl.n.;5:22");
$trasa [6955] = array("Děčín hl.n.;22:34", "Roudnice nad Labem;23:38");
$trasa [6960] = array("Ústí nad Labem hl.n.;14:32", "Děčín hl.n.;14:56");
$trasa [6961] = array("Děčín hl.n.;6:02","Ústí nad Labem západ;6:33");
$trasa [6962] = array("Ústí nad Labem západ;22:30","Děčín hl.n.;23:03");
$trasa [6963] = array("Děčín hl.n.;7:02", "Ústí nad Labem hl.n.;7:31");

$trasa [1689] = array("Chomutov;3:23", "Děčín hl.n.;5:17");
$trasa [1690] = array("Ústí nad Labem hl.n.;4:41","Chomutov;5:54");
$trasa [1693] = array("Chomutov;6:22","Ústí nad Labem hl.n.;7:33");
$trasa [1698] = array("Ústí nad Labem hl.n.;17:47", "Chomutov;18:54");

$trasa [29874] = array("Ústí nad Labem západ;19:29","Děčín hl.n.;19:47");

$trasa [6805] = array("Most;6:04", "Děčín hl.n.;7:28");
$trasa [6878] = array("Ústí nad Labem hl.n.;15:27", "Teplice v Čechách;15:46");
$trasa [6879] = array("Teplice v Čechách;16:07", "Ústí nad Labem hl.n.;16:28");
$trasa [6882] = array("Ústí nad Labem hl.n.;4:05", "Most;4:55");

$trasa [6401] = array("Ústí nad Labem západ;5:03", "Lysá nad Labem;6:37");
$trasa [6403] = array("Ústí nad Labem západ;6:03", "Lysá nad Labem;7:37");
$trasa [6405] = array("Ústí nad Labem západ;7:03", "Lysá nad Labem;8:37");
$trasa [6407] = array("Ústí nad Labem západ;8:03", "Lysá nad Labem;9:37");
$trasa [6409] = array("Ústí nad Labem západ;10:03", "Lysá nad Labem;11:37");
$trasa [6411] = array("Ústí nad Labem západ;12:03", "Lysá nad Labem;13:37");
$trasa [6413] = array("Ústí nad Labem západ;14:03", "Lysá nad Labem;15:37");
$trasa [6415] = array("Ústí nad Labem západ;16:03", "Lysá nad Labem;17:37");
$trasa [6417] = array("Ústí nad Labem západ;18:03", "Lysá nad Labem;19:37");
$trasa [6419] = array("Ústí nad Labem západ;20:03", "Lysá nad Labem;21:37");
$trasa [6431] = array("Ústí nad Labem západ;17:03", "Mělník;18:03");
$trasa [6443] = array("Mělník;5:04", "Lysá nad Labem;5:37");
$trasa ["6451_1"] = array("Děčín hl.n.;4:47", "Ústí nad Labem - Střekov;5:24");
$trasa ["6451_2"] = array("Děčín hl.n.;4:47", "Litoměřice město;5:44");
$trasa [6453] = array("Ústí nad Labem západ;6:29", "Litoměřice město;6:50");
$trasa [6455] = array("Ústí nad Labem západ;13:03", "Štětí;13:51");
$trasa [6457] = array("Ústí nad Labem západ;15:03", "Štětí;15:51");

$trasa [6430] = array("Mělník;4:51", "Ústí nad Labem západ;5:52");
$trasa [6400] = array("Lysá nad Labem;4:58", "Ústí nad Labem západ;6:52");
$trasa [6402] = array("Lysá nad Labem;6:18", "Ústí nad Labem západ;7:52");
$trasa [6404] = array("Lysá nad Labem;6:57", "Ústí nad Labem západ;8:52");
$trasa [6406] = array("Lysá nad Labem;8:18", "Ústí nad Labem západ;9:52");
$trasa [6408] = array("Lysá nad Labem;10:18", "Ústí nad Labem západ;11:52");
$trasa [6410] = array("Lysá nad Labem;12:18", "Ústí nad Labem západ;13:52");
$trasa [6412] = array("Lysá nad Labem;14:18", "Ústí nad Labem západ;15:52");
$trasa [6414] = array("Lysá nad Labem;16:18", "Ústí nad Labem západ;17:52");
$trasa [6416] = array("Lysá nad Labem;18:18", "Ústí nad Labem západ;19:52");
$trasa ["6418_1"] = array("Lysá nad Labem;20:18", "Ústí nad Labem západ;21:52");
$trasa ["6418_2"] = array("Lysá nad Labem;20:18", "Mělník;20:50");
$trasa [6452] = array("Litoměřice město;5:56","Ústí nad Labem západ;6:22");
$trasa [6454] = array("Litoměřice město;7:02","Ústí nad Labem západ;7:27");
$trasa [6456] = array("Štětí;14:04", "Ústí nad Labem západ;14:52");
$trasa [6458] = array("Štětí;16:04", "Ústí nad Labem západ;16:52");
$trasa [6490] = array("Ústí nad Labem - Střekov;5:43", "Ústí nad Labem západ;5:47");

$trasa [794] = array("Kolín;7:14","Ústí nad Labem západ;9:09");
$trasa [792] = array("Kolín;9:14","Ústí nad Labem západ;11:09");
$trasa [790] = array("Kolín;11:14","Ústí nad Labem západ;13:09");
$trasa [788] = array("Kolín;13:14","Ústí nad Labem západ;15:09");
$trasa [786] = array("Kolín;15:14","Ústí nad Labem západ;17:09");
$trasa [784] = array("Kolín;17:14","Ústí nad Labem západ;19:09");
$trasa [782] = array("Kolín;19:14","Ústí nad Labem západ;21:09");
$trasa [780] = array("Kolín;21:14","Ústí nad Labem západ;23:05");

$trasa [781] = array("Ústí nad Labem západ;4:47","Kolín;6:40");
$trasa [783] = array("Ústí nad Labem západ;6:47","Kolín;8:40");
$trasa [785] = array("Ústí nad Labem západ;8:47","Kolín;10:40");
$trasa [787] = array("Ústí nad Labem západ;10:47","Kolín;12:40");
$trasa [789] = array("Ústí nad Labem západ;12:47","Kolín;14:40");
$trasa [791] = array("Ústí nad Labem západ;14:47","Kolín;16:40");
$trasa [793] = array("Ústí nad Labem západ;16:47","Kolín;18:40");
$trasa [795] = array("Ústí nad Labem západ;18:47","Kolín;20:40");

$lak["najbrt1"] = array(163073, 163100, 163249, 163260, 162012, 162036, 162038, 162046);
$lak["najbrt1bila"] = array(163257, 162039);
$lak["najbrt2"] = array(162014, 162018, 162019, 162040, 163025, 163077, 163079);
$lak["seda_lok"] = array(162011, 163094);
$lak["zelena_svetla"] = array(162020);
$lak["zelena"] = array(163091, 163095, 163096, 163099, 163259);
$lak["sysel_pruh"] = array(961019, 961027, 961028, 961031, 961032);
$lak["regionova"] = array(814078, 814185);

?>
