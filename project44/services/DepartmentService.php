<?php

require_once ROOT . '/models/Department.php';
require_once ROOT . "/config/database.php";

class DepartmentService
{
    public function getAllDepartments()
    {
        $conn = connectDB();
        $sql = "SELECT * FROM departments";
        $stmt = $conn->query($sql);

        $departments = [];
        while ($row = $stmt->fetch_assoc()) {
            $department = new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email']);
            $departments[] = $department;
        }
        return $departments;
    }

    public function getDepartmentbyID($id)
    {
        $conn = connectDB();
        $sql = "SELECT * FROM departments WHERE DepartmentID = '$id'";
        $stmt = $conn->query($sql);
        while ($row = $stmt->fetch_assoc()) {
            $department = new Department($row['DepartmentID'], $row['DepartmentName'], $row['Address'], $row['Email']);
        }
        return $department;
    }
    public function insertDepartment($id,$name,$address,$email)
    {
        $conn = connectDB();
        $sql = "INSERT INTO departments (DepartmentID,DepartmentName, Address, Email) values ('$id','$name','$address','$email')";
        $stmt = mysqli_prepare($conn, $sql);
        $result = mysqli_stmt_execute($stmt);

        if($result){
            echo '<h4 class="text-center text-danger">Thêm dữ liệu thành công</h4>';
        }
        else echo '<h4 class="text-center text-danger">Thêm dữ liệu thất bại</h4>';

        $conn->close();
    }
    public function updateDepartment($id,$name,$address,$email)
    {
        $conn = connectDB();
        $sql = "UPDATE departments SET DepartmentName = '$name',Address ='$address',Email='$email' WHERE DepartmentID = '$id'";
        $stmt = mysqli_prepare($conn, $sql);
        $result = mysqli_stmt_execute($stmt);

        if($result){
            echo '<h4 class="text-center text-danger">Cập nhật dữ liệu thành công</h4>';
        }
        else echo '<h4 class="text-center text-danger">Cập nhật dữ liệu thất bại</h4>';

        $conn->close();
    }
}