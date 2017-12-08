<?php

require 'db_besic.php';
session_start();

session_destroy();
//mysqli_close();
header("Location: index.php");
        			exit;
?>