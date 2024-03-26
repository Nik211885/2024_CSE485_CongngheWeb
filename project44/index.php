<?php
require_once('config/config.php');
require_once ROOT . '/controllers/DepartmentController.php';
require_once ROOT . '/controllers/HomeController.php';

//echo ROOT;
//$departmentService = new DepartmentService();
//$departments = $departmentService->getAllDepartments();
//echo '<pre>';
//print_r($department);
//echo '</pre>';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

//$controller = ucfirst($controller);

if ($controller == 'home') {
    $homeController = new HomeController();
    $homeController->index();
} elseif ($controller == 'department') {
    $departmentController = new DepartmentController();
    if ($action == 'add') $departmentController->add();
    else if ($action == 'edit') $departmentController->edit($_GET['id']);

    else $departmentController->index();
} else echo 'Không tồn tại URL';
