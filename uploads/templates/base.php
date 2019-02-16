<html>
<head>
<link href="css/print.css" rel="stylesheet" type="text/css">
<link href="dist/style.css" rel="stylesheet" type="text/css">
</head>

<?php

$perPage = 8;
$pages = count($names) / 8;

?>
<?php foreach ($names as $index => $name): ?>
   <?php if($index === 0 || $index % 8 === 0): ?>
      <div class="page <?= $preview ? 'preview-page preview-' . $orientation : '' ?>">
   <?php endif; ?>
         <div class="border border-grey-light" style="width: 10.5cm; height: 7.4cm; float: left">
            <div class="w-full border-grey-light" style="height: 3.7cm;">
            </div>
            <div
               class="card w-full border-t-2 border-b-2"
               style="height: 3.7cm;"
            >
               <?php include TEMPLATE_DIRECTORY . '/' . $template . '/index.php'; ?>
            </div>
         </div>
   <?php if(($index + 1) % 8 === 0 || $index + 1 >= count($names)): ?>
      </div>
   <?php endif; ?>
<?php endforeach; ?>

</html>