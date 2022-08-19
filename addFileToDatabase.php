<?php
require("./app.php");

$bot_Everything = new telegramBot();

$server_name = "localhost";
$user = "id19314834_botevretin";
$pass = "zL/26oD8*EhuqkHW";
$dbname = "id19314834_books";

$connect  = new mysqli($server_name, $user, $pass, $dbname);


if (isset($file_id)) {

  mysqli_query($connect, "INSERT INTO `books_t`(`file_name`, `file_id`, `thump_id`) VALUES ('$file_caption' , '$file_id' , '$thump_id')");
}
