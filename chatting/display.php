<?php
    $file=fopen("textlog.txt", "r") or die("Start chatting!");
    while(!feof($file)) {
  echo fgets($file);
}
fclose($file);
?>