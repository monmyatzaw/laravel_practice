<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Product id detail</title>
</head>
<body>
	 <h1>Detail of the Product</h1>
	 <ul>
		<?php foreach($detailid as $product): ?>
		 <li><?php echo $product['title'] ?></li>
		 <?php endforeach ?>
		 

	 </ul>
	 
</body>
</html>