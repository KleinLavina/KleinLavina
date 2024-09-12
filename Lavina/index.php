<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML AND PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <?php include "header.php"; ?>
    </div>
    <div class="content">
        <?php include "content.php"; ?>
        <div class="image-container">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : '';
            if ($page == "maasin") {
                include "a/maasin.php";
            } elseif ($page == "matalom") {
                include "a/matalom.php";
            } else {
                include "a/mahaplag.php";
            }
            ?>
        </div>
    </div>
    <div class="content2">
      
        <ul>
            <?php foreach ($fruits1 as $fruit): ?>
                <li>
                    <img src="images/<?= $fruit['image']; ?>" alt="<?= $fruit['name']; ?>" />
                    <?= $fruit['name'] . ', Price Per Kilo: P' . $fruit['perKilo'] . ', Price Per Piece: P' . $fruit['perPiece']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="footer">
        <?php include "footer.php"; ?>
    </div>
</body>
</html>
