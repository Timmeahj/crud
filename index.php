<?php
declare(strict_types=1);

//include all your model files here

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';
require 'Controller/SchoolClassController.php';


//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'students') {
    $controller = new StudentController();
}
if(isset($_GET['page']) && $_GET['page'] === 'teachers') {
    $controller = new TeacherController();
}
if(isset($_GET['page']) && $_GET['page'] === 'classes') {
    $controller = new SchoolClassController();
}

$controller->render($_GET, $_POST);