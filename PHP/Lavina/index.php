<html>
	<head> 
		<title>HTML AND PHP</title>
		<style>
		<?php include"style.css"; ?>
		</style>
		
	</head>
	<body>
	<div class="header">
		<?php
		include "header.php";
		?>
	
	</div>
	<div class="content">
		<?php
		include "content.php";
		?>
		
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
	<div class="footer">
		<?php
		include "footer.php";
		?>
	</div>
	</body>
</html>