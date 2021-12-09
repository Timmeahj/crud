<?php

class SchoolClassController
{
    public function render(array $GET, array $POST)
    {
        require 'Model/SchoolClass.php';
        require 'Helper/ClassGetter.php';
        require 'Helper/DatabaseUpdater.php';

        $connection = new mysqli('localhost', 'root', 'yoboyobo123', 'school');
        $columns = ["id", "name"];
        if (isset($_GET["view"]) && $_GET["view"] === "detailed") {
            $columns = ["id", "name", "location"];
        }
        $table = "class";
        $display = new ClassGetter();
        $updater = new DatabaseUpdater();
        $class = new SchoolClass(null, null, null, null, null);

        require 'View/classes.php';
    }
}