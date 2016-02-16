<?php
$dopravce = 3244; //pro grapp

//do pole obeh se pisi cisla vlaku
  
$obeh["1"] = array(/*3083, */1354, 1357, 1364, 1367);
$obeh["2"] = array(1351, 1356, 1359, 1366);
$obeh["3"] = array(1353, 1360, 1363);
$obeh["4"] = array(1350, 1355, 1362, 1365/*, 3082*/);
$obeh["5"] = array(/*3085, */1358, /*3081, */1352, 1361/*, 3080*/);

$TS["Leo Express"] = $obeh;

$omezeni [1350] = "LE_4";
$omezeni [3081] = $omezeni [1352] = "LE_B";
$omezeni [3083] = $omezeni [1354] = $omezeni [1356] = "LE_1";
$omezeni [3085] = $omezeni [1358] = "LE_C";
$omezeni [1360] = $omezeni [1362] = "LE_2";
$omezeni [1364] = $omezeni [1366] = "LE_3";

$omezeni [1351] = "LE_A";
$omezeni [1352] = "LE_B";
$omezeni [1353] = $omezeni [1355] = "LE_1";
$omezeni [1357] = $omezeni [1359] = "LE_2";
$omezeni [3082] = $omezeni [1365] = $omezeni [1365] = "LE_3";
$omezeni [1367] = "LE_D";

$typ [-1] = "LE";

$trasa [1350] = array("Staré Město u Uherského Hradiště;5:50", "Praha hl.n.;8:56");
$trasa [1352] = array("Bohumín (Sv 3081);5:43",/* "Karviná (Sv 3081);5:58", */"Karviná;6:01", "Praha hl.n.;9:56");
$trasa [1354] = array("Bohumín (Sv 3083);6:32",/* "Karviná (Sv 3083);6:47", */"Karviná;6:56", "Praha hl.n.;10:56");
$trasa [1356] = array("Bohumín;9:17", "Praha hl.n.;12:56");
$trasa [1358] = array("Bohumín (Sv 3085);10:25", /*"Karviná (Sv 3085);10:39", */"Karviná;10:56", "Praha hl.n.;14:56");
$trasa [1360] = array("Bohumín;12:17", "Praha hl.n.;15:56");
$trasa [1362] = array("Bohumín;14:17", "Praha hl.n.;17:56");
$trasa [1364] = array("Bohumín;16:17", "Praha hl.n.;19:56");
$trasa [1366] = array("Bohumín;18:17", "Praha hl.n.;21:56");

$trasa [1351] = array("Praha hl.n.;5:06", "Bohumín;8:39");
$trasa [1353] = array("Praha hl.n.;7:06", "Bohumín;10:39");
$trasa [1355] = array("Praha hl.n.;10:06", "Bohumín;13:39");
$trasa [1357] = array("Praha hl.n.;12:06", "Bohumín;15:39");
$trasa [1359] = array("Praha hl.n.;14:06", "Bohumín;17:39");
$trasa [1361] = array("Praha hl.n.;16:06", "Karviná;19:59",/* "Karviná (Sv 3080);20:18",*/ "Bohumín (Sv 3080);20:31");
$trasa [1363] = array("Praha hl.n.;16:28", "Staré Město u Uherského Hradiště;19:30");
$trasa [1365] = array("Praha hl.n.;18:36", "Karviná;22:26", /*"Karviná (Sv 3082);22:54",*/ "Bohumín (Sv 3082);23:08");
$trasa [1367] = array("Praha hl.n.;21:36", "Bohumín;1:09");

$lak["nic"] = array();
?>
