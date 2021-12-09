<?php

$teacher = $display->teacher($connection, $_GET["id"]);
var_dump($teacher);
?>

<form role="form" method="post" action="index.php?page=teacher">
    <label for="inputUser" class="col-sm-2 col-form-label">Id: </label>
    <input name="id" type="number" value="<?php echo $teacher["id"]?>" readonly>
    <label for="inputUser" class="col-sm-2 col-form-label">Name: </label>
    <input name="name" type="text" value="<?php echo $teacher["name"]?>">
    <label for="inputEmail" class="col-sm-2 col-form-label">E-mail: </label>
    <input name="email" type="text" value="<?php echo $teacher["email"]?>">

    <button type="submit" name="edit" value="submit">Submit</button>
</form>


