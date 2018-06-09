<?php

require('../includes/db_connect.php');
session_start();

$msgid = $_POST['msgid'];


$conn->query("UPDATE messages SET opened=1, opened_at=now() WHERE id='$msgid'");


        ?>