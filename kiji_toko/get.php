<?php

    $sql = "SELECT * FROM kiji_touko ORDER BY updated_at;";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();