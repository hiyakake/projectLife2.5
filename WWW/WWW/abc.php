<?php
$req = $_POST[text];
$reqpass = $_POST[pass];


if ($req == "aaa") {
  echo "id正しい<br>";

  if ($reqpass == "abc") {
    echo "pass正しい<br>";
  }else {
      echo "pass不一致<br>";
  }
}else {
  echo "id不一致<br>";

}
 ?>
