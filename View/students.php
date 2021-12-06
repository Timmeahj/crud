<?php require 'includes/header.php'?>
    <section>
        <nav>
            <p><a href="index.php">Back to homepage</a></p>
            <a href="index.php?page=teachers">Teachers</a>
            <a href="index.php?page=classes">Classes</a>
        </nav>

        <h4>Student page</h4>

        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Class Id</th>
            </tr>
            <?php
            $sql = "SELECT name, id, email, class_id FROM student";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>"."<td>".$row["id"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["class_id"]."</td>"."</tr>";
                }
            } else {
                echo "0 results";
            }
            $connection->close();
            ?>

    </section>
<?php require 'includes/footer.php'?>