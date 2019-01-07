<table class="uk-table-striped">
        <tr>
            <th>id</th>
            <th>date</th>
            <th>voice</th>
            <th>who</th>
            <th></th>
        </tr>
    <?php
        while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    ?>

        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["updated_at"] ?></td>
            <td><?= $row["content"] ?></td>
            <td><?= $row["user_name"] ?></td>
        <td>

        <form action="index.php" method="post">
        <input type="hidden" name="delete_id" value=<?= $row["id"] ?>>
        <button class="uk-button-danger" type="submit">Delete</button>
        </form>
        </td>
        </tr>
        <?php } ?>
        </table>