<?php

class EditController
{
    public function render(array $GET, array $POST)
    {
        require 'Helper/StudentGetter.php';
        require 'Helper/ClassGetter.php';

        $connection = new mysqli('localhost', 'root', 'yoboyobo123', 'school');


        if ($_GET["type"] === "student") {
            $columns = ["id", "name", "email", "class_id", "teacher_name"];
            $table = "student";
            $display = new StudentGetter();
            require 'View/editStudent.php';
        }
        if ($_GET["type"] === "class") {
            $columns = ["id", "name", "location", "teacher_id"];
            $table = "class";
            $display = new ClassGetter();
            require 'View/editClass.php';
        }
    }
}