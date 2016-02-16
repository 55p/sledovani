<?php

$poznamkaObehu = array();

$skupiny[] = $ts860 = new TS ('TS 860');
/*
$skupiny[] = $ts446 = new TS ('TS 446');
$skupiny[] = $ts446a = new TS ('TS 446a');
$skupiny[] = $ts447 = new TS ('TS 447');
$skupiny[] = $mimor = new TS('mimořádný oběh');

$mobeh['-'] = array('1','2','3');

$mimor->obeh(new Obeh($mobeh, array(), array(), array('-1' => ''), array()));
*/

$typ[-1] = 'Os';

include 'obehy.php';

@include 'spolecne/laky_vse.php';


?>