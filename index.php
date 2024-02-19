<?php
$navItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",
    "LIÊN HỆ"
];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Navigation</title>
    <!-- Thêm link để sử dụng Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <nav>
        <!-- Thẻ <i> để chứa biểu tượng ngôi nhà -->
        <i class="fas fa-home home-icon"></i>
        <ul>
            <?php
            foreach ($navItems as $item) {
                echo "<li><a href='#'>$item</a></li>";
            }
            ?>
        </ul>
    </nav>
</body>
</html>
