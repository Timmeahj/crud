<?php
declare(strict_types = 1);

class StudentController
{
    public function render(array $GET, array $POST)
    {
        require 'Model/Student.php';
        require 'Helper/StudentGetter.php';

        $connection = new mysqli('localhost', 'root', 'yoboyobo123', 'school');
        $columns = ["id", "name", "email", "class_id"];
        $table = "student";
        $display = new StudentGetter();
        $student = new Student(null,null,null,null);

        require 'View/students.php';
    }
}