<?php
$skupiny[] = $ts701 = new TS ('TS 701');
$skupiny[] = $ts702 = new TS ('TS 702');
$skupiny[] = $ts703 = new TS ('TS 703');
$skupiny[] = $ts704 = new TS ('TS 704');
$skupiny[] = $ts705 = new TS ('TS 705');
$skupiny[] = $ts706 = new TS ('TS 706');
$skupiny[] = $ts707 = new TS ('TS 707');
$skupiny[] = $mimor = new TS('mimořádný oběh');

$mimor->obeh(new Obeh(array('-' => array('1','2','3','4','5','6')), array(), array(), array('1' => '', '2' => '', '3' => '', '4' => '', '5' => '', '6' => ''), array()));

$typ[-1] = 'Os';

include __DIR__.$includePath.'/spolecne/obehy_2015_11_22.php';
@include __DIR__.$includePath.'/spolecne/laky_vse.php';

$predpokladySoubor = __DIR__.$includePath.'/spolecne/predpoklady_2015_11_22.php';

?>