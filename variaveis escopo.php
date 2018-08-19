<?php
  $x = 1; //Escopo global
  function F() {
    $y = 2; //Escopo local
    echo $y;

  }
  F ();
?>