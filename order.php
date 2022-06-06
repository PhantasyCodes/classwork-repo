<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classwork</title>
    <link rel="icon" type="image/x-icon" href="../images/bird.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="board">
        <form action="php/order_submit.php" method="post">
            <label for="fitem">Food item:</label>
            <select name="fitem">
                <option value="cookie">Cookie</option>
                <option value="cake">Cake</option>
            </select><br><br>
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity"><br><br>
            <button action="submit">Order</button>
        </form>
    </div>
</body>
</html>