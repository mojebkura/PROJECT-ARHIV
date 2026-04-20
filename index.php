<?php
require './connectDB.php';

try {
        $sql = "SELECT * FROM games";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $games = $statement->fetchAll();
}catch(PDOException $error){
    die("Error: ". $error->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АРХИВ ИГР</title>
</head>
<body>
    <div class="container mt-3 w-50 p-4 border border-dark" style="background-color: #eee;">
    <h1 class="text-center">Список игр</h1>
    <table class="table table-bordered table-striped" style="border-collapse: collapse;" border="3" cellpadding="10">
                <thead style="background-color: #f2f2f2;">
        <div class="card" style="width: 18rem;">
        <img src="/images/batmanAC.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Batman: Arkham City</h5>
            <p class="card-text">О игре Batman Arkham City.</p>
            <a href="/BatmanAC/batmanAC.php" class="btn btn-primary">Подробнее</a>
        </div>        
    </div>
</body>
</html>