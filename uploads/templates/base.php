<html>
<head>

<link href="css/print.css" rel="stylesheet" type="text/css">
<link href="uploads/templates/<?= $template ?>/style.css" rel="stylesheet" type="text/css">

</head>

<?php for($i = 0; $i < $pages; ++$i): ?>
   <div class="page <?= $preview ? 'preview-page preview-' . $orientation : '' ?>">
      <?php foreach ($names as $name): ?>
         <div class="card">
            <?php include 'uploads/templates/' . $template . '/index.php'; ?>
         </div>
      <?php endforeach; ?>
   </div>
<?php endfor; ?>

</html>