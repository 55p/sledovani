<?php 
function predpoklad_1_TS891 ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 7) {
    return 0;
  }
  if ($den == 6) {
    return 1;
  }
  return 2;
}

