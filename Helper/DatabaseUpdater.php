<?php

class DatabaseUpdater
{

    public static function updateStudent(mysqli $connection, string | int $id, string $name, string $email, string | int $classId): void
    {
        $id = (int)$id;
        $classId = (int)$classId;
        $sql = "UPDATE student SET  name = '$name', email = '$email', class_id = '$classId' WHERE ID = $id";
        if ($connection->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $connection->error;
        }
    }

}