<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
var_dump("laki");
        //load the view

        //TODO add edit button->set $POST to values properties of student->update table with new student properties->update database with new table data/student properties
        //TODO add delete button->remove row from table->create function for removing deleted row data from database
        //TODO add add button->add new row of data->set values to the corresponding student properties->create function for adding row data to database
        require './View/Model/Student.php';
        $connection = new mysqli('localhost', 'root', '', 'school');
        $student = new Student(null,null,null,null);
        if(isset($_POST["add"])){
            $name = $_POST['name'];
            $email = $_POST["email"];

            $result = $connection->query("INSERT INTO student (name, email, class) VALUES('$name', '$email', 1) ");            // die($mysqli->error);
            var_dump($result);
        }
        require 'View/students.php';
    }
}