<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Coureses</title>
    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
    <h1>Khóa học sắp khai giảng</h1>
    <div class="contaner">
        <?php
        include("src/data/courses.php");
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