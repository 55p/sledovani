<?php

function predpoklad_1_TS862($timestamp) {
  if (date("N", $timestamp) == 5)
    return 1;
  return 2;
}
function predpoklad_2_TS862($timestamp) {
  if (date("N", $timestamp) == 5)
    return 2;
  return 1;
}

function predpoklad_1_TS863($timestamp) {
  return 2;
}
function predpoklad_2_TS863($timestamp) {
  return 3;
}
function predpoklad_3_TS863($timestamp) {
  return 1;
}

?>
