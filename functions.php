<?php

function categeory_post_fetch($cat_id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$servername;dbname=newdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $stmt = $conn->prepare("SELECT id, title, text, img,  author FROM posts where category_id=$cat_id");
    // $stmt->execute();
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $posts = $stmt->fetchAll();
    
    $stmt = $conn->prepare("SELECT posts.id,posts.link,posts.author,posts.txt,posts.img,posts.category_id,posts.title,categories.name
    FROM categories
    INNER JOIN posts ON posts.category_id = categories.id WHERE posts.category_id=$cat_id
    ");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $categories = $stmt->fetchAll();

    return $categories;
}


function dbConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=newdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $conn;
    } catch(PDOException $e) {
    return "Connection failed: " . $e->getMessage();
    }
}


function select_all($local_table, $conn){
    $stmt = $conn->prepare("SELECT * FROM $local_table");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $results = $stmt->fetchAll();
    $conn = null;
    return $results;
}


function select_all_id($local_table, $x, $local_x, $conn){
    $stmt = $conn->prepare("SELECT * FROM $local_table where $x = '$local_x'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $results = $stmt->fetchAll();
    $conn = null;
    return $results;
}


function product_deleting(string $product, string $table_name, object $local_conn){
    // მონაცმების წასაშლელი სკრიპტი
    $sql = "DELETE FROM $table_name WHERE product='$product'";
    $local_conn->exec($sql);
    $local_conn = null;
}


// $insert_row = "(category_id, author, img, txt, title, link)";

function local_insert($local_table, $local_data, $local_value, $conn){
    $sql = "INSERT INTO $local_table $local_data
    VALUES $local_value";
    $conn->exec($sql);
    $conn = null;
}


