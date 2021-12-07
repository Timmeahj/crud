<?php require 'includes/header.php'?>
    <section>
        <nav>
            <p><a href="index.php">Back to homepage</a></p>
            <a href="index.php?page=teacher">Teachers</a>
            <a href="index.php?page=class">Classes</a>
        </nav>

        <h4>Student page</h4>

            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Class Id</th>
                    <th>Actions</th>
                </tr>
                <?php
                $display->table($connection, $columns, $table);
                ?>
            </table>

    </section>
<?php require 'includes/footer.php'?>