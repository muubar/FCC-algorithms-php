<?php
function longest(string $str) : int {
  $arr = explode(" ", $str);
  $result = $arr[0];
  for($i=0; $i < count($arr); $i++) {
    if (strlen($arr[$i]) > strlen($result)) {
      $result = $arr[$i];
    }
  }
  return strlen($result);
}
?>