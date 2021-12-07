<?php

class Display
{

    public function whatIsHappening(): void
    {
        echo '<h2>$_GET</h2>';
        var_dump($_GET);
        echo '<h2>$_POST</h2>';
        var_dump($_POST);
        echo '<h2>$_COOKIE</h2>';
        var_dump($_COOKIE);
    }

    public function table($connection, $array, $table): void
    {
        $string = implode(", ", $array);
        $sql = "SELECT $string FROM $table";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            $keys = [];
            while($row = $result->fetch_assoc()) {
                foreach($row as $key => $value) {
                    if (!in_array($key, $keys, true))
                    {
                        $keys[] = $key;
                    }
                }
                echo "<tr><form method='post'>";
                foreach ($array as $key => $value) {
                    if (is_numeric($row[$value])) {
                        echo "<td><input type='number' name='$keys[$key]' value='$row[$value]'></td>";
                    } else {
                        echo "<td><input type='text' name='$keys[$key]' value='$row[$value]'></td>";
                    }
                }
                echo "<td><button type='submit'>Edit</button></td></tr></form>";
            }
        } else {
            echo "0 results";
        }
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