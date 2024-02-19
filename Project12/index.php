<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa
    7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project11</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            font-weight: bold;
            font-size: 1rem;
        }

        ul {
            padding: 20px;
            background-color: blue;
            margin-top: 20px;
            justify-content: space-around;
            display: flex;
        }

        li {
            cursor: pointer;
            color: white;
            text-decoration: none;
            list-style-type: none;
        }
    </style>
</head>

<body>
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
    echo '<nav class = "nav"><ul>';
    foreach ($navItems as $item) {
        echo "<li>$item</li>";
    }
    echo '</ul></nav>';
    ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap
    @5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384
    -C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
     crossorigin="anonymous"></script> -->
</body>

</html>