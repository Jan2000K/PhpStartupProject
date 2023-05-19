<?php
require_once "src/config.php";
$db_conn = new PDO(db_connection_string, db_username, db_password);
$db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);