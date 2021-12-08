<?php
declare(strict_types = 1);

class StudentController
{
    public function render(array $GET, array $POST)
    {
        require 'Model/Student.php';
        require 'Helper/StudentGetter.php';
        require 'Helper/DatabaseUpdater.php';

        $connection = new mysqli('localhost', 'root', 'yoboyobo123', 'school');
        $columns = ["id", "name", "email", "class_id"];
        $table = "student";
        $display = new StudentGetter();
        $updater = new DatabaseUpdater();
        $student = new Student(null,null,null,null, null);

        function whatIsHappening() {
            echo '<h2>$_GET</h2>';
            var_dump($_GET);
            echo '<h2>$_POST</h2>';
            var_dump($_POST);
        }

        require 'View/students.php';

        whatIsHappening();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST["id"]) && $_POST["id"] !== "") {
                $student->setId($_POST["id"]);
                $_POST["id"] = "";
            }
            if (isset($_POST["name"]) && $_POST["name"] !== "") {
                $student->setName($_POST["name"]);
                $_POST["name"] = "";
            }
            if (isset($_POST["email"]) && $_POST["email"] !== "") {
                $student->setEmail($_POST["email"]);
                $_POST["email"] = "";
            }
            if (isset($_POST["class_id"]) && $_POST["class_id"] !== "") {
                $student->setClass($_POST["class_id"]);
                $_POST["class_id"] = "";
            }
            if (isset($_POST["teacher_name"]) && $_POST["teacher_name"] !== "") {
                $student->setTeacher($_POST["teacher_name"]);
                $_POST["teacher_name"] = "";
            }
        }
        echo "<br>";
        var_dump($student);
    }
}