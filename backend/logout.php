<?php
session_start();
session_destroy();
header('Location: ../webpages/login.php?msg=Logged Out Successfully');
?>