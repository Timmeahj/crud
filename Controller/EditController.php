<?php

class EditController
{
    public function render(array $GET, array $POST)
    {
        require 'Helper/StudentGetter.php';

        $connection = new mysqli('localhost', 'root', '', 'school');
        $columns = ["id", "name", "email", "class_id", "teacher_name"];
        $table = "student";
        $display = new StudentGetter();

        if ($_GET["type"] === "student") {
            require 'View/editStudent.php';
        }
    }
}