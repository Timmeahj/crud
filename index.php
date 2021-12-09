<?php
declare(strict_types=1);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php

//include all your model files here

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';
require 'Controller/SchoolClassController.php';
require 'Controller/EditController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'student') {
    $controller = new StudentController();
}
if(isset($_GET['page']) && $_GET['page'] === 'teacher') {
    $controller = new TeacherController();
}
if(isset($_GET['page']) && $_GET['page'] === 'class') {
    $controller = new SchoolClassController();
}
if(isset($_GET['page']) && $_GET['page'] === 'edit') {
    $controller = new EditController();
}
$controller->render($_GET, $_POST);