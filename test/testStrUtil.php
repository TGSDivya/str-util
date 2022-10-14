<?php
/**
 * Created by Divya
 * Date: 14/10/2022
 * Time: 17:00
 */

//Use composer autoload to load class files
require_once __DIR__ . "/../vendor/autoload.php";

//Required package/libraries
use StrUtil\Counter;

$text = "Aequam memento rebus in arduis servare mentem";
$wordCount = Counter::countWords($text);
echo "The txt contains ".$wordCount." word(s) by divaaa\r\n";