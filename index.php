<?php
// Replace YOUR_API_TOKEN with your Telegram bot API token
$bot_token = "6167600168:AAHjjjFrtCvSer-3smiWfskOp-clJHEPEjQ";

// Get the incoming message
$content = file_get_contents("php://input");
$update = json_decode($content, true);
$message = $update["message"];

// Get the chat ID and message text
$chat_id = $message["chat"]["id"];
$text = $message["text"];

// Send a message back to the chat
if ($text == "/start") {
    $reply = "Hi there!";
} else {
    $reply = "You said: " . $text;
}

$url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($reply);
file_get_contents($url);
