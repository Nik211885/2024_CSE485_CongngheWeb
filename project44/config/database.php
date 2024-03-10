<?php
function connectDB()
{
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    if (!$conn) die("Không thể kết nối");
    return $conn;
}

//function queryDB($table)
//{
//    $conn = connectDB();
//    $sql = "SELECT * FROM $table";
//    $result = mysqli_query($conn, $sql);
//    $stmt =;
//
//}
