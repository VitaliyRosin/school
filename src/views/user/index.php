<table>
    <tr>
        <th>Id</th>
        <th>Nick name</th>
        <th>Login</th>
        <th>Password</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nick_name'] ?></td>
            <td><?= $user['login'] ?></td>
            <td><?= $user['password'] ?></td>
        </tr>
    <?php endforeach ?>
</table>
