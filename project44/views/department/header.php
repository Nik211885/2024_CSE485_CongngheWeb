<?php
?>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
                        <a class="nav-link " aria-current="page" href=<?= DOMAIN . "/index.php?controller=home"; ?>>Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style=" border-bottom: solid dodgerblue 3px">Quản lý phòng ban</a>
                    </li>
                    <li class="nav-item " >
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
