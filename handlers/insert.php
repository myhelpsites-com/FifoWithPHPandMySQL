<?php

require("C:/wamp64/www/labory/FifoWithPHPandMySQL/config/index.php");

$content = $_POST["content"];

$insert = "INSERT INTO `queue` (`_id`, `content`, `timestamp`, `function`, `state`) 
VALUES (NULL, '$content', CURRENT_TIMESTAMP, 'notification', 'awaiting')";

mysqli_query($conn, $insert);