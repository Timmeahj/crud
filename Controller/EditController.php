<?php

class EditController
{

    public function render(array $GET, array $POST)
    {
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view

        //TODO add edit button->set $_POST values to properties of student->update table with new student properties->update database with new table data/student properties

        //TODO add delete button->remove row from table->create function for removing deleted row data from database
        //TODO add add button->add new row of data->set values to the corresponding student properties->create function for adding row data to database
        require 'Model/Student.php';
        require 'Helper/Display.php';

        $connection = new mysqli('localhost', 'root', 'yoboyobo123', 'school');
        $columns = ["id", "name", "email", "class_id", "teacher_name"];
        $table = "student";
        $display = new Display();
        $student = new Student(null,null,null,null);

        require 'View/students.php';

    }
}