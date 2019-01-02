<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- UIkit CDN-->
<link rel="stylesheet" href="css/uikit.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<title>POST</title>
</head>

<body>
<div id="main">
    <div class="uk-container">
    <?php
    require "class.php";
    ?>

    <h1>FORUM</h1>
    <h2>NOTICE BOARD</h2>
    <form action="index.php" method="post">
        <div class="uk-form-row">
        <label class="uk-form-label">PostContent</label>
        <input class="uk-search-input" type="text" name="content">
        </div>
        <div class="uk-form-row">
        <label class="uk-form-label">PostPerson</label>
        <input class="uk-search-input" type="text" name="user_name">
        </div>
    <div class="trnsmit">
        <button class="uk-button-primary" type="submit">Transmit</button>
    </div>
    </form>

    <h2>REMARK</h2>
    <?php
    require "get.php";
    ?>

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
    </div>
</div>
</body>
</html>