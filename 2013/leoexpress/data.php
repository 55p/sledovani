<?php
//do pole obeh se pisi cisla vlaku
  $obeh["1"] = array(1351, 1354, 1359, 1364);
  $obeh["2"] = array(1353, 1356, 1361, 1366);
  $obeh["1a"] = array(1350, 1355, 1358, 1363); // SV pro 1350: 24 347, SV od 1363: 24 368
  $obeh["2a"] = array(1352, 1357, 1360, 1365); //SV pro 1352: 24 349, SV od 1365: 24 370
  $obeh["1b"] = array(1362, 1367);

$TS["Leo Express"] = $obeh;

$omezeni [1351] = "X";
$omezeni [1367] = "A";
$omezeni [1350] = "B";
$omezeni [1362] = "C";

$typ [-1] = "LE";

$trasa [1350] = array("Karviná;4:08", "Praha hl.n.;7:50");
$trasa [1352] = array("Karviná;6:08", "Praha hl.n.;9:50");
$trasa [1354] = array("Bohumín;8:15", "Praha hl.n.;11:39");
$trasa [1356] = array("Bohumín;10:13", "Praha hl.n.;13:39");
$trasa [1358] = array("Bohumín;12:13", "Praha hl.n.;15:39");
$trasa [1360] = array("Bohumín;14:13", "Praha hl.n.;17:39");
$trasa [1362] = array("Bohumín;15:22", "Praha hl.n.;18:50");
$trasa [1364] = array("Bohumín;16:22", "Praha hl.n.;19:50");
$trasa [1366] = array("Bohumín;18:13", "Praha hl.n.;21:39");

$trasa [1351] = array("Praha hl.n.;4:29", "Bohumín;7:52");
$trasa [1353] = array("Praha hl.n.;6:29", "Bohumín;9:52");
$trasa [1355] = array("Praha hl.n.;8:29", "Bohumín;11:52");
$trasa [1357] = array("Praha hl.n.;10:29", "Bohumín;13:52");
$trasa [1359] = array("Praha hl.n.;12:29", "Bohumín;15:52");
$trasa [1361] = array("Praha hl.n.;14:09", "Bohumín;17:37");
$trasa [1363] = array("Praha hl.n.;16:09", "Karviná;19:50");
$trasa [1365] = array("Praha hl.n.;18:29", "Karviná;22:05");
$trasa [1367] = array("Praha hl.n.;20:09", "Bohumín;23:37");

$lak["nic"] = array();
?>
