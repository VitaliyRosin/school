<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Text</th>
        <th>DateTime</th>
        <th>User</th>
    </tr>
    <?php foreach($posts as $post): ?>
        <tr>
            <td><?= $post['id'] ?></td>
            <td><?= $post['title'] ?></td>
            <td><?= $post['text'] ?></td>
            <td><?= $post['date_time'] ?></td>
            <td><?= $post['user'] ?></td>
        </tr>
    <?php endforeach ?>
</table>

