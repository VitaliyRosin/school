<?php
if(!empty($_GET['id'])){
    $user_id = $_GET['id'];
    $first_name = $_GET['first_name'];
    $second_name = $_GET['second_name'];
    $date_to_birth = $_GET['date_to_birth'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
}else{
    header('Location: /gallery/index');
}
?>
<H1>Страница обновления пользователя</H1>
<p>Нажмите кнопку для обновления пользователя</p>
<form method = "post">
    <p>
        <label>First_name</label>
        <input name="first_name" value=<?= $first_name ?>>
    </p>
    <p>
        <label>Second_name</label>
        <input name="second_name" value=<?= $second_name ?>>
    </p>
    <p>
        <label>Date_to_birth</label>
        <input name="date_to_birth" value=<?= $date_to_birth ?>>
    </p>
    <p>
        <label>Phone</label>
        <input name="phone" value=<?= $phone ?>>
    </p>
    <p>
        <label>Email</label>
        <input name="email" value=<?= $email ?>>
    </p>
    <input type="hidden" name="user_id" value = <?= $user_id ?>>
    <input type="submit" name="save">
</form>
