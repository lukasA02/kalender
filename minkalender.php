<?php
//echo file_get_contents("https://tp2021.ntigskovde.se/Theprovider-main/minkalender.php?aid=1&hash=123456789");
$content = file_get_contents("https://tp2021.ntigskovde.se/Theprovider-main/minkalender.php?aid=1&hash=123456789");
// ta bort iframe
$content = explode("\n", $content);
array_splice($content, 0, 22);
$newcontent = implode("\n", $content);
echo $newcontent;
?>