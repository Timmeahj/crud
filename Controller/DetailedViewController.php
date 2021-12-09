<?php

class DetailedViewController
{
    public function render(array $GET, array $POST)
    {
        require 'Helper/StudentGetter.php';
        require 'Helper/TeacherGetter.php';

        $connection = new mysqli('localhost', 'root', 'yoboyobo123', 'school');

        if ($_GET["type"] === "student") {
            $display = new StudentGetter();
            require 'View/studentDetails.php';
        }
    }
}