<?php
?>
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
    <title>Home</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
            <a class="navbar-brand text-primary" href="#">Danh bạ điện tử</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href=<?= "index.php?controller=department&action=index"; ?>>
                            Quản lý phòng ban</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Quản lý người dùng</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="" class="text-decoration-none text-success">Tài khoản</a>
                <a href="" class="btn btn-danger">Đăng xuất</a>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Số phòng ban</h5>
                        <p class="card-text"><?= count($departments); ?></p>
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Số người dùng</h5>
                        <p class="card-text"><?= count($departments); ?></p>
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
