<table>
    <tr>
        <th>id</th>
        <th>post name</th>
    </tr>
    <?php foreach($posts as $post): ?>
    <tr>
        <td><?= $post['id'] ?></td>
        <td><?= $post['name'] ?></td>
    </tr>
    <?php endforeach ?>
</table>
