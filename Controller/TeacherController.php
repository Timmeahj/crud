<?php

class TeacherController
{
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.


        require 'Model/Teacher.php';
        require 'Helper/TeacherGetter.php';
        require 'Helper/DatabaseUpdater.php';

        $connection = new mysqli('localhost', 'root', '', 'school');
        $columns = ["id", "name"];
        if (isset($_GET["view"]) && $_GET["view"] === "detailed") {
            $columns = ["id", "name", "email"];
        }
        $table = "teacher";
        $display = new teacherGetter();
        $updater = new DatabaseUpdater();
        $teacher = new teacher(null,null,null,null, null);

        //load the view
        require 'View/teachers.php';
    }
}