<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Gallery - E-commerce</title>
    <link rel="stylesheet" href="style/style.css">
	<?php include"data.php" ?>
</head>
<body>
    <<header>
    <div class="header-title-container">
        <h1 class="header-title">Art Gallery</h1>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="?page=home">Home</a></li>
			  <li><a href="?page=items">Items</a></li>
            <li><a href="?page=about">About Us</a></li>
            <li><a href="?page=contact">Contact</a></li>
        </ul>
    </nav>
</header>

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
				elseif ($pg == "items") {
				include "items.php";
				}
				else {
				include "home.php";
					}
		} else { 
			include "home.php";
		}	
			?>

</div>
    
  


</body>
</html>
