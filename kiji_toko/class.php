<?php

    $pdo = new PDO("mysql:host=127.0.0.1; dbname=kiji_touko; charset=utf8", "root", "");

    if (isset($_POST["delete_id"])) {
        $delete_id = $_POST["delete_id"];
        $sql = "DELETE FROM kiji_touko WHERE id =  :delete_id;";
        $stmt = $pdo->prepare($sql);
        $stmt -> bindValue(":delete_id", $delete_id, PDO::PARAM_INT);
        $stmt -> execute();
    }

    if (isset($_POST["content"]) && isset($_POST["user_name"])) {
        $content = $_POST["content"];
        $user_name = $_POST["user_name"];
        $sql = "INSERT INTO kiji_touko (content, user_name, updated_at) VALUES (:content, :user_name, NOW());";
        $stmt = $pdo->prepare($sql);
        $stmt -> bindValue(":content", $content, PDO::PARAM_STR);
        $stmt -> bindValue(":user_name", $user_name, PDO::PARAM_STR);
        $stmt -> execute();
    
    }
