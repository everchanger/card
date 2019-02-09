<?php 
$navLinksLeft = [
   [
      'view' => 'templates',
      'display' => 'Mallar'
   ],
   [
      'view' => 'about',
      'display' => 'Om'
   ]
];

$navLinksRight = [
   [
      'view' => 'help',
      'display' => 'Hjälp'
   ]
];
?>

<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- CSS -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="dist/style.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Charm:400,700" rel="stylesheet">
      <link rel="icon" href="../../../../favicon.ico">
      <title>Placeringskort</title>
   </head>
   <body>
      <nav class="flex items-center justify-between flex-wrap bg-grey p-6">
         
         <div class="flex items-center flex-no-shrink text-white mr-6 text-lg">
            <a href="?view=home" class="font-semibold text-xl tracking-tight text-grey-lighter hover:text-white">Card</a>
         </div>
         <div id="hamburger-button" class="block sm:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-grey-lighter border-grey-light hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Meny</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
         </div>
         <div id="mobile-menu" class="w-full block hidden flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="sm:flex-grow">
               <?php foreach($navLinksLeft as $nav): ?>
               <a class="block mt-4 sm:inline-block sm:mt-0 hover:text-white mr-4 font-semibold <?= $view_file_name === $nav['view'] ? 'text-white' : 'text-grey-lighter' ?>""  href="?view=<?= $nav['view'] ?>"><?= $nav['display'] ?></a>
               <?php endforeach; ?>
            </div>
            <div>
            <?php foreach($navLinksRight as $nav): ?>
               <a class="block mt-4 sm:inline-block sm:mt-0 hover:text-white mr-4 font-semibold <?= $view_file_name === $nav['view'] ? 'text-white' : 'text-grey-lighter' ?>""  href="?view=<?= $nav['view'] ?>"><?= $nav['display'] ?></a>
               <?php endforeach; ?>
            </div>
         </div>
      </nav>

      <main role="main" class="container mx-auto pt-4">
         <?php include $view_file_name;?>
      </main>
      <!-- JavaScript -->
      <script type="text/javascript" src="js/common.js"></script>
      <?php 
      $filename = substr($view_file_name, strpos($view_file_name, "/") + 1);
      $filename = substr($filename, 0, strpos($filename, "."));
      $filename = 'js/' . $filename . '.js'; 
      if(file_exists($filename)) {
         echo '<script type="text/javascript" src="' . $filename . '"></script>';
      }
      ?>
      
   </body>
</html>
