<?php
require "../vendor/autoload.php";

$messagesStorage = "../storage/messages_storage.txt";

$fs = fopen($messagesStorage, 'r');
$messages = array();

if($fs) {
    while(!feof($fs)) {
        array_push($messages,json_decode(fgets($fs)));
    }
}

include("../templates/main.html");