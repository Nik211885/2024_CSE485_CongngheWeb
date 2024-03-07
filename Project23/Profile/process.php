<?php

require_once("../config.php");

$genderEroor = function ($nameError, $backgroud = 'bg-warning') {
    echo '<div class = "fs-5 fw-bold ' . $backgroud . ' text-center text-white py-2">' . $nameError . '</div>';
    include 'index.php';
};

$updateProfile = function($genderEroor){
    $newProfileUSer = [
        "img_path" => ROOT."Profile/img/avatar.png",
        "name" => $_POST['full-name'],
        "email" => $_POST['email'],
        "phone_number" => $_POST['phone'],
        "company_name" => $_POST['company'],
    ];
    $userFile = fopen(ROOT . '\backend\user.json', 'w',) or $genderEroor('Cant update your profile please try again');
    fwrite($userFile, json_encode($newProfileUSer));
    fclose($userFile);  
    $newProfileUSer = null;
    $genderEroor('Edit Your Profile success', 'bg-success');
};
// foreach ($_FILES['upload-image'] as $key => $value) {
//     echo ('' . $key . ':' . $value);
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_FILES['upload-image']['size'] >= 500000) {
        $genderEroor('Large Size Your Image');
    } else {
        if (!($_POST['full-name'] && $_POST['email'] && $_POST['phone'] && $_POST['company'])) {
            $genderEroor('Please input form not empty');
        } else {
            if ($_FILES['upload-image']['tmp_name']) {
                if (!move_uploaded_file($_FILES['upload-image']['tmp_name'], ROOT . '\img\avatar.png')) {
                    $genderEroor('Eror upload your avatar please try agian');
                } else {
                    $updateProfile($genderEroor);
                }
            }
            else{
                $updateProfile($genderEroor);
            }
        }
    }
}
