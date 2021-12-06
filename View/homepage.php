<?php require 'includes/header.php'?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
    <nav>
        <a href="index.php?page=students">Students</a>
        <a href="index.php?page=teachers">Teachers</a>
        <a href="index.php?page=classes">Classes</a>
    </nav>

    <?php
    $sql = "SELECT name, id FROM student";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"] . $row["id"] . "<br>";
    }
    } else {
    echo "0 results";
    }
    $connection->close();
    ?>

</section>
<?php require 'includes/footer.php'?>