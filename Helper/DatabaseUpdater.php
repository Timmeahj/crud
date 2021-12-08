<?php

class DatabaseUpdater
{

    public static function updateName($connection, string | int $id, string $name, string $email, string | int $class_id): void
    {
        $id = (int)$id;
        $sql = "UPDATE student SET  name = '$name', email =  WHERE ID = $id";
        if ($connection->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $connection->error;
        }
    }

}