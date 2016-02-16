<?php
//do pole obeh se pisi cisla vlaku
$obeh[1] = array(6943, 6961, 883, 882, 889, 888, 895, 894);
$obeh[2] = array(881, 880, 887, 886, 893, 892);
$obeh[3] = array(1690, 1693, 885, 884, 891, 890, 29890, 6962);

$TS["TS 122"] = $obeh;

$omezeni [895] = "41";
$omezeni [894] = "41";
$omezeni [881] = "27";
$omezeni [880] = "27";

$omezeni [6943] = "6, T";
$omezeni ["6961"] = "X";
$omezeni [1690] = "X";
$omezeni [1693] = "X";
$omezeni [29890] = "X";
$omezeni [6962] = "6, T";
$omezeni [-1] = '';

$typ [6961] = "Os";
$typ [6962] = "Os";
$typ [6943] = "Os";
$typ [29890] = "Sv";
$typ [1690] = "Sp";
$typ [1693] = "Sp";
$typ [-1] = "R";

$trasa [880] = array("Kolín;7:14","Ústí nad Labem západ;9:09");
$trasa [882] = array("Kolín;9:14","Ústí nad Labem západ;11:09");
$trasa [884] = array("Kolín;11:14","Ústí nad Labem západ;13:09");
$trasa [886] = array("Kolín;13:14","Ústí nad Labem západ;15:09");
$trasa [888] = array("Kolín;15:14","Ústí nad Labem západ;17:09");
$trasa [890] = array("Kolín;17:14","Ústí nad Labem západ;19:09");
$trasa [892] = array("Kolín;19:14","Ústí nad Labem západ;21:09");
$trasa [894] = array("Kolín;21:14","Ústí nad Labem západ;23:05");

$trasa [881] = array("Ústí nad Labem západ;4:47","Kolín;6:40");
$trasa [883] = array("Ústí nad Labem západ;6:47","Kolín;8:40");
$trasa [885] = array("Ústí nad Labem západ;8:47","Kolín;10:40");
$trasa [887] = array("Ústí nad Labem západ;10:47","Kolín;12:40");
$trasa [889] = array("Ústí nad Labem západ;12:47","Kolín;14:40");
$trasa [891] = array("Ústí nad Labem západ;14:47","Kolín;16:40");
$trasa [893] = array("Ústí nad Labem západ;16:47","Kolín;18:40");
$trasa [895] = array("Ústí nad Labem západ;18:47","Kolín;20:40");

$trasa [1690] = array("Ústí nad Labem hl.n.;4:41","Chomutov;5:53");
$trasa [1693] = array("Chomutov;6:20","Ústí nad Labem hl.n.;7:33");

$trasa [6943] = array("Děčín hl.n.;4:55","Ústí nad Labem hl.n.;5:22");
$trasa [6961] = array("Děčín hl.n.;6:02","Ústí nad Labem západ;6:33");
$trasa [29890] = array("Ústí nad Labem západ;19:30","Děčín hl.n.;19:48");
$trasa [6962] = array("Ústí nad Labem západ;22:30","Děčín hl.n.;23:02");

$lak["najbrt1"] = array(163073, 163100, 163249, 163260, 162036, 162038, 162039, 162046);
$lak["najbrt1bila"] = array(163257);
$lak["najbrt2"] = array(162014, 162018, 162040, 163077, 163079);
$lak["seda_lok"] = array(162011, 163094);
$lak["zelena_svetla"] = array(162019, 162020);
$lak["zelena"] = array(163091, 163095, 163096, 163099, 163259);
$lak["sysel_pruh"] = array(961027, 961028, 961031, 961032);
$lak["regionova"] = array(814078, 814185);
$lak["sedy_pantograf"] = array(451079, 451092);
?>
