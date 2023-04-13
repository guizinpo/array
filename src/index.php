<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inserir Tarefa</h1>

    <form action="main.php" method="POST">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required><br>

        <label for="details">Details</label>
        <textarea name="details" id="details"></textarea>

        <input type="submit" id="btnSubmitInsertTaskForm" value="enviar"> <br>
    </form>
</body>
</html>