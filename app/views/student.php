<h1>STUDENT LIST</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Username</th>
    </tr>

    <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student->id ?></td>
            <td><?= $student->firstname ?></td>
            <td><?= $student->lastname ?></td>
            <td><?= $student->email ?></td>
            <td><?= $student->username ?></td>
        </tr>
    <?php endforeach; ?>
</table>