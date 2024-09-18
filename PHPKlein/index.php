
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML AND PHP</title>
    <link rel="stylesheet" href="style.css">
    <?php include'data.php'?>

</head>
<body>
    <div class="header">
        <?php include "header.php"; ?>
    </div>
    <div class="nav-bar">
        <ul>
            <li><a href='./index.php'>Template One</a></li>
            <li><a href='./index2.php'>Template Two</a></li>
        </ul>

    </div>
    
    <h1 style="text-align:center;">Eco-Friendly Fruit Market</h1>
    <div class="content2">
           <?php include"indexview.php"; ?>
    </div>
<div class="footer">
    <?php include"footer.php"; ?>
</div>
</body>
</html>
