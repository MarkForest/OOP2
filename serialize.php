<?php
include_once 'abstract.php';

$object = file_get_contents('data.txt');
$figure = unserialize($object);
echo substr(get_class($figure), strrpos('/', get_class($figure)));

$figure->Show();