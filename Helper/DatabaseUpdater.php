<?php

class DatabaseUpdater
{

    public static function updateName($connection, string $name, int $id): void
    {
        $connection->query("UPDATE student SET  name = $name WHERE ID = $id");
    }

}