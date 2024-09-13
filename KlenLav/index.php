
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML AND PHP</title>
    <link rel="stylesheet" href="style.css">
    <?php
        $fruits1 = [
            [
                'name' => 'Orange',
                'perKilo' => 120,
                'perPiece' => 15,
                'image' => 'orange.jpg',
            ],
            [
                'name' => 'Lemon',
                'perKilo' => 150,
                'perPiece' => 20,
                'image' => 'lemon.jpg',
            ],
			[
                'name' => 'Banana',
                'perKilo' => 120,
                'perPiece' => 15,
                'image' => 'banana.jpg',
            ],
            [
                'name' => 'Mango',
                'perKilo' => 300,
                'perPiece' => 20,
                'image' => 'mango.jpg',
            ],
        ];
?>

</head>
<body>
    <div class="header">
        <?php include "header.php"; ?>
    </div>
    <div class="nav-bar">
        <ul>
            <li><a href='?page=maasin'>Maasin</a></li>
            <li><a href='?page=matalom'>Matalom</a></li>
            <li><a href='?page=mahaplag'>Mahaplag</a></li>
        </ul>

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
    <h1 style="text-align:center;">Eco-Friendly Fruit Market</h1>
    <div class="content2">
            <?php foreach($fruits1 as $fruit) : ?>
                <div class="item">
                    <h1 class="title-item"><?=$fruit['name']?></h1>
                    <div class="image-item">
                        <img src="image/<?=$fruit['image']?>">
                    </div>
                    <h3>Price Per Piece: P<?= $fruit['perPiece']?></h3>
                    <h3>Price Per Kilo: P<?= $fruit['perKilo']?></h3>
                </div>
            <?php endforeach; ?>
    </div>
<div class="footer">
    <?php include"footer.php"; ?>
</div>
</body>
</html>
