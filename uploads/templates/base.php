<html>
<head>
<link href="css/print.css" rel="stylesheet" type="text/css">
<link href="dist/style.css" rel="stylesheet" type="text/css">
</head>

<?php for($i = 0; $i < $pages; ++$i): ?>
   <div class="page <?= $preview ? 'preview-page preview-' . $orientation : '' ?>">
      <?php foreach ($names as $name): ?>
         <div class="border border-grey-light" style="width: 10.5cm; height: 7.4cm;">
            <div class="card w-full" style="height: 3.7cm;">
               <?php include 'uploads/templates/' . $template . '/index.php'; ?>
            </div>
            <div class="w-full border-t-2 border-grey-light" style="height: 3.7cm;">
            </div>
         </div>
      <?php endforeach; ?>
   </div>
<?php endfor; ?>

</html>