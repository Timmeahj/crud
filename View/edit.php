<form method="post" action="">
    <input name="id" type="number" placeholder="">
    <input name="name" type="text" placeholder="">
    <input name="email" type="text" placeholder="">
    <select>
        <?php $display->classIdOptions($connection, $table) ?>
    </select>
    <input name="teacher_name" type="text" placeholder="">
</form>
