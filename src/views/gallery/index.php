<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Text</th>
        <th>DateTime</th>
        <th>User</th>
    </tr>
    <?php foreach($pictures as $picture): ?>
        <tr>
            <td><?= $picture['id'] ?></td>
            <td><?= $picture['title'] ?></td>
            <td><?= $picture['url'] ?></td>
            <td><?= $picture['date_time'] ?></td>
        </tr>
    <?php endforeach ?>
</table>
