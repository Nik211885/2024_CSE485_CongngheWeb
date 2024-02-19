<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        *{
            font-family: sans-serif;
        }
        .course {
            margin-left: 20px;
            background-color: #f9f9f9;
            padding: 20px;
            margin-bottom: 20px;
        }

        .course h2 {
            color: #333;
        }

        .course p {
            color: #666;
        }

        .contaner {
            display: grid;
            /* 	grid-template-columns:repeat(auto-fill,minmax(250px,1fr)); */
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        }
        h1{
            margin-top: 40px;
            text-transform: uppercase;
            font-size: 1.5rem;
            margin-left: 20px;
            color: red;
            border-left: 4px solid red;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <h1>Khóa học sắp khai giảng</h1>
    <div class="contaner">
        <?php
        // Dữ liệu khóa học lưu động trong mảng
        $courses = [
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            // Thêm các khóa học khác vào đây
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            // Thêm các khóa học khác vào đây
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            // Thêm các khóa học khác vào đây
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            // Thêm các khóa học khác vào đây
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            // Thêm các khóa học khác vào đây
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            // Thêm các khóa học khác vào đây
            [
                'title' => 'Học viên quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration' => '2 - 2.5 năm'
            ],
            // Thêm các khóa học khác vào đây
        ];
        // Hiển thị danh sách khóa học
        foreach ($courses as $course) {
            echo '<div class="course">';
            echo '<h2>' . $course['title'] . '</h2>';
            echo '<p>' . $course['description'] . '</p>';
            echo '<p>Học phí: ' . $course['fee'] . '</p>';
            echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
            echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>