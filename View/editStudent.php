<?php
$class = $display->student($connection, $_GET["id"]);
$teacher = $display->teacher($connection, $_GET["id"]);
?>

<form method="post" action="index.php?page=student">
    <label>Id: </label>
    <input name="id" type="number" value="<?php echo $class["id"]?>" readonly>
    <label>Name: </label>
    <input name="name" type="text" value="<?php echo $class["name"]?>">
    <label>E-mail: </label>
    <input name="email" type="text" value="<?php echo $class["email"]?>">
    <label>Class Id: </label>
    <select name="class_id">
        <?php $display->classIdOptions($connection, $table) ?>
    </select>
    <label>Teacher: </label>
    <input name="teacher_name" type="text" value="<?php echo $teacher["name"]?>">
    <button type="submit" name="edit" value="submit">Submit</button>
</form>
