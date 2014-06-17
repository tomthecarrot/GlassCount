<?php

$count = $_GET["count"];
$deviceid = $_GET["deviceid"];

$count = intval($count);
$alreadyCount = file_get_contents("count.txt");

$count += $alreadyCount;

file_put_contents("count.txt", $count);

$listUsers = file_get_contents("users.txt");
if (strpos($listUsers, $deviceid) === false) {
	$numUsers = file_get_contents("numusers.txt");
	$numUsers = intval($numUsers);
	$numUsers++;
	file_put_contents("users.txt", $deviceid, FILE_APPEND);
	file_put_contents("numusers.txt", $numUsers);
}

print $count;
print $deviceid;

?>