<?php
require_once ROOT . '/services/DepartmentService.php';

class HomeController
{
    public function index()
    {
        $departmentService = new DepartmentService();
        $departments = $departmentService->getAllDepartments();

        include ROOT . '/views/home/index.php';

    }

}