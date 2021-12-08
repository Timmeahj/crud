<?php

class TeacherGetter{

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
                if (isset($_GET["view"]) && $_GET["view"] === "detailed") {
                    $id = (int)$row["id"];
                    $teacher = $this->teacher($connection, $id);
                    echo "<td>${teacher["name"]}</td>";
                    
                }
                echo "<td><a href='index.php?page=edit&type=teacher&id=${row["id"]}'>Edit</a></td>
                      <td><form method='post'><button name='delete' value=${row["id"]}>Delete</button></form></td></tr>";

            }
        } else {
            echo "0 results";
        }
    }

    public function teacher($connection, $id): array
    {
        $id = (int)$id;
        $sql = "SELECT name, email FROM teacher WHERE id=$id";
        $result = $connection->query($sql);
        return $result->fetch_assoc();
    }


}