<?php
/**
 * Created by PhpStorm.
 * User: Qasim
 * Date: 8/14/2015
 * Time: 8:46 PM
 */


$fopen = fopen("filetesting.txt",'w+');
//echo $fopen; exit;

fwrite($fopen, " fsjdlfkjsldkj");
$fopen = fopen("filetesting.txt",'r');
$fSize = filesize('filetesting.txt');
$fileRead = fread($fopen,$fSize);
echo $fileRead; exit;




/*$fopen = fopen("filetesting.txt",'a+');
//echo $fopen; exit;
$fSize = filesize('filetesting.txt');
$fileRead = fread($fopen,$fSize);
echo $fileRead; exit;*/


/*$handle = fopen("http://www.tutorialspoint.com/php/php_files.htm", "r");
$contents = stream_get_contents($handle);
fclose($handle);
echo $contents; exit;*/