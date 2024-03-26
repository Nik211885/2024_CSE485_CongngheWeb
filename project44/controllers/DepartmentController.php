<?php
require_once ROOT . '/services/DepartmentService.php';

class DepartmentController
{
    public function index()
    {
//        Lay du lieu tu dau
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartments();
//        Hien thi ra dau
        include ROOT . '/views/department/index.php';
    }

    public function add()
    {
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartments();
        include ROOT . '/views/department/add.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["id"])) { $id = $_POST['id']; }
            if(isset($_POST["name"])) { $name = $_POST['name']; }
            if(isset($_POST["address"])) { $address = $_POST['address']; }
            if(isset($_POST["email"])) { $email = $_POST['email']; }

            $departmentService->insertDepartment($id,$name,$address,$email);
        }
    }

    public function edit($id)
    {
        $departmentService = new DepartmentService();
        $department = $departmentService->getDepartmentbyID($id);
        $departments = $departmentService->getAllDepartments();

        include ROOT . '/views/department/edit.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["id"])) { $id = $_POST['id']; }
            if(isset($_POST["name"])) { $name = $_POST['name']; }
            if(isset($_POST["address"])) { $address = $_POST['address']; }
            if(isset($_POST["email"])) { $email = $_POST['email']; }

            $departmentService->updateDepartment($id,$name,$address,$email);
        }
    }
}