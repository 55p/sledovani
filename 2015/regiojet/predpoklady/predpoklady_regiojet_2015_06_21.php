<?php 
function predpoklad_1_RegioJet ($timestamp) {
  return 2;
}

function predpoklad_2_RegioJet ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 4;
  }
  return 1;
}

function predpoklad_3_RegioJet ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 4) {
    return 3;
  }
  if ($den == 5) {
    return 3;
  }
  if ($den == 7) {
    return 3;
  }
  return 6;
}

function predpoklad_4_RegioJet ($timestamp) {
  return 5;
}

function predpoklad_5_RegioJet ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 4) {
    return 6;
  }
  if ($den == 5) {
    return 6;
  }
  if ($den == 7) {
    return 6;
  }
  return 3;
}

function predpoklad_6_RegioJet ($timestamp) {
  return 7;
}

function predpoklad_7_RegioJet ($timestamp) {
  $den = date('N', $timestamp);
  if ($den == 6) {
    return 1;
  }
  return 4;
}

?>