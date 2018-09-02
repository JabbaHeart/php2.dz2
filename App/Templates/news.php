<html>
<body>
<h1>Новости</h1>

<?php
    foreach ($records as $record) {?>
<h2><?php echo $record->getHeader() ?> </h2>
        <a href="<?php echo $record->getLink() ?>">Редактировать</a>
        <a href="<?php echo $record->getLink('delete') ?>">Удалить</a>
        <hr>
<?php ;} ?>
<h3><a href="<?php echo $newRecord->getLink()?>">Добавить новость</a></h3>

</body>
</html>
