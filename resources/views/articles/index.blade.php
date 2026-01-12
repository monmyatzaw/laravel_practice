<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Product List</title>
</head>
<body>
	<x-app-layout>
   <h1 class="text-lg font-bold text-center text-blue-500 mb-7">Article List</h1>
   <ul class="list-disc list-inside">
     <?php foreach($articles as $article): ?>
     <li class="text-gray-800 font-medium hover:text-blue-500 transition-colors ml-2">
		<?php echo $article['title'] ?></li>
     <?php endforeach ?>
   </ul>
</x-app-layout>
</body>
</html>