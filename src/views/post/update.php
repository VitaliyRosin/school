<?php
if(!empty($_GET['id'])){
    $post_id = $_GET['id'];
    $title = $_GET['title'];
    $text = $_GET['text'];
}else{
    header('Location: /post/index');
}
?>
<H1>Страница обновления сообщения</H1>
<p>Нажмите кнопку для обновления сообщения</p>
<form method = "post">
    <p>
        <label>Title</label>
        <input name="title" value=<?= $title ?>>
    </p>
    <p>
        <label>Text</label>
        <input name="text" value=<?= $text ?>>
    </p>
    <input type="hidden" name="post_id" value = <?= $post_id ?>>
    <input type="submit" name="save">
</form>
