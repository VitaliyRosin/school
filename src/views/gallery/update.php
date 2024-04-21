<?php
    if(!empty($_GET['id'])){
        $gallery_id = $_GET['id'];
        $title = $_GET['title'];
        $size = $_GET['size'];
        $url = $_GET['url'];
    }else{
        header('Location: /gallery/index');
    }
?>
<H1>Страница обновления фотографии</H1>
<p>Нажмите кнопку для обновления фотографии</p>
<form method = "post">
    <p>
        <label>Title</label>
        <input name="title" value=<?= $title ?>>
    </p>
    <p>
        <label>Size</label>
        <input name="size" value=<?= $size ?>>
    </p>
    <p>
        <label>Url</label>
        <input name="url" value=<?= $url ?>>
    </p>
    <input type="hidden" name="gallery_id" value = <?= $gallery_id ?>>
    <input type="submit" name="save">
</form>
