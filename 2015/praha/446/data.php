<?php

$poznamkaObehu = array();

$skupiny[] = $ts442 = new TS ('TS 442');
$skupiny[] = $ts446 = new TS ('TS 446');
$skupiny[] = $ts446a = new TS ('TS 446a');
$skupiny[] = $ts447 = new TS ('TS 447');
$skupiny[] = $ts448 = new TS ('TS 448');
$skupiny[] = $mimor = new TS('mimořádný oběh');

$mobeh['-'] = array('1','2','3');

$mimor->obeh(new Obeh($mobeh, array(), array(), array('1' => '', '2' => '', '3' => ''), array()));

include 'obehy.php';

@include 'spolecne/laky_vse.php';

$typ[-1] = 'Os';

?>