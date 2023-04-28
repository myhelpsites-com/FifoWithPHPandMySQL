<?php

require("C:/wamp64/www/labory/FifoWithPHPandMySQL/config/index.php");

// find queue 
$select = "SELECT * FROM `queue` WHERE `function` = 'notification' AND `state` = 'awaiting'";
$query = mysqli_query($conn, $select);
if ($query) {

    $result = mysqli_fetch_assoc($query);

    if ($result) {

        $id = $result["_id"];

        // set queue from working
        $update = "UPDATE `queue` SET `state` = 'working' WHERE `queue`.`_id` = $id";
        $query = mysqli_query($conn, $update);

        // execute
        print("executed " . date("c"));

        // set queue from done
        $update = "UPDATE `queue` SET `state` = 'done' WHERE `queue`.`_id` = $id";
        $query = mysqli_query($conn, $update);
    }else {
        print("not exist queue");
    }
} else {
    print("not exist queue");
}
