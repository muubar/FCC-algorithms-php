<?php
function factorial($n) {
  $num = $n;
  $total = $n;
  while ($num > 1) {
    $num--; 
    $total = $total * $num;
  }
  return $total;
}
?>