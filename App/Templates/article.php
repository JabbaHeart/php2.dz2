<html>
<body>
<h1>Новости</h1>

<form action="<?php echo $record->getLink($action) ?>" method="post">
    <p><input type="text" name="header" value="<?php echo $record->getHeader(); ?>"></p>
    <textarea name="message"><?php echo $record->getMessage(); ?></textarea>
    <p><input type="submit" value="Сохранить"></p>
</form>

</body>
</html>

