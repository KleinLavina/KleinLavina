<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyxify Collection - Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <?php include'data.php'?>
    <script src="js/myjs.js"></script>
</head>
<body>
    <header>
        <h1>Nyxify Collection</h1>
        <h3 style="text-align:center;color:#e8ebe4;">By: Klein F. Lavina BSIT 3-T</h3>
    </header>
    <nav>
            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=about">About</a></li>
                <li><a href="?page=row-item">Row-Item</a></li>
                <li><a href="?page=grid-item">Grid-Item</a></li>
                <li><a href="?page=services">Services</a></li>
                <li><a href="?page=contact">Contact</a></li>
                <li><a href="?page=login">LogIn</a></li>
            </ul>
    </nav>  

<div class="all-content">
<?php 
	if (isset($_GET['page'])) {
		$pg = $_GET['page'];
			if ($pg == "home") {
				include "home.php";
				}
				elseif ($pg == "about") {
				include "about.php";
				}
				elseif ($pg == "row-item") {
				include "row-item.php";
				}
                elseif ($pg == "grid-item") {
                include "grid-item.php";
                }
                elseif ($pg == "services") {
                include "services.php";
                }
                elseif ($pg == "login") {
                include "login.php";
                }
				elseif ($pg == "contact") {
				include "contact.php";
				}
				else {
				include "home.php";
					}
		} else { 
			include "home.php";
		}	
			?>

</div>
    <footer>
    <?php include "footer.php"; ?>
    </footer>
</body>
</html>
