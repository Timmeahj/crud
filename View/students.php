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
            
            ?>
<form name="frmUser" method="post" action="">
<div class="button_link"><a href="index.php"> Back to List </a></div>
<table style='border:"0" align="center"' cellpadding="10" cellspacing="0" width="500" class="tbl-qa">
	<thead>
		<tr>
			<th colspan="2" class="table-header">Add New Student</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-row">
			<td><label>Name</label></td>
			<td><input type="text" name="name" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>Email</label></td>
			<td><input type="text" name="email" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td><label>class_id</label></td>
			<td><input type="text" name="class_id" class="txtField"></td>
		</tr>
		<tr class="table-row">
			<td colspan="2"><input type="submit" name="add" value="Submit" class="demo-form-submit"></td>
		</tr>
	</tbody>
</table>
</form>
            <?php



            ?>

    </section>
<?php require 'includes/footer.php'?>