<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>New Department</title>
</head>
<body>
<?php
include 'header.php';
$itemsPerPage = 10;
?>

<main>
    <form action="" method="post" class="m-3">
        <table>

            <tr>
                <th style="float: left">ID phòng ban:</th>
                <td><input type="text" name="id" value="<?= end($departments)->getID() + 1; ?>"
                           style="background-color: lightgray; pointer-events: none; color: gray; border-color: lightgray"></td>
            </tr>

            <tr>
                <th>Tên phòng ban:</th>
                <td><input type="text" name="name" value="TestName"></td>

            </tr>
            <tr>
                <th style="float: left">Địa chỉ:</th>
                <td><input type="text" name="address" value="TestAdd"></td>
            </tr>
            <tr>
                <th style="float: left">Email:</th>
                <td><input type="text" name="email" value="TestEmail"></td>
            </tr>

        </table>
        <div class="my-3">
            <button class="btn btn-success" type="submit">Thêm mới</button>
            <a href="<?= DOMAIN . '/index.php?controller=department&action=index&page=' . ceil(count($departments) / $itemsPerPage) ?>"
               class="btn btn-primary"
            ><i class="bi bi-journals"> Xem danh sách phòng ban</i></a>
        </div>
    </form>


</main>
</body>
</html>
