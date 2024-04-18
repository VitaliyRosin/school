<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Size</th>
        <th>Url</th>
        <th>CreateOn</th>
        <th>UpdateOn</th>
    </tr>
    <?php foreach($pictures as $picture): ?>
        <tr>
            <td><?= $picture['id'] ?></td>
            <td><?= $picture['title'] ?></td>
            <td><?= $picture['size'] ?></td>
            <td><?= $picture['url'] ?></td>
            <td><?= $picture['create'] ?></td>
            <td><?= $picture['update'] ?></td>
        </tr>
    <?php endforeach ?>
</table>
