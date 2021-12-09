<?php require 'includes/header.php'?>
    <section>
        <nav class="jumbotron">
            <p><a class="btn btn-primary btn" href="index.php">Back to homepage</a></p>
            <a class="btn btn-primary btn" href="index.php?page=teacher">Teachers</a>
            <a class="btn btn-primary btn" href="index.php?page=class">Classes</a>
            <?php
            if (isset($_GET["view"]) && $_GET["view"] === "detailed") {
                echo '<a class="btn btn-primary btn" href="index.php?page=student">General View</a>';
            }
            if (!isset($_GET["view"])) {
                echo '<a class="btn btn-primary btn" href="index.php?page=student&view=detailed">Detailed View</a>';
            }
            ?>
        </nav>

        <h4>Student page</h4>

            <table class="table">
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
             <div class="form-group">
                <label>Id: </label>
                <input name="add_id" type="number" class="form-control" placeholder="Give a ID number">
            </div>  
            <div class="form-group">
                <label>Name: </label>
                <input name="add_name" type="text" class="form-control" placeholder="Enter Student name">
            </div>    
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail: </label>
                <input   aria-describedby="emailHelp" placeholder="Enter email" name="add_email" type="text" class="form-control">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>    
            <div class="form-group">    
                <label>Class Id: </label>
                <input name="add_class_id" type="number" class="form-control" placeholder="Choose the class">
            </div>    
            <div class="form-group">    
                <button type="submit" name="add" value="submit" class="btn btn-primary">Add Student</button>
            </div>
        </form>

    </section>
<?php require 'includes/footer.php'?>