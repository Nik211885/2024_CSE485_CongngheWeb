<?php
require_once('config.php');
include(ROOT . "/data/users.php");
$printNotify = function ($message, $backgroud_color = "bg-yellow-500") {
    echo '<div class = "text-lg font-semibold ' . $backgroud_color . ' text-center text-white py-2">' . $message . '</div>';
    include 'index.php';
};
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['user-name']) && isset($_POST['password'])) {
        $user_name = $_POST['user-name'];
        $password = $_POST['password'];
        if(empty($user_name) || empty($password)) {
            $printNotify("User name or password not null please try again");
            exit;
        }
        foreach ($users as $u) {
            if ($u['user_name'] === $user_name && password_verify($password,$u['password'])) 
            {
               $_SESSION['user_id'] = $u['user_name'];
               setcookie('logged',true,time()+ 60*60,'/');
               header('Location:/Project23/Profile');
               exit;
            } else
            {
                $printNotify("User name or password is wrong please try again");
            }
        }
    } else {
        $printNotify("Login Failed");
    }
}
