<?php
// database connect
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'fifo');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB);

// verify connections
if (!$conn) {
    echo "Is not connected $conn.";
} 