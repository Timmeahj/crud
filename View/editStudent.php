<?php
$student = $display->student($connection, $_GET["id"]);
$teacher = $display->teacher($connection, $_GET["id"]);
?>

<form method="post" action="index.php?page=student">
    <label>Id: </label>
    <input name="id" type="number" placeholder="<?php echo $student["id"]?>">
    <label>Name: </label>
    <input name="name" type="text" placeholder="<?php echo $student["name"]?>">
    <label>E-mail: </label>
    <input name="email" type="text" placeholder="<?php echo $student["email"]?>">
    <label>Class Id: </label>
    <select name="class_id" value="">
        <?php $display->classIdOptions($connection, $table) ?>
    </select>
    <label>Teacher: </label>
    <input name="teacher_name" type="text" placeholder="<?php echo $teacher["name"]?>">
    <button type="submit">Submit</button>
</form>
