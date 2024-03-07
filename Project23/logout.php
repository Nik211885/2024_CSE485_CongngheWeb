<?php
session_start();
session_destroy();
setcookie("logged","", 1,"/");
header("Location:");