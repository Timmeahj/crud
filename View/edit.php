<form method="post" action="">
    <input name="id" type="number">
    <input name="name" type="text">
    <input name="email" type="email">
    <select>
        <?php $display->classIdOptions($connection, $table) ?>
    </select>
</form>
