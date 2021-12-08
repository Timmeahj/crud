<?php

class StudentGetter
{
    public function table($connection, $array, $table): void
    {
        $string = implode(", ", $array);
        $sql = "SELECT $string FROM $table";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($array as $value) {
                        echo "<td>$row[$value]</td>";
                }
                echo "<td><a href='index.php?page=edit&type=student&id=${row["id"]}'>Edit</a></td></tr>";
            }
        } else {
            echo "0 results";
        }
    }

    public function student($connection, $id): array
    {
        $id = (int)$id;
        $sql = "SELECT * FROM student WHERE id=$id";
        $result = $connection->query($sql);
        return $result->fetch_assoc();
    }

    public function teacher($connection, $id): mixed
    {
        $id = (int)$id;
        $sql = "select name from teacher where id = (select teacher_id from class where id = (select class_id from student where id=$id))";
        $result = $connection->query($sql);
        return $result->fetch_assoc();
    }

    public function classIdOptions($connection, $table): void
    {
        $sql = "SELECT DISTINCT class_id FROM $table";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option>".$row["class_id"]."</option>";
            }
        } else {
            echo "0 results";
        }
    }
}