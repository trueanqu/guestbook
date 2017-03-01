<?php
$messagesStorage = "../storage/messages_storage.txt";

$newMessage = [];
$date = date_create();

if($_REQUEST['name'] != '' && $_REQUEST['text'] != '') {
    $newMessage['date'] = $date->format("d.m.Y H:i");
    $newMessage['name'] = htmlspecialchars($_REQUEST['name']);
    $newMessage['text'] = htmlspecialchars($_REQUEST['text']);
}

$fs = fopen($messagesStorage, 'a');
if(!empty($newMessage))
    fprintf($fs, "%s\n", json_encode($newMessage));
fclose($fs);

header("Location: ./index.php");
?>