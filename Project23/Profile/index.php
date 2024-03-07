<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include_once("../config.php");
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged'])) {
    header('Location:../');
}
$user_name = $_SESSION['user_id'];
include(ROOT . "/data/users.php");
$USER = null;
foreach ($users as $u) {
    if ($u['user_name'] === $user_name) {
        $USER = json_decode(file_get_contents(ROOT . "/Profile/backend/user.json"), true);
        break;
    }
}
if($USER){
    gender($USER);
}
else{
    header("Location:../");
}
function gender ($USER) {
    echo
    '
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Setting Account</title>
</head>

<body>
    <button id = "logout" name = "log-out" style="top:10%;left: 70%; rotate: 90deg;" class="btn btn-primary position-absolute px-3 py-2" type="submit"><i class="bi bi-box-arrow-right"></i></button>
    <form style="place-content:center;" class="d-grid mt-3" method="post" enctype="multipart/form-data" action="process.php">
        <h1>Account Setting</h1>
        <div class="avatar text-center mt-4">
            <input name="upload-image" accept=".jpg,.png,.jpeg" type="file" class="form-control d-none" id="inputGroupFile02">
            <label for="inputGroupFile02"><img style="width: 200px; height:200px; object-fit:cover; cursor: pointer;" id = "avatar-lb" class="rounded-circle overflow-hidden img-thumbnail" src="' . $USER['img_path'] .
        '" alt="" srcset=""></label>
            <div class="input-group mb-3 align-items-center justify-content-center mt-3">
                <label class="input-group-text bg-primary text-light rounded-2" for="inputGroupFile02">Change My Avatar</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="full-name" class="form-label">Full Name</label>
            <input type="text" class="form-control" name = "full-name" id="full-name" aria-describedby="fullName" value="' .
        $USER['name'] .
        '">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" name = "email" value="' .
        $USER['email'] .
        '">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="phone" class="form-control" name = "phone" id="exampleInputEmail1" aria-describedby="phone" value="' .
        $USER['phone_number'] .
        '">
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company Name</label>
            <input type="text" class="form-control" name = "company" id="company" aria-describedby="CompanyName" value="' .
        $USER['company_name'] .
        '">
        </div>
        <input style="border: none;" type="submit" value="Change" class="bg-success text-white py-2 rounded-2">
    </form>
    <script defer src="scrip/change-avatar.js"></script>
    <script defer src="scrip/logout.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>';
};
?>

</html>