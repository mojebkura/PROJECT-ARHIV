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
                    <tr>
                        <th align="left">ID</th>
                        <th align="left">название</th>
                        <th align="left">дата</th>
                        <th align="left">разработчик</th>
                        <th align="center">издатель</th>
                        <th align="center">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($games as $game): ?>
                    <tr>
                        <th><?php echo $game['id'] ?></th>
                        <th><?php echo $game['game_name_id'] ?></th>
                        <th><?php echo $game['release_date_id'] ?></th>
                        <th><?php echo $game['developer_id'] ?></th>
                        <th><?php echo $game['publisher_id'] ?></th>
                        <th>
                            <a href="./BatmanAC/batmanAC.php" class="btn btn-info">Узнать подробнее</a>
                        </th>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
    </div>
</body>
</html>