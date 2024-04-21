<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Size</th>
        <th>Url</th>
        <th>CreateOn</th>
        <th>UpdateOn
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php foreach($pictures as $picture): ?>
        <tr>
            <td><?= $picture['id'] ?></td>
            <td><?= $picture['title'] ?></td>
            <td><?= $picture['size'] ?></td>
            <td><?= $picture['url'] ?></td>
            <td><?= $picture['create'] ?></td>
            <td><?= $picture['update'] ?></td>
            <td><a href="/gallery/update?<?= http_build_query($picture) ?>">update</a></td>
            <td><a href="/gallery/delete?id=<?= $picture['id'] ?>">delete</a></td>
        </tr>
    <?php endforeach ?>
</table>
