<table>
    <tr>
        <th>Id</th>
        <th>First name</th>
        <th>Second name</th>
        <th>Date to birth</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['first_name'] ?></td>
            <td><?= $user['second_name'] ?></td>
            <td><?= $user['date_to_birth'] ?></td>
            <td><?= $user['phone'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><a href="/user/update?<?= http_build_query($user) ?>">update</a></td>
            <td><a href="/user/delete?id=<?= $user['id'] ?>">delete</a></td>
        </tr>
    <?php endforeach ?>
</table>
