<?php require 'includes/header.php'?>
    <section>
        <nav>
            <p><a href="index.php">Back to homepage</a></p>
            <a href="index.php?page=teacher">Teachers</a>
            <a href="index.php?page=class">Classes</a>
            <?php
            if (isset($_GET["view"]) && $_GET["view"] === "detailed") {
                echo '<a href="index.php?page=student">General View</a>';
            }
            if (!isset($_GET["view"])) {
                echo '<a href="index.php?page=student&view=detailed">Detailed View</a>';
            }
            ?>
        </nav>

        <h4>Student page</h4>

            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <?php
                    if (isset($_GET["view"]) && $_GET["view"] === "detailed") {
                        echo "<th>E-mail</th><th>Class Id</th><th>Teacher</th><th>Actions</th>";
                    }
                    ?>
                </tr>
                <?php
                $display->table($connection, $columns, $table);
                ?>
            </table>

        <form method="post">
            <label>Id: </label>
            <input name="add_id" type="number">
            <label>Name: </label>
            <input name="add_name" type="text">
            <label>E-mail: </label>
            <input name="add_email" type="text">
            <label>Class Id: </label>
            <input name="add_class_id" type="number">
            <button type="submit" name="add" value="submit">Add Student</button>
        </form>

    </section>
<?php require 'includes/footer.php'?>