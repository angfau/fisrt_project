<?php

session_start();
unset($_SESSION["username"]);
unset($_SESSION["user_id"]);
unset($_SESSION["empl_grade"]);
header("Location: ../../index.php")

?>