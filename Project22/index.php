<!DOCTYPE html>
<html lang="en">
<?php
include_once("config.php");
$USER = json_decode(file_get_contents(ROOT . "/backend/user.json"), true);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Setting Account</title>
</head>

<body>
    <form style="place-content:center;" class="d-grid mt-3" method="post" enctype="multipart/form-data" action="process.php">
        <h1>Account Setting</h1>
        <div class="avatar text-center mt-4">
            <input name="upload-image" accept=".jpg,.png,.jpeg" type="file" class="form-control d-none" id="inputGroupFile02">
            <?php
            echo '<label for="inputGroupFile02"><img style="width: 200px; height:200px; object-fit:cover; cursor: pointer;" id = "avatar-lb" class="rounded-circle overflow-hidden img-thumbnail" src="';
            echo $USER['img_path'];
            echo '" alt="" srcset=""></label>';
            ?>
            <div class="input-group mb-3 align-items-center justify-content-center mt-3">
                <label class="input-group-text bg-primary text-light rounded-2" for="inputGroupFile02">Change My Avatar</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="full-name" class="form-label">Full Name</label>
            <?php
            echo '<input type="text" class="form-control" name = "full-name" id="full-name" aria-describedby="fullName" value="';
            echo $USER['name'];
            echo '">';
            ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <?php
            echo '<input type="email" class="form-control" id="email" aria-describedby="email" name = "email" value="';
            echo $USER['email'];
            echo '">';
            ?>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <?php
            echo '<input type="phone" class="form-control" name = "phone" id="exampleInputEmail1" aria-describedby="phone" value="';
            echo $USER['phone_number'];
            echo '">';
            ?>
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company Name</label>
            <?php
            echo '<input type="text" class="form-control" name = "company" id="company" aria-describedby="CompanyName" value="';
            echo $USER['company_name'];
            echo '">';
            ?>
        </div>
        <input style="border: none;" type="submit" value="Change" class="bg-success text-white py-2 rounded-2">
    </form>
    <script defer src = "scrip/change-avatar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>