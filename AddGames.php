<?php
require "./connectDB.php";

$name = $_POST['game_name_id'];
$release_date = $_POST['release_date_id'];
$developer = $_POST['developer_id'];
$publisher = $_POST['publisher_id'];

try{
    $sql = 'INSERT INTO games (game_name_id, release_date_id, developer_id, publisher_id) VALUES (:name, :date, :developer, :publisher)';
    $statement = $pdo->prepare($sql);
    return $statement->execute([

        'game_name_id'=> $name,
        'release_date_id'=> $release_date,
        'developer_id'=> $developer,
        'publisher_id'=> $publisher
    ]);
}catch(PDOException $error){
    die("Error: ". $error->getMessage());
}