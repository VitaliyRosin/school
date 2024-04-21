<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Text</th>
        <th>Create</th>
        <th>Update</th>
    </tr>
    <?php foreach($posts as $post): ?>
        <tr>
            <td><?= $post['id'] ?></td>
            <td><?= $post['title'] ?></td>
            <td><?= $post['text'] ?></td>
            <td><?= $post['create'] ?></td>
            <td><?= $post['update'] ?>
            <td><a href="/post/update?<?= http_build_query($post) ?>">update</a></td>
            <td><a href="/post/delete?id=<?= $post['id'] ?>">delete</a></td>
        </tr>
    <?php endforeach ?>
</table>

